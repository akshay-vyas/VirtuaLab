<?php
error_reporting(0);
include("dbconnect.php");
$cid=$_REQUEST['id'];
$depsql="delete from dept where dept_id='$cid'";
mysql_query($depsql);
?>
<script>
alert("values deleted");
document.location="dept_view.php";
</script>
