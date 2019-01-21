<?php
error_reporting(0);
include("dbconnect.php");
$course_id=$_POST['course_id'];
$dur=$_POST['ba'];
$cname=$_POST['bb'];
$sem=$_POST['bc'];
$cousql="update course set duration='$dur',course_name='$cname',sem_id='$sem' where course_id='$course_id'";
mysql_query($cousql);
?>
<script>
alert("values inserted"); 
document.location="course_view.php";
</script>