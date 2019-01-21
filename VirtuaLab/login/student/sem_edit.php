<head>
<title>Admin MOS Template</title>
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
		Hello, Mr Vyas<br>
		<a href="">Lihat website</a> | <a href="">Help</a> | <a href="login.html">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.html">Dashboard</a></li>
		<li><a href="tabel.html">Tabel</a></li>
		<li><a href="form.html">Form</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3 align="center">Edit Semister </h3>
	<html>

<?php
include('dbconnect.php');
include('val.php');
error_reporting(0);
$gid=$_REQUEST['id'];
$semsql="select * from sem where sem_id='$gid'";
$semres=mysql_query($semsql);
$semrow=mysql_fetch_array($semres);
?>
<form name="form1" method="post" action="sem_update.php" id="formID">
<input type="hidden" name="sem_id" value="<?php echo $semrow['sem_id'];?>">
  <table width="308">
    <tr>
      <td>Sem Name </td>
      <td><input type="text" name="ga" value="<?php echo $semrow['sem_name'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Course ID</td>
<td><select name= "gb" id="gb" class="validate[required,custom[onlyNumber]]">>
	   <option value="">select</option>
	  <?php
	  include("dbconnect.php");
	  $semsql1="select * from course";
	  $semres1=mysql_query($semsql1);
	  while($semrow1=mysql_fetch_array($semres1))
	  {
	  ?>
	  <option value="<?php echo $semrow1['course_id'];?>"<?php if($semrow['s_course_id']==$semrow1['course_id']){ ?> selected <?php }?>><?php echo $semrow1['course_name'];?></option>
	  <?php
	  }
	  ?>
	  </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong><span class="style1">
        <input type="submit" name="Submit" value="Submit">
      </span></strong></div></td>
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