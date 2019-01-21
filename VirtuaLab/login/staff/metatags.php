<?php 
error_reporting(0);
include('session_validate.php');?>

<?php  $uname=$_SESSION['uname'];  

include('dbconnect.php');  

$sql="select * from user_registration where email_id='$uname'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);

$name=$row['fullname'];
?>
<html>
<head>
<title>"VirtuaLab" Believe That</title>
<link rel="icon" href="mos-css/img/download.ico" type="image/ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>