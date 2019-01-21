
<head>
<title>VirtuaLab</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		<br>
		 <a href="../logout.php">Logout</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="../logout.php">Logout</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3 align="center">Attach File </h3>
	<html>
<?php include('val.php');?>

<?php 
session_start();
error_reporting(0);
include("dbconnect.php");
 $uname=$_SESSION['uname'];
 $regsql="select * from user_registration where email_id='$uname'";
  $regres=mysql_query($regsql);
  $regrow=mysql_fetch_array($regres);
   // echo $regsql;
  ?>

<form name="form1" method="post" action="attach_insert.php" id="formID" enctype="multipart/form-data">
  <table width="303" align="center">
    <tr>
      <td>Attached by </td>
      <td><input type="text" name="a" value="<?php echo $regrow['fullname'];  ?>"></td>
    </tr>
    <tr>
      <td>Attached date </td>
      <td><input type="text" name="b" value="<?php echo date('Y-m-d') ?>"></td>
    </tr>
	 <tr>
      <td>Title</td>
      <td><input type="text" name="c" class="validate[required]" ></td>
    </tr>
    <tr>
      <td>Attached file </td>
      <td><input type="file" name="attached_file" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><textarea name="des" id="des"></textarea></td>
    </tr>
    <tr>
      <td>Subject Id </td>
      <td><select name="d" id="d" class="validate[required]">
	  <option value="">...select...</option>
	  <?php
	  include('dbconnect.php');
	  $sql="select * from subject";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['subject_id'];?>"><?php echo $row['sub_name'];?></option>
	  <?php
	  }
	  ?>
	  
      </select></td>
    </tr>
  
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit">
      </div></td>
    </tr>
  </table>
</form>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2015-2016  | <a href="#">Virtual Lab</a> | design 
	<a href="#">Akshay </a> </div>
</div>
</body>
</html>