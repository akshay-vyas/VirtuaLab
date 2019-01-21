<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>"VirtuaLab" Believe That</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
        </head>
    <body>
		<div class="wrapper">
			<h1>VirtuaLab</h1>
			<h2> <span>Believe That</span> </h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
				<?php include('admin/val.php');?>
					<form class="register active" name="form1" method="post" action="register.php" id="formID">
						<h3>Register</h3>
						<div class="column">
						  <div>
								<label>College Name</label>
							  <div align="center">
								    <select name="clg" id="clg" class="box">
                      <option value="">...select...</option>
                      <?php
	  include("dbconnect.php");
	  $cousql="select * from clg";
	  $coures=mysql_query($cousql);
	  while($courow=mysql_fetch_array($coures))
	  {
	  ?>
                      <option value="<?php echo $courow['clg_id'];?>"><?php echo $courow['clg_name'];?></option>
                      <?php
	  }
	  ?>
                                    </select>
						        <span class="error">This is an error</span>
							      </div>
							</div>
							
						</div>
						<div class="bottom">
							<input type="submit" value="Next" />
							<div class="clear"></div>
						</div>
					</form>
		

        </script>
    </body>
</html><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
