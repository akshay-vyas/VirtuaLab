<?php
include('dbconnect.php');
$q_from=$_POST['q_from'];
$q_to=$_POST['q_to'];
$query_desc=$_POST['query_desc'];

$sql="insert into queries values(null,'$q_from','$q_to','$query_desc','pending')";
mysql_query($sql);
?>
<script>
alert ("Values inserted");
document.location="query_view.php";
</script>