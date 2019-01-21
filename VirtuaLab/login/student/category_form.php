
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
	<h3 align="center">Category </h3>
	<html>
<?php 
include('val.php');
?> 
<form name="form1" method="post" action="category_insert.php" id="formID">
  <table width="308">
    <tr>
      <td>Category</td>
      <td><input type="text" name="aa" class="validate[required,coustom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input type="text" name="ab" class="validate[required,coustom[onlyLetter]]"></td>
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