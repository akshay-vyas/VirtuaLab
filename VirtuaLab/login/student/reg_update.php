<?php
error_reporting(0);
include("dbconnect.php");
$Student_id=$_POST['Student_id'];
$fname=$_POST['ea'];
$address=$_POST['eb'];
$mbno=$_POST['ec'];
$gender=$_POST['ed'];
$sem=$_POST['ee'];
$regsql="update registration set fullname='$fname',address='$address',mobile='$mbno',gender='$gender',sem='$sem' where Student_id='$Student_id'";
mysql_query($regsql);
?>
<script>
alert("values inserted"); 
document.location="reg_view.php";
</script>