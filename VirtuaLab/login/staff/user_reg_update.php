<?php
error_reporting(0);
include("dbconnect.php");
$user_id=$_POST['user_id'];
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
$regsql="update user_registration set user_name='$user_name',password='$password',type='$type',address='$address',city='$city',state='$state',country='$country',email_id='$email',mobile_no='$mobile',age='$age',gender='$gender' where user_id='$user_id'";
mysql_query($regsql);
?>
<script>
alert("values update"); 
document.location="user_reg_view.php";
</script>