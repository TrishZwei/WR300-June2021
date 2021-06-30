<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	//error reporting is probably not necessary on production servers
	//unless you need  it to debug your page 

	$name = $_GET['name']; 
	//gets the value of name from the super global get array
	$did_submit = $_GET['did_submit'];
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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
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