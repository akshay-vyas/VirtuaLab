
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

<?php include('val.php');?>
<?php include('dbconnect.php');
$id=$_REQUEST['id'];
$sql="select * from queries where q_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="query_update.php" id="formID">
  <table width="287" id="hb" border="5">
  <input type="hidden" name="q_id" id="q_id" value="<?php echo $row['q_id'];?>">
    <tr>
      <td>Q From </td>
      <td><input type="text" name="q_from" id="q_from" class="validate[required]" value="<?php echo $row['q_from'];?>" readonly=""></td>
    </tr>
    <tr>
      <td>Q To </td>
      <td><input type="text" name="q_to" id="q_to" class="validate[required]" value="<?php echo $row['q_to'];?>" readonly=""></td>
    </tr>
    <tr>
      <td>Query Desc </td>
      <td><p>
        <input name="query_desc" type="text" class="validate[required]" id="query_desc" value="<?php echo $row['query_desc'];?>" readonly="">
      </p>
        <p>&nbsp;        </p></td>
    </tr>
    <tr>
	<td>Reply</td>
      <td><p>
        <input name="reply" type="text" class="validate[required]" id="reply" >
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