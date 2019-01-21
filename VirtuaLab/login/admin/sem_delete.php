<?php
include("dbconnect.php");
$gid=$_REQUEST['id'];
$semsql="delete from sem where sem_id=$gid";
mysql_query($semsql);
?>
<script>
alert("values deleted");
document.location="sem_view.php"
</script>
