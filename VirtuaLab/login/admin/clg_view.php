<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>College Details </h3>
	<p><a href="clg_form.php">Add New<img src="mos-css/img/addnew.jpeg"></a></p>
	<div align="right"></div>
		<table class="table table-bordered data" id="sample_1" >
		  <tr class="data">
		  <thead>
    <th class="data" width="106">College ID</th>
    <th class="data" width="100">College Name</th>
    <th class="data" width="113">College City</th>
    <th class="data" width="120">College Address</th>
    <th class="data" width="54">Edit</th>
    <th class="data" width="54">Delete</th>
	</thead>
  </tr>
  <?php
  include("dbconnect.php");
  $cousql="select * from clg ";
  $coures=mysql_query($cousql);
  while($courow=mysql_fetch_array($coures))
  {
  ?>
  <tr>
  
    <td ><div align="center"><h4><?php echo $courow['clg_id'];?>
    </div></h4></td>
    <td><div align="center"><h4><?php echo $courow['clg_name'];?>
    </div></h4></td>
    <td><div align="center"><h4><?php echo $courow['clg_city'];?>
    </div></h4></td>
    <td><div align="center"><h4><?php echo $courow['clg_address'];?>
    </div></h4></td>
    <td><div align="center"><a href="clg_edit.php?clg_id=<?php echo $courow['clg_id'];?>"><img src="mos-css/img/edit.jpeg"></a></div></td>
    <td><div align="center"><a href="clg_delete.php?clg_id=<?php echo $courow['clg_id'];?>"><img src="mos-css/img/delete.jpeg"></a></div></td>
 </tr>
  <?php
  }
  ?>
</table>
