<?php
error_reporting(0);
include("dbconnect.php");
$dur=$_POST['ba'];
$cname=$_POST['bb'];
$cousql="insert into course values(null,'$dur','$cname')";
mysql_query($cousql);
//echo $cousql;
?>
<script>
alert("values inserted"); 
document.location="course_view.php";
</script>