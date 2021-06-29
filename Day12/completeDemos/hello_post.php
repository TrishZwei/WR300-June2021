<?php  
error_reporting(E_ALL & ~E_NOTICE);
//suppresses notices, notices are nags from the server that it is unhappy about.

if($_POST['did_submit']){
$name = $_POST['name'];
	if($name == ''){
	$feedback = 'You didn\'t fill out your name.';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>A Little Logic</title>
</head>
<body>
<?php  
if($name != ''){
?>
<p>Hello <?php echo $name; ?>!</p>
<?php }else{ 
echo $feedback;
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<label for="name">Name:</label>
	<input type="text" id="name" name="name" placeholder="Your Name">
	<input type="hidden" name="did_submit" value="true">
	<input type="submit" value="Say My Name">	
</form>
<?php 
}
 ?>
</body>
</html>
