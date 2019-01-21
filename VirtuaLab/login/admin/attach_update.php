<?php
error_reporting(0);
include('dbconnect.php');
$attached_id=$_POST['attached_id'];
$by=$_POST['a'];
$date=$_POST['b'];
$file=$_POST['c'];
$cid=$_POST['d'];
$key=$_POST['e'];
$status=$_POST['f'];
$sql="update attached_files set attached_by='$by',attached_date='$date',attached_file='$file',subject_id='$cid',`key`='$key',status='$status' where attached_id='$attached_id'";
mysql_query($sql);
//echo $sql;
?>
<script>
alert("values updated"); 
document.location="attach_view.php";
</script>