
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
		Hallo, Mas Administrator<br>
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
	<h3 align="center">Register </h3>
	<html>

<?php include('val.php');?>
<?php 
include('dbconnect.php');
include('val.php');
$eid=$_REQUEST['id'];
$regsql="select * from registration where Student_id='$eid'";
$regres=mysql_query($regsql);
$regrow=mysql_fetch_array($regres);
?>
<form name="form1" method="post" action="reg_update.php" id="formID">
  <table width="303">
  <input type="hidden" id="Student_id" name="Student_id" value="<?php echo $regrow['Student_id']?>">
    <tr>
      <td>Full name</td>
      <td><input type="text" name="ea" class="validate[required,custom[onlyLetter]]" value="<?php echo $regrow['fullname']?>"></td>
    </tr>
    <tr>
      <td>Address </td>
      <td><input type="text" name="eb"class="validate[required]"  value="<?php echo $regrow['address']?>"></td>
    </tr>
	 <tr>
      <td>College</td>
      <td><select name="clg_id" id="clg_id" class="validate[required]">
        <option value="">...select...</option>
        <?php
	  include("dbconnect.php");
	  $cousql2="select * from clg";
	  $coures2=mysql_query($cousql2);
	  while($courow2=mysql_fetch_array($coures2))
	  {
	  ?>
	  
        <option value="<?php echo $courow2['clg_id']; ?>"<?php if($courow['clg_id']==$courow2['clg_id']) {?> selected <?php } ?>><?php echo $courow2['clg_name']; ?>  </option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
	 <tr>
      <td>Course</td>
      <td><select name="crs_id" id="crs_id" class="validate[required]">
        <option value="">...select...</option>
        <?php
	  
	  $cousql1="select * from course";
	  $coures1=mysql_query($cousql1);
	  while($courow1=mysql_fetch_array($coures1))
	  {
	  ?>
	  <option value="<?php echo $courow1['course_id']; ?>"<?php if($courow['course_id']==$courow1['course_id']) {?> selected <?php } ?>><?php echo $courow1['course_name']; ?>  </option>
       
        <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Mobile No </td>
      <td><input type="text" name="ec" class="validate[required,custom[mobile]]" value="<?php echo $regrow['mobile']?>" ></td>
    </tr>
    <tr>
      <td>gender</td>
     <td><input name="gender" type="radio" value="male" <?php if($row['gender']=='male') {?> checked <?php } ?> class="validate[required]">
        Male 
        <input name="gender" type="radio" value="female" <?php if($row['gender']=='female') {?> checked <?php } ?>>
        Female</td>
    </tr>
    <tr>
      <td>sem</td>
      <td><input type="text" name="ee" class="validate[required,custom[onlyNumber]]"  value="<?php echo $regrow['sem']?>"></td>
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