<?php
error_reporting(0);
include("dbconnect.php");
$by=$_POST['a'];
$date=$_POST['b'];
$file=$_POST['c'];
$id=$_POST['d'];
$key=$_POST['e'];
$status=$_POST['f'];
$sql="insert into attached_files values(null,'$by','$date','$file','$id','$key','$status')";
mysql_query($sql);
?>
<script>
alert("values inserted"); 
document.location="attach_view.php";
</script>