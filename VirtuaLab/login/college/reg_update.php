<?php
error_reporting(0);
include("dbconnect.php");
$Student_id=$_POST['Student_id'];
$fname=$_POST['ea'];
$lname=$_POST['eb'];
$mbno=$_POST['ec'];
$gender=$_POST['ed'];
$degree=$_POST['ee'];
$regsql="update registration set firstname='$fname',lastname='$lname',mobile='$mbno',gender='$gender',degree='$degree' where Student_id='$Student_id'";
mysql_query($regsql);
echo $regsql;
?>
<script>
//alert("values Updated"); 
//document.location="reg_view.php";
</script>