<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Subject </h3>
	<div align="right"></div>
	<p><a href="subject_form.php">ADD NEW<img src="mos-css/img/addnew.jpeg"></a> </p>
  <table width="561" border="4">
    <tr>
      <th class="data" width="84">Subject ID </th>
      <th class="data" width="134">Subject name </th>
      <th class="data" width="102">Course </th>
      <th class="data" width="67">Sem</th>
      <th class="data" width="67">Edit</th>
      <th class="data" width="67">Delete</th>
    </tr>
	<?php
	include("dbconnect.php");
	$subsql="select * from subject a, course b where a.course_id=b.course_id";
	$subres=mysql_query($subsql);
	while($subrow=mysql_fetch_array($subres))
	{
	?>
    <tr>
      <td><div align="center"><h4><?php echo $subrow['subject_id'];?></div></h4></td>
      <td><div align="center"><h4><?php echo $subrow['sub_name'];?></div></h4></td>
      <td><div align="center"><h4><?php echo $subrow['course_name'];?></div></h4></td>
      <td><div align="center"><h4><?php echo $subrow['sem'];?></div></h4></td>
      <td><a href="subject_edit.php?id=<?php echo $subrow['subject_id'];?>"><img src="mos-css/img/edit.jpeg"></a></td>
      <td><a href="subject_delete.php?id=<?php echo $subrow['subject_id'];?>"><img src="mos-css/img/delete.jpeg"></a></td>
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