<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Student Details</h3>
	<div align="right"></div>
<table width="780" height="128" border="3">
  <tr>
     <th class="data" width="106">Student ID</th>
    <th width="100" class="data">full Name</th>
    <th class="data" width="113">Address</th>
    <th class="data" width="120">Email_id</th>
    <th class="data" width="120">Mobile No</th>
    <th class="data" width="105">Gender</th>
	<th class="data" width="60">Delete</th>
  </tr>
  <?php
  
  
  include("dbconnect.php");
  $un=$_SESSION['uname'];
   $regsql1="select * from clg where clg_name='$un'";
  $regres1=mysql_query($regsql1);
  $regrow1=mysql_fetch_array($regres1);
  $cid=$regrow1['clg_id'];
  
  $regsql="select * from registration where clg_id='$cid'";
  $regres=mysql_query($regsql);
  while($regrow=mysql_fetch_array($regres))
  {
  ?>
  <tr>
   
    <td><div align="center"><h4><?php echo $regrow['Student_id'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['fullname'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['address'];?></div></h4></td>
	<td><div align="center"><h4><?php echo $regrow['email_id'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['mobile'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $regrow['gender'];?></div></h4></td>

   
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