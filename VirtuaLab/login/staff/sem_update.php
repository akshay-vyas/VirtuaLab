<?php
error_reporting(0);
include("dbconnect.php");
$sem_id=$_POST['sem_id'];
$sname=$_POST['ga'];
$course_id=$_POST['gb'];
$semsql="update sem set sem_name='$sname',s_course_id='$course_id' where sem_id='$sem_id'";
mysql_query($catsql);
?>
<script>
alert("values updated");
document.location="sem_view.php";
</script>