<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
        <th class="data" width="106">Department_id</th>
    <th class="data" width="100">Department Name</th>
    <th class="data" width="113">Description</th>
    <th class="data" width="54">Edit</th>
    <th class="data" width="54">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $depsql="select * from dept";
  $depres=mysql_query($depsql);
  while($deprow=mysql_fetch_array($depres))
  {
  ?>
  <tr>
   
    <td><?php echo $deprow['dept_id'];?></td>
    <td><?php echo $deprow['dept_name'];?></td>
    <td><?php echo $deprow['description'];?></td>
    <td><a href="dept_edit.php?id=<?php echo $deprow['dept_id'];?>">Edit</a></td>
    <td><a href="dept_delete.php?id=<?php echo $deprow['dept_id'];?>">Delete</a></td>
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