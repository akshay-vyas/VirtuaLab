<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">Semister form </h3>
	<html>

<?php include('val.php');?>
<form name="form1" method="post" action="sem_insert.php" id="formID">
  <table width="308">
    <tr>
      <td>Sem_name</td>
      <td><input type="text" name="ga" id="Sem_name" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Course ID </td>
      <td><select name="gb" class="validate[required]">>
	  <option value="">...select...</option>
	  <?php
	  include("dbconnect.php");
	  $sql="select * from course";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['course_id'];?>"><?php echo $row['course_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><strong><span class="style1">
        <input type="submit" name="Submit" value="Submit">
      </span></strong></div></td>
    </tr>
  </table>
</form>
</div>
<div class="clear"></div>

  <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');  ?>