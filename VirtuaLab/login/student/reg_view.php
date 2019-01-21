<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Profile</h3>
	<div align="right"></div>
<table width="780" height="128" border="3">
  <tr>
    <td width="106">Student ID</td>
    <td width="100">first Name</td>
    <td width="113">Last Name</td>
    <td width="120">Mobile No</td>
	<td width="120">Email_id</td>
    <td width="105">Gender</td>
    <td width="60">Semester</td>
	<td width="60">Edit</td>
	<td width="60">Delete</td>
  </tr>
  <?php
    $un=$_SESSION['uname'];

  include("dbconnect.php");
  $regsql="select * from registration where email_id='$un'";
  $regres=mysql_query($regsql);
  while($regrow=mysql_fetch_array($regres))
  {
  ?>
  <tr>
   
    <td><?php echo $regrow['Student_id'];?></td>
    <td><?php echo $regrow['fullname'];?></td>
    <td><?php echo $regrow['address'];?></td>
    <td><?php echo $regrow['mobile'];?></td>
	<td><?php echo $regrow['email_id'];?></td>
    <td><?php echo $regrow['gender'];?></td>
    <td><?php echo $regrow['sem'];?></td>
    <td><a href="reg_edit.php?id=<?php echo $regrow['Student_id'];?>"><img src="mos-css/img/edit.jpeg"></a></td>
    <td><a href="reg_delete.php?id=<?php echo $regrow['Student_id'];?>"><img src="mos-css/img/delete.jpeg"></a></td>
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