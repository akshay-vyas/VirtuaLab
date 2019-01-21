<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>
	<div id="rightContent">
	<h3 align="center">Login Page </h3>
	<html>

<?php include('val.php'); ?>
<form name="form1" method="post" action="login_insert.php" id="formID">
  <table width="303">
    <tr>
      <td>username</td>
      <td><input type="text" name="da" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="text" name="db" class="validate[required]"></td>
    </tr>
    <tr>
      <td>type</td>
      <td><input type="text" name="dc" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>question</td>
      <td><input type="text" name="dd" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>answer</td>
      <td><input type="text" name="de" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>status</td>
      <td><input type="text" name="df" class="validate[required,custom[onlyLetter]]"></td>
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