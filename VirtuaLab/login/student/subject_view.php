<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
  <table width="561" border="4">
    <tr>
      <td width="84">Subject ID </td>
      <td width="134">Subject name </td>
      <td width="102">Course ID </td>
      <td width="67">Sem</td>
      <td width="67">Edit</td>
      <td width="67">Delete</td>
    </tr>
	<?php
	include("dbconnect.php");
	$subsql="select * from subject a, course b where a.course_id=b.course_id";
	$subres=mysql_query($subsql);
	while($subrow=mysql_fetch_array($subres))
	{
	?>
    <tr>
      <td><?php echo $subrow['subject_id'];?></td>
      <td><?php echo $subrow['sub_name'];?></td>
      <td><?php echo $subrow['course_name'];?></td>
      <td><?php echo $subrow['sem'];?></td>
      <td><a href="subject_edit.php?id=<?php echo $subrow['subject_id'];?>">Edit</a></td>
      <td><a href="subject_delete.php?id=<?php echo $subrow['subject_id'];?>">Delete</a></td>
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