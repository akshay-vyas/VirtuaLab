
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
	<h3 align="center">SUBJECT </h3>
	<html>

<?php include('val.php');
session_start();
$uname=$_SESSION['uname'];
?>
<form name="form1" method="post" action="query_insert.php" id="formID">
  <table width="287" id="hb" border="5">
    <tr>
      <td>Q From </td>
      <td><input type="text" name="q_from" id="q_from" value="<?php echo $uname;?>" readonly=""></td>
    </tr>
    <tr>
      <td>Q To </td>
      <td><select name="q_to" id="q_to">
	  <option>....select....</option>
	  <?php
	  include('dbconnect.php');
	  $sql="select * from user_registration";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['user_id'];?>"><?php echo $row['fullname'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Query Desc </td>
      <td><p>
        <input name="query_desc" type="text" class="validate[required]" id="query_desc">
      </p>
        <p>&nbsp;        </p></td>
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