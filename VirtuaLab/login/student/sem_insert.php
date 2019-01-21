s<?php
error_reporting(0);
include("dbconnect.php");

$sname=$_POST['ga'];
$course_id=$_POST['gb'];

$semsql="insert into sem values(null,'$sname','$course_id')";
mysql_query($semsql);
?>
<script>
alert("values Inserted");
document.location="sem_view.php";
</script>