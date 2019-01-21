
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
	<h3 align="center">Edit Attach </h3>
	<html>

<?php 
include('dbconnect.php');
$id=$_REQUEST['id'];
include('val.php');
$sql="select * from attached_files where attached_id='$id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="attach_update.php" id="formID">
  <table width="303">
  <input type="hidden" name="attached_id" value="<?php echo $row['attached_id'];?>">
    <tr>
      <td>Attached by </td>
      <td><input type="text" name="a" value="<?php echo $row['attached_by'];?>"  class="validate[requied,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Attached date </td>
      <td><input type="text" name="b" value="<?php echo $row['attached_date'];?>" class="validate[requied,custom[date]]"></td>
    </tr>
    <tr>
      <td>Attached file </td>
      <td><input type="text" name="c" value="<?php echo $row['attached_file'];?>" class="validate[requied,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Category Id </td>
      <td><select name="d" id="d" class="validate[required]">
	  <option>...select...</option>
	  <?php
	  include('dbconnect.php');
	  $sql1="select * from category";
	  $res1=mysql_query($sql1);
	  while($row1=mysql_fetch_array($res1))
	  {
	  ?>
	  <option value="<?php echo $row1['id'];?>"<?php if($row1['id']==$row1['id']){ ?> selected <?php }?>><?php echo $row1['category_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Key</td>
	<td><input type="text" name="e" value="<?php echo $row['key'];?>" class="validate[requied,coustom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Status</td>
	<td><input type="text" name="f" value="<?php echo $row['status'];?>" class="validate[requied,coustom[onlyLetter]]"></td>
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