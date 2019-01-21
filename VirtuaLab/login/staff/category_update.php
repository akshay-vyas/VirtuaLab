<?php
error_reporting(0);
include("dbconnect.php");
$id=$_POST['id'];
$cat=$_POST['aa'];
$des=$_POST['ab'];
$catsql="update category set category_name='$cat',description='$des' where id='$id'";
mysql_query($catsql);
?>
<script>
alert("values updated");
document.location="category_view.php";
</script>