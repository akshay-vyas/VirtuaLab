
<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">Register </h3>
	<html>

<?php include('val.php');?>
<form name="form1" method="post" action="reg_insert.php" id="formID">
  <table width="303">
    <tr>
      <td>Full name</td>
      <td><input type="text" name="ea" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Address </td>
      <td><input type="text" name="eb"class="validate[required]"></td>
    </tr>
	 <tr>
      <td>College</td>
      <td><select name="clg_id" id="clg_id" class="validate[required]">
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
      </select></td>
    </tr>
	 <tr>
      <td>Course</td>
      <td><select name="crs_id" id="crs_id" class="validate[required]">
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
      </select></td>
    </tr>
	 <tr>
      <td>Mail Id </td>
      <td><input type="text" name="cc" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Mobile No </td>
      <td><input type="text" name="ec" class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>gender</td>
      <td><input name="ed" type="radio" value="Male">
        Male
          <input name="ed" type="radio" value="Female">
          Female</td>
    </tr>
    <tr>
      <td>sem</td>
      <td><input type="text" name="ee" class="validate[required,custom[onlyNumber]]"></td>
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

  <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');  ?>