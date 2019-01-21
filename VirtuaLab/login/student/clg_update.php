<?php
error_reporting(0);
include("dbconnect.php");
$clg_id=$_POST['clg_id'];
$clg_name=$_POST['ba'];
$clg_city=$_POST['bb'];
$clg_address=$_POST['bc'];
$cousql="update clg set clg_name='$clg_name',clg_city='$clg_city',clg_address='$clg_address' where clg_id='$clg_id'";
mysql_query($cousql);
?>
<script>
alert("values updated"); 
document.location="clg_view.php";
</script>