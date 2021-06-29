<?php  

//first variable
//$name = 'Trish';

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
		//isset checks to see if the variable has a value
		echo "Hello $name";
	}else{
		echo "Hello World";
	}
?>
</p>

</body>
</html>
