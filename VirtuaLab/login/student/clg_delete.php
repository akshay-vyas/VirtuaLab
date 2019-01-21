<?php
include("dbconnect.php");
$bid=$_REQUEST['clg_id'];
$cousql="delete from clg where clg_id=$bid";
mysql_query($cousql);
?>
<script>
alert("values deleted");
document.location="clg_view.php"
</script>
