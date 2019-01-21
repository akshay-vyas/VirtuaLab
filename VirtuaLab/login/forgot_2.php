<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Virtual Lab</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Expand, contract, animate forms with jQuery wihtout leaving the page" />
        <meta name="keywords" content="expand, form, css3, jquery, animate, width, height, adapt, unobtrusive javascript"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/ChunkFive_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h2',{ textShadow: '1px 1px #fff'});
			Cufon.replace('h3',{ textShadow: '1px 1px #000'});
			Cufon.replace('.back');
		</script>
    </head>
    <body>
		<div class="wrapper">
		<h1>VirtuaLab</h1>
			<h2> <span>Believe That</span> </h2>
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
				
<?php
include('dbconnect.php');
$uname=$_POST["username"];
$sql="select *from login where username='$uname'";
$res=mysql_query($sql);
if($row=mysql_fetch_array($res))
{
    $hintqtn=$row["hint_qst"];
	$hintans=$row["hint_ans"];
	$pwd=$row["password"];
?>


				<form name="form1" method="post" action="forgot_3.php" class="login active">
  							<h3>Get it here!!</h3>
   							<div>
							<label>Username:</label>
      <input name="username" type="text" id="username" class="field validate[required,custom[onlyLetter]]" value="<?php echo $row['username'];?>" size="30" readonly="">
   
	 				<label>Hint Question:</label>
      <input type="text" class="field validate[required,custom[onlyLetter]]" name="h_q" id="h_q" value="<?php echo $row['hint_qst']?>" size="30" readonly="">
      
		<label>Hint Answer:</label>
      <input name="h_a" class="field validate[required,custom[onlyLetter]]" type="text" id="h_a" size="30"></td>
	      <input name="h_a1" type="hidden" id="h_a1" value="<?php echo $hintans; ?>">
                              <input name="pwd" type="hidden" id="pwd" value="<?php echo $pwd; ?>">
    <div class="bottom">
          <input type="submit" value="Submit" class="submit-btn" />
        <div class="clear"></div>
      </div>
	<?php	
	
}
else
{
?>
	<script>
	alert("Sorry Check User Name");
	document.location="index.html";
	</script>
	<?php
}
?>

</form>
</div>
				<div class="clear"></div>
			</div>
		</div>
		

    </body>
</html>