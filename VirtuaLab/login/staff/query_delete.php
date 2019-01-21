<?php
include('dbconnect.php');
$id=$_REQUEST['id'];
$sql="delete from queries where q_id='$id'";
mysql_query($sql);
//echo $sql;
?>
<script>
alert("Vlaues Deleted");
document.location="query_view.php";
</script>
