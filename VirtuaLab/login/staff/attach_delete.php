<?php
error_reporting(0);
include("dbconnect.php");
$id=$_REQUEST['id'];
$sql="delete from attached_files where attached_id=$id";
mysql_query($sql);
?>
<script>
alert("values deleted");
document.location="attach_view.php";
</script>
