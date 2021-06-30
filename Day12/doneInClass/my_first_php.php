<?php 

$name = 'Trish';

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My First PHP Page</title>
</head>
<body>
	<p>
		<?php  
		if(isset($name)){
			//isset checks to see if a variable has a value and returns true or false if it does or does not
			echo "Hello $name"; //interprets name variable value
		}else{
			echo "Hello World"; 
		}


		?>
	</p>
</body>
</html>