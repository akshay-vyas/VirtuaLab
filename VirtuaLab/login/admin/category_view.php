<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Category </h3>
	<p><a href="category_form.php">ADD NEW</a> </p>
	<div align="right"></div>
<table width="649" border="6">
  <tr>
    <th width="151" class="data">ID</th>
    <th width="133" class="data">Category</th>
    <th width="107" class="data">Descrption</th>
    <th width="107" class="data">Edit</th>
    <th width="107" class="data">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $catsql="select * from category";
  $catres=mysql_query($catsql);
  while($catrow=mysql_fetch_array($catres))
  {
  ?>
  
  <tr>
    <td><?php echo $catrow['id'];?></td>
    <td><?php echo $catrow['category_name'];?></td>
    <td><?php echo $catrow['description'];?></td>
    <td><a href="category_edit.php?id=<?php echo $catrow['id'];?>">Edit</a></td>
    <td><a href="category_delete.php?id=<?php echo $catrow['id'];?>">Delete</a></td>
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

