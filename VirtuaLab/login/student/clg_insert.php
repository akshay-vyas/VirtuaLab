<?php
error_reporting(0);
include("dbconnect.php");
$clg_name=$_POST['ba'];
$city=$_POST['bb'];
$address=$_POST['bc'];
$cousql="insert into clg values(null,'$clg_name','$city','$address')";
mysql_query($cousql);
echo $sql;
?>
<script>
alert("values inserted"); 
document.location="clg_view.php";
</script>