<?php
include('dbconnect.php');
$q_id=$_POST['q_id'];
$q_from=$_POST['q_from'];
$q_to=$_POST['q_to'];
$query_desc=$_POST['query_desc'];
$reply=$_POST['reply'];
$sql="update queries set q_from='$q_from',q_to='$q_to',query_desc='$query_desc',reply='$reply' where q_id='$q_id'";
mysql_query($sql);
?>
<script>
alert ("Values Updated");
document.location="query_view.php";
</script>