<?php
error_reporting(0);
include("dbconnect.php");
$clg_name=$_POST['ba'];
$city=$_POST['bb'];
$address=$_POST['bc'];
$cousql="insert into clg values(null,'$clg_name','$city','$address')";
mysql_query($cousql);
$sql="insert into login values('$clg_name','123456','college','city of the college?','$city','$active')";
mysql_query($sql);
//echo $sql;

?>
<script>
alert("values inserted"); 
document.location="clg_view.php";
</script>