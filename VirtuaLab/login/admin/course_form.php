<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>

	<div id="rightContent">
	<h3 align="center">Course </h3>
	<html>
<?php include('val.php'); ?>
<form name="form1" method="post" action="course_insert.php" id="formID">
  <table width="685" height="263" align="center" >
    <tr>
      <td width="230"><div align="right"><strong>Duration</strong></div></td>
      <td width="443"><input type="text" name="ba" class="validate[required,custom[onlyNumber]]"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Course Name</strong></div></td>
      <td><input type="text" name="bb" class="validate[required,custom[onlyLetter]]"></td>
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
