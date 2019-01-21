<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	<div id="rightContent">
	<h3 align="center">Attach File </h3>
	<html>
	<?php include('cal.php');?>
<?php include('val.php');?>
<form name="form1" method="post" action="attach_insert.php" id="formID">
  <table width="303" align="center">
    <tr>
      <td>Attached by </td>
      <td><input type="text" name="a" class="validate[required,custom[onlyLetter]]" ></td>
    </tr>
    <tr>
      <td>Attached date </td>
      <td> <?php					
      $date_default = "";
     
      if(isset($row['attached_date']))
      {
        $date_default =$row['attached_date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("attached_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>

    </tr>
    <tr>
      <td>Attached file </td>
      <td><input type="text" name="c" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Subject Id </td>
      <td><select name="subject_id" id="subject_id" class="validate[required]">
	  <option value="">...select...</option>
	  <?php
	  include('dbconnect.php');
	  $sql="select * from subject";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['subject_id'];?>"><?php echo $row['sub_name'];?></option>
	  <?php
	  }
	  ?>
	  
      </select></td>
    </tr>
    <tr>
      <td>Key</td>
      <td><input type="text" name="e" class="validate[required,custom[onlyLetter]]"></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><input type="text" name="f" class="validate[required,custom[onlyLetter]]"></td>
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