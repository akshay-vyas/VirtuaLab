<?php
error_reporting(0);
include("dbconnect.php");
$dep=$_POST['ca'];
$desc=$_POST['cb'];
$depsql="insert into dept values(null,'$dep','$desc')";
mysql_query($depsql);
?>
<script>
alert("values inserted"); 
document.location="dept_view.php";
</script>