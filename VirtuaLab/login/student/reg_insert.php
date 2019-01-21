<?php
error_reporting(0);
include("dbconnect.php");
$fname=$_POST['ea'];
$lname=$_POST['eb'];
$mbno=$_POST['ec'];
$gender=$_POST['ed'];
$degree=$_POST['ee'];
$regsql="insert into registration values(null,'$fname','$lname','$mbno','$gender','$degree')";
mysql_query($regsql);
?>
<script>
alert("values inserted"); 
document.location="reg_view.php";
</script>