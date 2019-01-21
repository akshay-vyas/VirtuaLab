<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
     <th width="106" class="data">Attached_id</th>
    <th width="100" class="data">Attached_by</th>
    <th width="113" class="data">Attached_date</th>
    <th width="120" class="data">Attached_file</th>
    <th width="105" class="data">subject_Name</th>
    <th width="60" class="data">Key</th>
    <th width="54" class="data">Status</th>
    <th width="54" class="data">Edit</th>
    <th width="54" class="data">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $sql="select * from attached_files af,category b where af.category_id=b.id";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
   
    <td><?php echo $row['attached_id'];?></td>
    <td><?php echo $row['attached_by'];?></td>
    <td><?php echo $row['attached_date'];?></td>
    <td><?php echo $row['attached_file'];?></td>
    <td><?php echo $row['category_name'];?></td>
    <td><?php echo $row['key'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><a href="attach_edit.php?id=<?php echo $row['attached_id'];?>">Edit</a></td>
    <td><a href="attach_delete.php?id=<?php echo $row['attached_id'];?>">Delete</a></td>
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