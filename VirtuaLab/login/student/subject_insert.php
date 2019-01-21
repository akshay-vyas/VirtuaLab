<?php
include('dbconnect.php');
$subname=$_POST['ha'];
$couid=$_POST['hb'];
$sem=$_POST['hc'];
$subsql="insert into subject values(null,'$subname','$couid','$sem')";
mysql_query($subsql);
?>
<script>
alert ("Values inserted");
document.location="subject_view.php";
</script>