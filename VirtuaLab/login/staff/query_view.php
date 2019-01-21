<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Query</h3>
	<div align="right"></div>
  <table width="561" border="4">
    <tr>
	<td width="84">Q Id </td>
      <td width="84">Q From </td>
      <td width="134">Q To </td>
      <td width="102">Query Desc </td>
      <td width="67">Reply</td>
      <td width="67">Edit</td>
    </tr>
	<?php
	$un=$_SESSION['uname'];
	
	include("dbconnect.php");
	$sql="select * from queries where q_to='$un'";
	$res=mysql_query($sql);
	while($row=mysql_fetch_array($res))
	{
	?>
    <tr>
	<td><?php echo $row['q_id'];?></td>
      <td><?php echo $row['q_from'];?></td>
      <td><?php echo $row['q_to'];?></td>
      <td><?php echo $row['query_desc'];?></td>
      <td><?php echo $row['reply'];?></td>
      <td><a href="query_edit.php?id=<?php echo $row['q_id'];?>"><img src="../college/mos-css/img/oke.png"></a></td>
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