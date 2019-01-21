<?php
include('dbconnect.php');
$username=$_POST["username"];
$sql="select * from login where username='$username'";
//echo $sql;
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
    $hintqtn=$row["hint_qst"];
	$hintans=$row["hint_ans"];
	$pwd=$row["password"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Virtual Lab</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
     
					<form  action="getpwd.php" class="login active" method="post">
						<fieldset><h3>Login</h3>
							
						<div class="input-prepend" title= "Hint Answer" data-rel= "tooltip">username
						  <input name="hintans1" type="text" class="input-large span10" id="username" size="50" autofocus  />
						      <input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
                              <input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
</div>
							
							<div class="clearfix"></div>

						
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-primary">Get Password</button>
							</p>
						</fieldset>
					</form>
				</div>


</body>
</html>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username");
document.location="login.php";
</script>
<?php
}
?>

