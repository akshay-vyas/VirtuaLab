<?php
error_reporting(0);
include("dbconnect.php");
$eid=$_REQUEST['id'];
$regsql="delete from registration where Student_id=$eid";
mysql_query($regsql);
?>
<script>
alert("registration will be deleted");
document.location="reg_view.php";
</script>
