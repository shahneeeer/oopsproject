

<?php
error_reporting(0);
session_start();
$wel=$_SESSION['eid'];
if(empty($wel)){
    header("location:login.php");
}
?>
<html>
    <head>
    <?php include("head.php") ?>  
    </head>
    <body>
     <?php include("navbar.php") ?>   
     <?php include("foot.php") ?> 
    </body>
</html>