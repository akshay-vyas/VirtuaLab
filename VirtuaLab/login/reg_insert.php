<?php
error_reporting(0);
include("dbconnect.php");
$fname=$_POST['ea'];
$address=$_POST['eb'];
$clg_id=$_POST['clg_id'];
$crs_id=$_POST['crs_id'];
$email=$_POST['cc'];
$mbno=$_POST['ec'];
$gender=$_POST['ed'];
$degree=$_POST['ee'];
$regsql="insert into registration values(null,'$fname','$address','$clg_id','$crs_id','$email','$mbno','$gender','$degree')";
mysql_query($regsql);
$regsql1="insert into login values('$email','123456','student','What is your Mobile No?','$mbno','active')";
mysql_query($regsql1);

?>
<script>
alert("Ur Username is: <?php echo $email;?> Password is: 123456"); 
document.location="index.html";
</script>