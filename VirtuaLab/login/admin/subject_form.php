<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">SUBJECT </h3>
	<html>

<?php include('val.php');?>
<form name="form1" method="post" action="subject_insert.php" id="formID">
  <table width="287" id="hb" border="5">
  
    <tr>
      <td>Course ID </td>
      <td><select name="hb"  class="validate[required]">
	   <option value="">...select...</option>
	  <?php
	  include("dbconnect.php");
	  $subsql="select * from course";
	  $subres=mysql_query($subsql);
	  while($subrow=mysql_fetch_array($subres))
	  {
	  ?>
	  <option value="<?php echo $subrow['course_id'];?>"><?php echo $subrow['course_name'];?></option>
	  <?php
	  }
	  ?>
     
      </select></td>
    </tr>
	  <tr>
      <td>Subject Name </td>
      <td><input type="text" name="ha" id="Subject Name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Sem</td>
      <td><input type="text" name="hc" class="validate[required,custom[onlyNumber]]"></td>
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