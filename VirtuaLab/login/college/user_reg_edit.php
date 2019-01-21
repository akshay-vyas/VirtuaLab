
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
	<h3 align="center">Edit </h3>
	<html>

<?php include('val.php');?>
<?php 
include('dbconnect.php');
include('val.php');
$eid=$_REQUEST['eid'];
$regsql="select * from user_registration where user_id='$eid'";
$regres=mysql_query($regsql);
$regrow=mysql_fetch_array($regres);
?>
<form name="form1" method="post" action="user_reg_update.php" id="formID">
  <table width="303">
  <input type="hidden"  id="user_id" name="user_id" value="<?php echo $row['user_id']?>" >
    <tr>
      <td>Full Name </td>
      <td><input type="text" name="ea" class="validate[required,custom[onlyLetter]]" value="<?php echo $regrow['fullname']?>" ></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="eb" class="validate[required,custom[onlyLetter]]" value="<?php echo $regrow['address']?>"></td>
    </tr>
   
	<tr>
      <td>College Id</td>
      <td><select name="clg_id" id="clg_id" >
       <!--  <option value="">...select...</option> -->
        <?php
	  include("dbconnect.php");
	  $un=$_SESSION['uname'];
	  $cousql="select * from clg where clg_name='$un'";
	  $coures=mysql_query($cousql);
	  while($courow=mysql_fetch_array($coures))
	  {
	  ?>
        <option value="<?php echo $courow['clg_id'];?>"><?php echo $courow['clg_name'];?></option>
        <?php
	  }
	  ?>
      </select></td>
    </tr>
	
    <tr>
      <td>E-Mail </td>
      <td><input type="text" name="ed" class="validate[required,custom[email]]" value="<?php echo $regrow['email_id']?>"></td>
    </tr>
    <tr>
      <td>Mobile No</td>
      <td><input type="text" name="ee" id="ei" class="validate[required,custom[mobile]]" value="<?php echo $regrow['mobile_no']?>"></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type="text" name="ef" class="validate[required,custom[onlyNumber]]" value="<?php echo $regrow['age']?>"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="eg" type="radio" value="Male">
        Male
          <input name="eg" type="radio" value="Female">
          Female</td>
    </tr>
	    <tr>
      <td>Qualification</td>
      <td><input type="text" name="eh" class="validate[required]" value="<?php echo $regrow['qualification']?>"></td>
    </tr>
    <tr>
	<tr>
	      <td>Status</td>
	      <td><input name="status" type="text" class="validate[required]" value="<?php echo $regrow['status']?>"> </td>
        </tr>
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