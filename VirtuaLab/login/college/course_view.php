<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
    <th class="data" width="106">Course ID</th>
    <th class="data" width="100">Duration</th>
    <th class="data" width="113">Course Name</th>
    <th class="data" width="120">Sem ID</th>
    <th class="data" width="54">Edit</th>
    <th class="data" width="54">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $cousql="select * from course c,sem s where c.sem_id=s.sem_id";
  $coures=mysql_query($cousql);
  while($courow=mysql_fetch_array($coures))
  {
  ?>
  <tr>
   
    <td><?php echo $courow['course_id'];?></td>
    <td><?php echo $courow['duration'];?></td>
    <td><?php echo $courow['course_name'];?></td>
    <td><?php echo $courow['sem_name'];?></td>
    <td><a href="course_edit.php?id=<?php echo $courow['course_id'];?>">Edit</a></td>
    <td><a href="course_delete.php?id=<?php echo $courow['course_id'];?>">Delete</a></td>
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