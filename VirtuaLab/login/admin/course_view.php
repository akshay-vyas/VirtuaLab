<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Course </h3>
	<p><a href="course_form.php">ADD NEW<img src="mos-css/img/addnew.jpeg"></a> </p>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
    <th width="106" class="data">Course ID</th>
    <th width="100" class="data">Duration</th>
    <th width="113" class="data">Course Name</th>
    <th width="54" class="data">Edit</th>
    <th width="54" class="data">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $cousql="select * from course ";
  $coures=mysql_query($cousql);
  while($courow=mysql_fetch_array($coures))
  {
  ?>
  <tr>
   
    <td><div align="center"><h4><?php echo $courow['course_id'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $courow['duration'];?></div></h4></td>
    <td><div align="center"><h4><?php echo $courow['course_name'];?></div></h4></td>
    <td><div align="center"><a href="course_edit.php?id=<?php echo $courow['course_id'];?>"><img src="mos-css/img/edit.jpeg"></a></div></td>
    <td><div align="center"><h4><a href="course_delete.php?id=<?php echo $courow['course_id'];?>"><img src="mos-css/img/delete.jpeg"></a></div></td>
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