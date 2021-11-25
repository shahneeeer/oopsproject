<?php
include("oops.php");
error_reporting(0);
$ob=new project;
if(isset($_POST['sub'])){
    $ob->cpassw($_POST['opass'],$_POST['npass'],$_POST['cpass']);

}

?>



<html>
    <head>
        <style>
            .mar{
                margin-top: 6%;
                background-color: lavenderblush;
            }
        </style>
<?php include('head.php') ?>
    </head>
    <body>
    <?php include('navbar.php') ?>
    <form method="post">
        <div class="container mar">
  <div class="mb-3">
    <label  class="form-label">old password</label>
    <input type="text" class="form-control" name="opass" >
  </div>
  <div class="mb-3">
  <label  class="form-label">New password</label>
    <input type="text" class="form-control" name="npass" >
  </div>
  <div class="mb-3 ">
  <label  class="form-label">Confirm password</label>
    <input type="text" class="form-control" name="cpass" >
  </div>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button>
</form>
</div>
<?php include('foot.php') ;?>
    </body>
</html>