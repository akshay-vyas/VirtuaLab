<?php
error_reporting(0);
include("dbconnect.php");
$subject_id=$_POST['subject_id'];
$subname=$_POST['ha'];
$couid=$_POST['hb'];
$sem=$_POST['hc'];
$subsql="update subject set sub_name='$subname',course_id='$couid',sem='$sem' where subject_id='$subject_id'";
mysql_query($subsql);
?>
<script>
alert("values updated");
document.location="subject_view.php";
</script>