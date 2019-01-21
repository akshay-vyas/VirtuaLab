<?php include('metatags.php');  ?>

<?php include('header.php');  ?>

<?php include('menu.php');  ?>


	
		<div id="rightContent">
	<h3>Attached file </h3>
	<div align="right"></div>
<table width="690" height="128" border="3">
  <tr>
    <td width="106">User Name</td>
    <td width="100">Password</td>
    <td width="113">type</td>
    <td width="120">Question</td>
    <td width="105">Answer</td>
    <td width="60">Status</td>
  </tr>
  <?php
  include("dbconnect.php");
  $logsql="select * from login";
  $logres=mysql_query($logsql);
  while($logrow=mysql_fetch_array($logres))
  {
  ?>
  <tr>
   
    <td><?php echo $logrow['username'];?></td>
    <td><?php echo $logrow['password'];?></td>
    <td><?php echo $logrow['type'];?></td>
    <td><?php echo $logrow['hint_qst'];?></td>
    <td><?php echo $logrow['hint_ans'];?></td>
    <td><?php echo $logrow['status'];?></td>
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