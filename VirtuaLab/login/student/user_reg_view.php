<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="780" height="128" border="3">
  <tr>
 	 <td width="106">User ID</td>
    <td width="106">User Name</td>
    <td width="100">Password</td>
    <td width="113">Type</td>
    <td width="120">Address</td>
    <td width="105">City</td>
    <td width="60">State</td>
	<td width="60">Country</td>
	<td width="60">E-mail</td>
	<td width="60">Mobile</td>
	<td width="60">age</td>
	<td width="60">gender</td>
	<td width="60">Edit</td>
	<td width="60">Delete</td>
  </tr>
  <?php
  include("dbconnect.php");
  $regsql="select * from user_registration";
  $regres=mysql_query($regsql);
  while($regrow=mysql_fetch_array($regres))
  {
  ?>
  <tr>
   
    <td><?php echo $regrow['user_id'];?></td>
    <td><?php echo $regrow['user_name'];?></td>
    <td><?php echo $regrow['password'];?></td>
    <td><?php echo $regrow['type'];?></td>
    <td><?php echo $regrow['address'];?></td>
    <td><?php echo $regrow['city'];?></td>
	<td><?php echo $regrow['state'];?></td>
    <td><?php echo $regrow['country'];?></td>
	<td><?php echo $regrow['email_id'];?></td>
    <td><?php echo $regrow['mobile_no'];?></td>
	<td><?php echo $regrow['age'];?></td>
	<td><?php echo $regrow['gender'];?></td>
    <td><a href="user_reg_edit.php?eid=<?php echo $regrow['user_id'];?>">Edit</a></td>
    <td><a href="user_reg_delete.php?id=<?php echo $regrow['user_id'];?>">Delete</a></td>
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