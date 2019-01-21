<?php
error_reporting(0);
include("dbconnect.php");
$dur=$_POST['ba'];
$cname=$_POST['bb'];
$sem=$_POST['bc'];
$cousql="insert into course values(null,'$dur','$cname','$sem')";
mysql_query($cousql);
echo $sql;
?>
<script>
alert("values inserted"); 
document.location="course_view.php";
</script>