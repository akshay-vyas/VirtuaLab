<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Semester </h3>
	<p><a href="sem_form.php">ADD NEW</a> </p>
	<div align="right"></div>
<table width="649" border="6">
  <tr>
    <th class="data" width="151">Sem_id</th>
    <th class="data" width="133">Sem Name </th>
    <th class="data" width="107">Course Id </th>
    <th class="data" width="107">Edit</th>
    <th class="data" width="107">Delete</th>
  </tr>
  <?php
  include("dbconnect.php");
  $semsql="select af.sem_id,af.sem_name,b.course_name from sem af, course b where af.s_course_id=b.course_id";
  $semres=mysql_query($semsql);
  while($semrow=mysql_fetch_array($semres))
  {
  ?>
  
  <tr>
    <td><?php echo $semrow['sem_id'];?></td>
    <td><?php echo $semrow['sem_name'];?></td>
    <td><?php echo $semrow['course_name'];?></td>
    <td><a href="sem_edit.php?id=<?php echo $semrow['sem_id'];?>">Edit</a></td>
    <td><a href="sem_delete.php?id=<?php echo $semrow['sem_id'];?>">Delete</a></td>
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