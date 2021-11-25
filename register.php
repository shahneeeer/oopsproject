<?php
include("oops.php");
error_reporting(0);
$ob=new project;
if(isset($_POST['sub'])){
  
   
    $msg=$ob->registe($_POST['name'],$_POST['age'],$_POST['email'],$_POST['pass']);
   
}
?>


<!doctype html>
<html lang="en">
  <head>    
      <style>
          .mar{
              margin-top: 6%;
              background-color: lightgoldenrodyellow;
          }
      </style>  
<?php include("head.php") ?>
  </head>
  <body>
  <?php include("navbar.php") ?>   
  <div class="container mar">
  <?php
      if(!empty($msg)){
          echo $msg;
      }
      ?>
      <h2 class="text-info text-center">REGISTER</h2>
      
<form method="post">
    
<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="text" class="form-control" name="age" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="text" class="form-control" name="email" >
   
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="pass" >
  </div>
 
  <input type="submit" class="btn btn-primary" value="Submit" name="sub">
</form>
  </div>
    
<?php include("foot.php") ?>
  </body>
</html>