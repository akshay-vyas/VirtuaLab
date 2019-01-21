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
		<li><a href="../logout.php">Logout</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3 align="center">Edit Course </h3>
	<html>

<?php 
include('dbconnect.php');
include('val.php');
$bid=$_REQUEST['id'];
$cousql="select * from course where course_id='$bid'";
$coures=mysql_query($cousql);
$courow=mysql_fetch_array($coures);
?>
<form name="form1" method="post" action="course_update.php" id="formID">
  <table width="303">
  <input type="hidden" name="course_id" value="<?php echo $courow['course_id'];?>">
    <tr>
      <td width="95">Duration</td>
      <td width="196"><input type="text" name="ba" value="<?php echo $courow['duration'];?>" class="validate[required]"></td>
    </tr>
    <tr>
      <td>Course Name</td>
      <td><input type="text" name="bb" value="<?php echo $courow['course_name'];?>" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td colspan= "2"> <div align= "center">
        <input type= "submit" name="Submit" value="Submit">
      </div> </td>
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