<?php
error_reporting(0);
include("dbconnect.php");
$user_name=$_POST['ea'];
$address=$_POST['eb'];
$clg=$_POST['clg_id'];
$email=$_POST['ed'];
$mobile=$_POST['ee'];
$age=$_POST['ef'];
$gender=$_POST['eg'];
$qual=$_POST['eh'];
$regsql="insert into user_registration values(null,'$user_name','$address','$clg','$email','$mobile','$age','$gender','$qual','active')";
mysql_query($regsql);
$regsql1="insert into login values('$email','123456','staff','What is your Mobile No?','$mobile','active')";
mysql_query($regsql1);

?>
<script>
alert("values inserted"); 
document.location="user_reg_view.php";
</script>