<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<p><a href="attach_form.php">ADD NEW<img src="../college/mos-css/img/addnew.jpeg"></a> </p>
	<div align="right"></div>
<table width="750" height="128" border="3">
  <tr>
   <td width="80">Attached_id</td>
    <td width="104">Attached_by</td>
    <td width="94">Attached_date</td>
	<td width="73">Subject</td>
	<td width="74">Title</td>
	<td width="153">Description</td>
    <td width="122">Upload</td>
    
   
 <!--    <td width="54">Edit</td>
    <td width="54">Delete</td> -->
  </tr>
  <?php
  include("dbconnect.php");
  $un=$_SESSION['uname'];
   $regsql1="select * from user_registration where email_id='$un'";
  $regres1=mysql_query($regsql1);
  $regrow1=mysql_fetch_array($regres1);
  $cid=$regrow1['fullname'];
  
  $sql="select * from attached_files af,subject b where af.subject_id=b.subject_id and 	af.attached_by='$cid'";
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
   <td><a href="../files/<?php echo $row['attached_file'];?>">View</a></td>
	
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