<?php 

if(isset($_GET['donate'])){
$donate = $_GET['donate'];
$message = "set a specified amount of \$$donate for donation.";
}else{
	$message = "not specified any dollar amount and let the user donate what ever they decide.";
}

?>

<!doctype html>
<html>
<head>
	<title>Paypal Pretend Page</title>
</head>
<body>
	<main>
		<h1>This is not PayPal</h1>
	<p>Instead, this is a page that represents the paypal gateway. Right now all "buttons" are set to go here to represent what happens when you click on a paypal button. This would take you to a page that would have <?php echo $message ?></p>
<a href="index.html">Return to Home Page</a>
</main>
</body>
</html>
