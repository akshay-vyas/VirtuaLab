<?php
error_reporting(0);
include("dbconnect.php");
$cat=$_POST['aa'];
$des=$_POST['ab'];
$catsql="insert into category values(null,'$cat','$des')";
mysql_query($catsql);
?>
<script>
alert("values Inserted");
document.location="category_view.php";
</script>