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
	<h3 align="center">Edit Subject </h3>
	<html>

<?php 
include('dbconnect.php');
$hid=$_REQUEST['id'];
$subsql="select * from subject where subject_id='$hid'";
$subres=mysql_query($subsql);
$subrow=mysql_fetch_array($subres);
?>
<form name="form1" method="post" action="subject_update.php" form="fomrID">
  <table width="303">
  <input type="hidden" name="subject_id" value="<?php echo $subrow['subject_id'];?>">
    <tr>
      <td width="95">Subject Name</td>
      <td width="196"><input type="text" name="ha" value="<?php echo $subrow['sub_name'];?>" id="Subject Name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Course ID </td>
 	  <td><select name="hb" id="hb" class="validate[required]">
	  <option>...select...</option>
	  <?php
	  include('dbconnect.php');
	  $subsql1="select * from course";
	  $subres1=mysql_query($subsql1);
	  while($subrow1=mysql_fetch_array($subres1))
	  {
	  ?>
	  <option value="<?php echo $subrow1['course_id'];?>"<?php if($subrow['course_id']==$subrow1['course_id']){ ?> selected <?php }?>><?php echo $subrow1['course_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Sem</td>
      <td><input type="text" name="hc" value="<?php echo $subrow['sem'];?>"></td>
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