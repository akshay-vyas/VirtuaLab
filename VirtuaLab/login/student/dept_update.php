<?php
error_reporting(0);
include('dbconnect.php');
$dept_id=$_POST['dept_id'];
$dep=$_POST['ca'];
$desc=$_POST['cb'];
$depsql="update dept set dept_name='$dep',description='$desc' where dept_id='$dept_id'";
mysql_query($depsql);
echo $sql;
?>
<script>
alert("values updated"); 
document.location="dept_view.php";
</script>