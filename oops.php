<?php
class project
{
        private $con;
        public $msg;
        //Database connection
    function __construct()
    {
       $this->con= mysqli_connect("localhost","root","","oops") ;
      
    }
    //Inserting
    function registe($name,$age,$email,$password){
        if(mysqli_query($this->con,"insert into regis(name,age,email,password) values('$name',$age,'$email','$password')")){
            $msg="Register sucessfully";
            header("location:login.php");
            return $msg;
           
        }
        
        else{
            $msg=" not register sucessfully";
            return $msg;
        }

    }
//fetching
    function login($email,$password){
 
        $sel=mysqli_query($this->con,"select * from regis");
        if(mysqli_num_rows($sel)){
            while($arr=mysqli_fetch_assoc($sel)){
                if($arr['email']==$email ){
                    if($arr['password']==$password){
                        session_start();
                       $_SESSION['eid']=$email;
                        header("location:dashboard.php");
                    
                    }
                    
                   
                }
               
            }
        }

        
    }
//Change password
    function cpassw($oldp,$newp,$cpas){
        session_start();
        $profile=$_SESSION['eid'];
      
        $sel=mysqli_query($this->con,"select password from regis where email='$profile';");
      
        $arr=mysqli_fetch_assoc($sel);
        if($oldp==$arr['password']){
            if($newp==$cpas){
                mysqli_query($this->con,"update regis set password='$newp' where email='$profile';");
                echo "password updated";
            }
            else{
                echo "new password and confirm password doesnot match";
            }
        }
        else{
            echo "oldpassword is wrong";
        }
        

    }
    function __destruct()
    {
        mysqli_close($this->con);
    }
}
?>