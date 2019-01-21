<?php
error_reporting(0);
include("dbconnect.php");
$eid=$_REQUEST['id'];
$regsql="delete from user_registration where user_id=$eid";
mysql_query($regsql);
?>
<script>
alert("registration will be deleted");
document.location="user_reg_view.php";
</script>
