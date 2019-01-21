<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	<div id="rightContent">
	<h3><?php echo $name;  ?></h3>
	<div class="quoteOfDay">
	<b>Welcome to <?php echo $name; ?> </b><br>
	<i style="color: #5b5b5b;"></i>
	</div>
		<div class="shortcutHome">
		<a href="clg_view.php"><img src="mos-css/img/clgprofile.png" border="0" usemap="#Map">
        <map name="Map">
          <area shape="circle" coords="33,40,12" href="#">
        </map>
        <br>Profile</a>
		</div>
		<div class="shortcutHome">
		<a href="user_reg_view.php"><img src="mos-css/img/staffdetails.png"><br>Staff Details</a>
		</div>
		<div class="shortcutHome">
		<a href="reg_view.php"><img src="mos-css/img/studentdetails.png"><br>Student Details</a>
		</div>
		<div class="shortcutHome">
		<a href="change%20pwd.php"><img src="mos-css/img/password.png"><br>Change Password</a>
		</div>
		<div class="shortcutHome">
		<a href="../logout.php"><img src="mos-css/img/logout.jpg""><br>Logout</a>
		</div>
		
		<div class="clear"></div>
		
	</div>
	
		<div id="rightContent">
	
	</div>


<div class="clear"></div>


<?php include('footer.php');  ?>