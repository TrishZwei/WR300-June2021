<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	//suppresses notices, notices are nags from the server that it is unhappy about. error reporting is probably not necessary on production servers unless you need it to debug your page 

	$name = $_POST['name'];
	//gets the value of name from the super global post array
	$did_submit = $_POST['did_submit'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>A Little Logic</title>
</head>
<body>
<?php 
	if($did_submit == true AND $name != '' ){
?>
	<p>Hello <?php echo $name; ?>!</p>
<?php
	}else{
		echo "You didn't fill out your name."; 
 ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<label for="your-name">Name:</label>
		<input type="text" id="your-name" name="name" placeholder="Your Name">
		<input type="hidden" name="did_submit" value="true">
		<input type="submit" value="Say My Name">
	</form>
<?php 
	}

?>


</body>
</html>