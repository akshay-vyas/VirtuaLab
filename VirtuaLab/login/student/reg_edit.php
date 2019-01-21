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
		<li><a href="home.php">Home</a></li>
		<li><a href="reg_view.php">Profile</a></li>
		<li><a href="../logout.php">Logout</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3 align="center">Edit Registration </h3>
	<html>

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
  <input type="hidden" name="Student_id" value="<?php echo $regrow['Student_id'];?>" >
    <tr>
      <td>First name</td>
      <td><input type="text" name="ea" value="<?php echo $regrow['fullname'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address </td>
      <td><input type="text" name="eb" value="<?php echo $regrow['address'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Mobile No </td>
      <td><input type="text" name="ec" value="<?php echo $regrow['mobile'];?>"class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>gender</td>
	  <td><input name="ed" type="radio" value="Male">
							    Male
					          <input name="ed" type="radio" value="Female">
					            Female</td>

    </tr>
    <tr>
      <td>Semester</td>
      <td><input type="text" name="ee" value="<?php echo $regrow['sem'];?>" class="validate[required,custom[onlyNumber]]"></td>
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