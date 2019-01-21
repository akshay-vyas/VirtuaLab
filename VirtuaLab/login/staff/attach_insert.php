<?php
error_reporting(0);
include("dbconnect.php");
$by=$_POST['a'];
$date=$_POST['b'];
$title=$_POST['c'];
$des=$_POST['des'];

$target="../files/";
$attached_file=$_FILES["attached_file"]["name"];
$target.=basename($_FILES["attached_file"]["name"]);
move_uploaded_file($_FILES["attached_file"]["tmp_name"],$target);


$id=$_POST['d'];

$sql="insert into attached_files values(null,'$by','$date','$title','$attached_file','$des','$id')";
mysql_query($sql);
//echo $sql;
?>
<script>
alert("values inserted"); 
document.location="attach_view.php";
</script>