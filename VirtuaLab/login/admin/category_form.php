<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">Category </h3>
	<html>
<?php 
include('val.php');
?> 
<form name="form1" method="post" action="category_insert.php" id="formID">
  <table width="308">
    <tr>
      <td>Category</td>
      <td><input type="text" name="aa" class="validate[required,coustom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><input type="text" name="ab" class="validate[required,coustom[onlyLetter]]"></td>
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
