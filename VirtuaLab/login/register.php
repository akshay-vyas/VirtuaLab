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
			<h2> <span>Believe That!!</span> </h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
				<?php include('admin/val.php');?>
					<form class="register active" name="form1" method="post" action="reg_insert.php" id="formID">
						<h3>Register</h3>
						<div class="column">
						
							<div>
								<label>Full name</label>
								<input type="text" name="ea" class="validate[required,custom[onlyLetter]]" /> 
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Address</label>
								<input type="text" name="eb"class="validate[required]">
								<span class="error">This is an error</span>
							</div>
						  <div>
						  <label>Mobile No.</label>
								<input type="text" name="ec" class="validate[required,custom[mobile]]">
								   <span class="error">This is an error</span>
							      </div>
						  <div>
						  <label>Gender</label>
							<div align="center">
						      <input name="ed" type="radio" value="Male">
							    Male
					          <input name="ed" type="radio" value="Female">
					            Female
								      <span class="error">This is an error</span>
					        </div>
								  </div>
						  </div>
						
						<div class="column">
						  <div>
								<label>College Name</label>
							  <div align="center">
							<?php  
							$clg=$_POST['clg'];
							  include("dbconnect.php");
	  $cousql="select * from clg where clg_id='$clg'";
	  $coures=mysql_query($cousql);
	$courow=mysql_fetch_array($coures);
	 
	  ?>
                  

								    <input type="hidden" name="clg_id" value="<?php echo $clg; ?>" readonly="" />
									 <input type="text" name="clg_id1" value="<?php echo $courow['clg_name']; ?>" readonly="" />
						        
							      </div>
							</div>
							<div>
								<label>Course</label>
								<div align="center">
								  <select name="crs_id" id="crs_id" class="validate[required]">
            <option value="">...select...</option>
            <?php
	  include("dbconnect.php");
	  $cousql="select * from course"; 
	  $coures=mysql_query($cousql);
	  while($courow=mysql_fetch_array($coures))
	  {
	  ?>
            <option value="<?php echo $courow['course_id'];?>"><?php echo $courow['course_name'];?></option>
            <?php
	  }
	  ?>
                                  </select>
								  <span class="error">This is an error</span>
							      </div>
							</div>
							<div>
								<label>Mail Id</label>
								<input type="text" name="cc" class="validate[required,custom[email]]">
								<span class="error">This is an error</span>
							</div>
							<div>
								<label>Semester</label>
								<input type="text" name="ee" class="validate[required,custom[onlyNumber]]">
								<span class="error">This is an error</span>
							</div>
						</div>
						<div class="bottom">
							<input type="submit" value="Register" />
							<a href="index.html" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>
		

        </script>
    </body>
</html>