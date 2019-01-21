<?php
include('dbconnect.php');
$hid=$_REQUEST['id'];
$subsql="delete from subject where subject_id=$hid";
mysql_query($subsql);
?>
<script>
alert("Vlaues Deleted");
document.location="subject_view.php";
</script>
