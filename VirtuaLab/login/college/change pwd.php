
<head>
<title>JSp Templete</title>
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
		 <a href="">Help</a> | <a href="home.php">Home</a>
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
	<h3 align="center">Change Password</h3>
	<html>

                    <!-- General Forms Content -->
                    <div class="block-content">
					<form name="form2" method="post" action="changepin.php">
<p>Old Password </p>
  <label>
  <input type="text" name="old_pwd">
  </label>
  <p>New password </p>
  <p>
    <label>
      <input type="text" name="new_pwd">
      </label>
	  <p>Confirm password </p>
  <p>
    <label>
      <input type="text" name="conf_pwd">
      </label>
  </p>


  <label>
  <input type="submit" name="Submit" value="Change" />
  </label>
</form>
</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2015-2016  | <a href="#">Virtual Lab</a> | design 
	<a href="#">Akshay </a> </div>
</div>
</body>
</html>





