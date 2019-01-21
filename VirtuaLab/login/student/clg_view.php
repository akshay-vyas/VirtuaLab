<table width="690" height="128" border="3">
  <tr>
    <td width="106">College ID</td>
    <td width="100">College Name</td>
    <td width="113">College City</td>
    <td width="120">College Address</td>
    <td width="54">Edit</td>
    <td width="54">Delete</td>
  </tr>
  <?php
  include("dbconnect.php");
  $cousql="select * from clg ";
  $coures=mysql_query($cousql);
  while($courow=mysql_fetch_array($coures))
  {
  ?>
  <tr>
   
    <td><?php echo $courow['clg_id'];?></td>
    <td><?php echo $courow['clg_name'];?></td>
    <td><?php echo $courow['clg_city'];?></td>
    <td><?php echo $courow['clg_address'];?></td>
    <td><a href="clg_edit.php?clg_id=<?php echo $courow['clg_id'];?>">Edit</a></td>
    <td><a href="clg_delete.php?clg_id=<?php echo $courow['clg_id'];?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table>
