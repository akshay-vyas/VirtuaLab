<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Staff Details </h3>
		<p><a href="user_reg_form.php">ADD NEW <img src="mos-css/img/addnew.jpeg"></a> </p>

	<div align="right"></div>
<table width="780" border="3">
  <tr>
 	<th class="data" width="106">User ID</th>
    <th class="data" width="106">Full Name</th>
    <th class="data" width="120">Address</th>
	<th class="data" width="106">College Id</th>
	<th class="data" width="60">E-mail</th>
	<th class="data" width="60">Mobile</th>
	<th class="data" width="60">age</th>
	<th class="data" width="60">gender</th>
	<th class="data" width="60">Qualification</th>
	<th class="data" width="60">Edit</th>
	<th class="data" width="60">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
    $un=$_SESSION['uname'];
   $regsql1="select * from clg where clg_name='$un'";
  $regres1=mysql_query($regsql1);
  $regrow1=mysql_fetch_array($regres1);
  $cid=$regrow1['clg_id'];
  
  $regsql="select * from user_registration ur,clg c where ur.clg_id=c.clg_id and ur.clg_id='$cid'";
  $regres=mysql_query($regsql);
  while($regrow=mysql_fetch_array($regres))
  {
  ?>
  <tr>
   
    <td><div align="center"><h4><?php echo $regrow['user_id'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['fullname'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['address'];?></div></h4></td>
	<td><div align="center"><h4><?php echo $regrow['clg_name'];?></div></h4></td>
	<td><div align="center"><h4><?php echo $regrow['email_id'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['mobile_no'];?></div></h4></td>
	<td><div align="center"><h4><?php echo $regrow['age'];?></td>
	<td><div align="center"><h4><?php echo $regrow['gender'];?></td>
	<td><div align="center"><h4><?php echo $regrow['qualification'];?></td>
    <td><a href="user_reg_edit.php?eid=<?php echo $regrow['user_id'];?>"><img src="mos-css/img/edit.jpeg"></a></td>
    <td><a href="user_reg_delete.php?id=<?php echo $regrow['user_id'];?>"><img src="mos-css/img/delete.jpeg"></a></td>
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