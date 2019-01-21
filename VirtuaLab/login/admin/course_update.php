<?php
error_reporting(0);
include("dbconnect.php");
$course_id=$_POST['course_id'];
$dur=$_POST['ba'];
$cname=$_POST['bb'];
$cousql="update course set duration='$dur',course_name='$cname' where course_id='$course_id'";
mysql_query($cousql);
//echo $cousql;

?>
<script>
alert("values Updated"); 
document.location="course_view.php";
</script>