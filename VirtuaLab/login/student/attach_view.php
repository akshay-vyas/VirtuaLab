<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
   <td width="106">Attached_id</td>
    <td width="100">Attached_by</td>
    <td width="113">Attached_date</td>
	<td width="120">Subject</td>
	<td width="120">Title</td>
    
    <td width="120">Description</td>
    <td width="105">Download</td>
   
 <!--    <td width="54">Edit</td>
    <td width="54">Delete</td> -->
  </tr>
  <?php
  $d=$_REQUEST['d'];
  include("dbconnect.php");
  $sql="select * from attached_files af,subject b where af.subject_id=b.subject_id and af.subject_id='$d'";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
  <tr>
   
    <td><?php echo $row['attached_id'];?></td>
    <td><?php echo $row['attached_by'];?></td>
    <td><?php echo $row['attached_date'];?></td>
	  <td><?php echo $row['sub_name'];?></td>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['des'];?></td>
    <td> <a href="../files/<?php echo $row['attached_file'];?>" target="_blank"><img src="mos-css/img/download.png"></a></td>

 <!--    <td><a href="attach_edit.php?id=<?php //echo $row['attached_id'];?>">Edit</a></td>
    <td><a href="attach_delete.php?id=<?php //echo $row['attached_id'];?>">Delete</a></td> -->
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