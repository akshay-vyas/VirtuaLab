<?php
error_reporting(0);
include("dbconnect.php");
$user_id=$_POST['user_id'];
$user_name=$_POST['ea'];
$address=$_POST['eb'];
$clg_id=$_POST['clg_id'];
$email=$_POST['ed'];
$mobile_no=$_POST['ee'];
$age=$_POST['ef'];
$gender=$_POST['eg'];
$qualification=$_POST['eh'];
$status= active;
$regsql="update user_registration set fullname='$user_name',address='$address',clg_id='$clg_id',email_id='$email',mobile_no='$mobile_no',age='$age',gender='$gender',qualification='$qualification', status='$status' where user_id='$user_id'";
mysql_query($regsql);
?>
<script>
alert("values update"); 
document.location="user_reg_view.php";
</script>