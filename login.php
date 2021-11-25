<?php
include('oops.php');
error_reporting(0);
$ob=new project();
if(isset($_POST['sub'])){
 $msg= $ob->login($_POST['email'],$_POST['pass']);




}
?>


<html>
    <head>
    <style>
          .mar{
              margin-top: 6%;
              background-color: lavender;
          }
      </style> 
    <?php include("head.php") ?>
    </head>
    <body>
    <?php include("navbar.php") ?>   
        <div class="container mar">
      
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" >
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" >
  </div>
 
  <input type="submit" class="btn btn-primary"  name="sub" value="Submit">
</form>
        </div>
<?php include("foot.php") ?>

    </body>
</html>