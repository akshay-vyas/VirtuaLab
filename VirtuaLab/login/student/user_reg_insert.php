<?php
error_reporting(0);
include("dbconnect.php");
$user_name=$_POST['ea'];
$password=$_POST['eb'];
$type=$_POST['ec'];
$address=$_POST['ed'];
$city=$_POST['ee'];
$state=$_POST['ef'];
$country=$_POST['eg'];
$email=$_POST['eh'];
$mobile=$_POST['ei'];
$age=$_POST['ej'];
$gender=$_POST['ek'];
$regsql="insert into user_registration values(null,'$user_name','$password','$type','$address','$city','$state','$country','$email','$mobile','$age','$gender')";
mysql_query($regsql);
?>
<script>
alert("values inserted"); 
document.location="user_reg_view.php";
</script>