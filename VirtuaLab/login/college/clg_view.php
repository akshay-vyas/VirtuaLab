<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>College Profile </h3>

	<div align="right"></div>
<table width="690" border="3">
  <tr>
    <th width="106" class="data" >College ID</th>
    <th width="100" class="data">College Name</th>
    <th width="113" class="data">College City</th>
    <th width="120" class="data">College Address</th>
  </tr>
  <?php
  $un=$_SESSION['uname'];
  include("dbconnect.php");
  $cousql="select * from clg where clg_name='$un'";
  $coures=mysql_query($cousql);
  while($courow=mysql_fetch_array($coures))
  {
  ?>
  <tr>
   
    <td><?php echo $courow['clg_id'];?></td>
    <td><?php echo $courow['clg_name'];?></td>
    <td><?php echo $courow['clg_city'];?></td>
    <td><?php echo $courow['clg_address'];?></td>
  </tr>
  <?php
  }
  ?>
</table>

</div>
<div class="clear"></div>

  <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>
<?php include('footer.php');  ?>