<?php
include("dbconnect.php");
$bid=$_REQUEST['id'];
$cousql="delete from course where course_id=$bid";
mysql_query($cousql);
?>
<script>
alert("values deleted");
document.location="course_view.php"
</script>
