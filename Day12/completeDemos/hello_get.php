<?php  
error_reporting(E_ALL & ~E_NOTICE);
//suppresses notices, notices are nags from the server that it is unhappy about.

$name = $_GET['name'];
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
if($did_submit == true AND $name != ''){
?>
<p>Hello <?php echo $name; ?>!</p>
<?php }else{ 
echo 'You didn\'t fill out your name.';

?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
