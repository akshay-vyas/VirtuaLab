<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>	<div id="rightContent">
	<h3 align="center">Register </h3>
	<html>

<?php include('val.php');?>
<form name="form1" method="post" action="user_reg_insert.php" id="formID">
  <table width="303">
  
    <tr>
      <td>Full Name </td>
      <td><input type="text" name="ea" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="eb" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
   
	<tr>
      <td>College Id</td>
      <td><select name="clg_id" id="clg_id" class="validate[required]">
       <!--  <option value="">...select...</option> -->
        <?php
	  include("dbconnect.php");
	  $un=$_SESSION['uname'];
	  $cousql="select * from clg where clg_name='$un'";
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
      <td>E-Mail </td>
      <td><input type="text" name="ed" class="validate[required,custom[email]]"></td>
    </tr>
    <tr>
      <td>Mobile No</td>
      <td><input type="text" name="ee" id="ei" class="validate[required,custom[mobile]]"></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type="text" name="ef" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="eg" type="radio" value="Male">
        Male
          <input name="eg" type="radio" value="Female">
          Female</td>
    </tr>
	    <tr>
      <td>Qualification</td>
      <td><input type="text" name="eh" class="validate[required]"></td>
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