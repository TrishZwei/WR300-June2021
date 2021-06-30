<?php  
error_reporting(E_ALL & ~E_NOTICE);
$did_submit = $_POST['did_submit'];

var_dump($_POST);
//var_dump echos all the data out from what ever variable you put in its argument	

if($did_submit){

//filter_var($dirty_data, FILTER, options) cleans our data
 $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
 $age = filter_var($_POST['age'], FILTER_SANITIZE_STRING);
 $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
 $cups = filter_var($_POST['cups'], FILTER_SANITIZE_STRING);
 $work = filter_var($_POST['work'], FILTER_SANITIZE_STRING);
 $treats = filter_var($_POST['items'], FILTER_SANITIZE_STRING);
 $agree = filter_var($_POST['agree'], FILTER_SANITIZE_STRING);
 $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

//$double_quotes = 'Stuff'
//echo "$double_quotes" => 'Stuff'
//vs
//echo '$double_quotes' => '$double_quotes' 

//this is an array
$coffee = $_POST["coffee"];

if(is_array($coffee)){
	//is_array checks to see if ($coffee) is an array data type
	$coffee = filter_var_array($coffee, FILTER_SANITIZE_STRING);
}

//get individual items out of the coffee array
if(!empty($coffee)){
//checking to see if there are items in the array 
	$num = count($coffee); //gets the number of items in the array

	for($i = 0; $i < $num; $i++){
		$coffee_item .= ($coffee[$i].' ');
	}//end for loop

	 $coffee_item;
}//end if not empty

//PHP Validation
$valid = true;
$errors = []; //an array for us to store our error messages inside.

//check for all the ways this could fail:
#all the required fields: name, age, gender, time of day, email, agree

if($name == ''){
	$valid = false;
	$errors['name'] = 'Please supply your name.';
}

if($age == ''){
	$valid = false;
	$errors['age'] = 'Please supply your age. We cannot send you our coupons if you are less than a certain age.';
}

if($gender == ''){
	$valid = false;
	$errors['gender'] = 'If you do not want to specify, please choose other.';
}

if(count($coffee) < 1){
	$valid = false;
	$errors['coffee'] = 'Please choose at least one time of day';
}

if(! filter_var($email, FILTER_VALIDATE_EMAIL) ){
	//this checks to see if the email is NOT valid
	$valid = false;
	$errors['email'] = 'You did not enter a valid email address.';
}

if($agree != 'on'){
	$valid = false;
	$errors['agree'] = 'We need you to agree to the terms of service.';
}

//var_dump($errors);

//mail function: 
#we do not want to trigger the mail function if $valid is no longer true

if($valid){
//if valid is true, do the mail stuff.
	echo 'valid';

	$to = 'trishzwei@gmail.com';
	$subject = 'Newsletter sign-up';
	
	$body = "name: $name \n";
	$body .= "Age: $age \n";
	$body .= "Gender: $gender \n";
	$body .= "Cups/Day: $cups \n";
	$body .= "Work: $work \n";
	$body .= "Time of Day: $coffee_item \n";
	$body .= "Treats: $treats \n";
	$body .= "Email: $email \n";

	$headers = "From: trishzwei@gmail.com \r\n";
	$headers .= "type: text/plain \r\n";

	$mail = mail($to, $subject, $body, $headers );

	echo $mail;


}





}//end did_submit





//no close PHP