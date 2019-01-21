<?php
include("dbconnect.php");
$aid=$_REQUEST['id'];
$catsql="delete from category where id=$aid";
mysql_query($catsql);
?>
<script>
alert("values deleted");
document.location="category_view.php"
</script>
