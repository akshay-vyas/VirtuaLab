<?php session_start(); ?>
<?php
	$username=$_POST["user_name"];
	$password=$_POST["pwd"];	
	include('dbconnect.php');
	$sql="select * from login where username='$username' and password='$password'";
	$res=mysql_query($sql);
	
	if($row=mysql_fetch_array($res))
	{
	$type=$row["type"];
$_SESSION["uname"]=$username;

	if($type=="admin")
	{
	?>
	<script>
	document.location="admin/home.php";
	</script>
	<?php
	}
	elseif($type=="student")
	{
	?>
	<script>
	document.location="student/home.php";
	</script>
	<?php
	}
elseif($type=="staff")
	{
	?>
	<script>
	document.location="staff/home.php";
	</script>
	<?php
	}
	elseif($type=="akshay")
	{
	?>
	<script>
	document.location="akshay/home.php";
	</script>
	<?php
	}
	elseif($type=="college")
	{
	?>
	<script>
	document.location="college/home.php";
	</script>
	<?php
	}

	}
else
	{
	?>
	<script>
	alert("Invalid User name Or Password");
	history.back();
	</script>
	<?php
	}
	?>