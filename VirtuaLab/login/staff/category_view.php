<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="649" border="6">
  <tr>
    <td width="151">ID</td>
    <td width="133">Category</td>
    <td width="107">Descrption</td>
    <td width="107">Edit</td>
    <td width="107">Delete</td>
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


