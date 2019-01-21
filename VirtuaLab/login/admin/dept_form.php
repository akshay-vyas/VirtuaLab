<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">Department</h3>
	<html>

<?php include('val.php'); ?> 
<form name="form1" method="post" action="dept_insert.php" id="formID">
  <table width="303">
    <tr>
      <td>Department </td>
      <td><input type="text" name="ca" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input type="text" name="cb"class="validate[required,custom[onlyLetter]]"></td>
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