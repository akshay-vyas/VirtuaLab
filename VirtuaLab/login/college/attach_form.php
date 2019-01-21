
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
	<h3 align="center">Attach File </h3>
	<html>
<?php include('val.php');?>
<form name="form1" method="post" action="attach_insert.php" id="formID">
  <table width="303" align="center">
    <tr>
      <td>Attached by </td>
      <td><input type="text" name="a" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Attached date </td>
      <td><input type="text" name="b" class="validate[required,custom[date]]"></td>
    </tr>
    <tr>
      <td>Attached file </td>
      <td><input type="text" name="c" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Category Id </td>
      <td><select name="d" id="d" class="validate[required]">
	  <option value="">...select...</option>
	  <?php
	  include('dbconnect.php');
	  $sql="select * from category";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['id'];?>"><?php echo $row['category_name'];?></option>
	  <?php
	  }
	  ?>
	  
      </select></td>
    </tr>
    <tr>
      <td>Key</td>
      <td><input type="text" name="e" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="f" class="validate[required,custom[onlyLetter]]"></td>
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