<?php 
error_reporting(E_ALL & ~E_NOTICE);

$did_submit = $_POST['did_submit'];
//var_dump($_POST);
//echos out all the data from whatever variable you put in its argument

if($did_submit){

//filter_var($dirty_data, FILTER, options) cleans our data
	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$age = filter_var($_POST['age'], FILTER_SANITIZE_STRING);
	$gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
	$cups = filter_var($_POST['cups'], FILTER_SANITIZE_STRING);
	$work = filter_var($_POST['work'], FILTER_SANITIZE_STRING);
	$treats = filter_var($_POST['treats'], FILTER_SANITIZE_STRING);
	$agree = filter_var($_POST['agree'], FILTER_SANITIZE_STRING);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

//this is an array we have to handle it a wee bit differently
$coffee = $_POST['coffee'];

if(is_array($coffee)){
	//checks to see if $coffee is an array
	 $coffee = filter_var_array($coffee, FILTER_SANITIZE_STRING);
	 //this reaches into the array and cleans each item individually
}

if( !empty($coffee) ){
//if the coffee array is not empty....
	$num = count($coffee); //gets the number of items in the array

	for($i = 0; $i < $num; $i++){
		$coffee_time .= ($coffee[$i].' ');
	} 	

}//end if not empty

//now data is clean: PHP Validation
$valid = true;
$errors = []; //this will store key/value pairs in the array based on the errors the user generates by not filling out the required fields

//check against all the ways this data could fail:
//required: name, age, gender, time of day, email, agree
if($name == ''){
	$valid = false;
	$errors['name'] = 'Please supply your name.';
}

if($age == ''){
	$valid = false;
	$errors['age'] = 'Please supply your age. We cannot send you coupons if you are less than a certain age.';
}

if($gender == ''){
	$valid = false;
	$errors['gender'] = 'If you do not want to specify, please choose other.';
}

if(count($coffee) < 1){
	$valid = false;
	$errors['time'] = 'Please choose at least one time of day.';
}

if($agree != 'on'){
	$valid = false;
	$errors['agree'] = 'We need you to agree to the terms of service.';
}

if( ! filter_var($email, FILTER_VALIDATE_EMAIL)){
	//double negative, checking if it is NOT a valid email
	$valid = false;
	$errors['email'] = 'You did not enter a valid email address.';
}

var_dump($errors);


if($valid ){
//	echo '$valid is true'; 
//if valid is true, then we want to gather up and format the data to be sent to our email.

	$to = 'tladd@platt.edu';
	$subject = 'Newsletter Sign Up';
//'single quotes are literal'

	$body = "Name: $name \n";
	$body .= "Age: $age \n";
	$body .= "Gender: $gender \n";
	$body .= "Cups/Day: $cups \n";
	$body .= "Work: $work \n";
	$body .= "Time of Day: $coffee_time \n";
	$body .= "Treats: $treats \n";
	$body .= "Email: $email \n";

	$headers = "From: tladd@platt.edu \r\n";
	//$headers .= "Reply-To: $email \r\n";
	//$headers .= "Content-Type: text/plain \r\n";

	//uncomment this in for live server: 
	$mail = mail($to, $subject, $body, $headers); 
	echo $mail;

// comment this on live server
	// echo $to;
	// echo $subject;
	// echo $body;
	// echo $headers;

}



}//end did submit







//no close php