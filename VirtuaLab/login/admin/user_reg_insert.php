<?php
error_reporting(0);
include("dbconnect.php");
$user_name=$_POST['ea'];
$address=$_POST['ed'];
$clg=$_POST['clg_id'];
$email=$_POST['eh'];
$mobile=$_POST['ei'];
$age=$_POST['ej'];
$gender=$_POST['ek'];
$qual=$_POST['el'];
$regsql="insert into user_registration values(null,'$user_name','$address','$clg','$email','$mobile','$age','$gender','$qual','active')";
mysql_query($regsql);
$regsql1="insert into login values('$email','123456','staff','What is your Mobile No?','$mobile','active')";
mysql_query($regsql1);

?>
<script>
alert("values inserted"); 
document.location="user_reg_view.php";
</script>