<?php
error_reporting(0);
include("dbconnect.php");
$uname=$_POST['da'];
$pword=$_POST['db'];
$type=$_POST['dc'];
$hqst=$_POST['dd'];
$hans=$_POST['de'];
$stus=$_POST['df'];
$logsql="insert into login values('$uname','$pword','$type','$hqst','$hans','$stus')";
mysql_query($logsql);
?>
<script>
alert("values inserted"); 
document.location="login_view.php";
</script>