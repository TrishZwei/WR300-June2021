<?php 
error_reporting(E_ALL & ~E_NOTICE);
//suppresses notices, notices are nags from the server that it is unhappy about.

$name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Second PHP Page</title>
</head>
<body>
	<?php 
	

	if(isset($name) && $name != ''){
		//isset checks to see if a variable has a value and returns true or false if it does or does not
		$message = $name;
		//condition being tripped
		//echo 'if';
	}else{
		//echo 'else';
		$message = 'World';
	}

	?>

<p>Hello <?php echo $message; ?></p>
</body>
</html>