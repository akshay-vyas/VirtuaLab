<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="780" height="128" border="3">
  <tr>
    <td width="106">Student ID</td>
    <td width="100">first Name</td>
    <td width="113">Last Name</td>
    <td width="120">Mobile No</td>
    <td width="105">Gender</td>
    <td width="60">Degree</td>
	<td width="60">Edit</td>
	<td width="60">Delete</td>
  </tr>
  <?php
  include("dbconnect.php");
  $regsql="select * from registration";
  $regres=mysql_query($regsql);
  while($regrow=mysql_fetch_array($regres))
  {
  ?>
  <tr>
   
    <td><?php echo $regrow['Student_id'];?></td>
    <td><?php echo $regrow['firstname'];?></td>
    <td><?php echo $regrow['lastname'];?></td>
    <td><?php echo $regrow['mobile'];?></td>
    <td><?php echo $regrow['gender'];?></td>
    <td><?php echo $regrow['degree'];?></td>
    <td><a href="reg_edit.php?id=<?php echo $regrow['Student_id'];?>">Edit</a></td>
    <td><a href="reg_delete.php?id=<?php echo $regrow['Student_id'];?>">Delete</a></td>
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