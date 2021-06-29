<?php  
error_reporting(E_ALL & ~E_NOTICE);
//suppresses notices, notices are nags from the server that it is unhappy about.

$name = $_GET['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First PHP Page</title>
</head>
<body>
<?php  
	if(isset($name)){
		//isset checks to see if the variable has a value
		$message = $name;
	}else{
		$message =  "World";
	}
?>
<p>Hello <?php echo $message;  ?></p>

</body>
</html>
