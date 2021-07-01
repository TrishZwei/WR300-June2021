<?php  
//php file self parsing. Sends data to itself.
	include('parse.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>We Love Coffee</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<!-- favicons go here -->
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<!-- <link rel="manifest" href="favicons/manifest.json"> -->
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicons/favicon.ico">
<meta name="msapplication-config" content="favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">	
</head>
<body class="cf">
<header id="main-head">
	<h1>We Love Coffee</h1>
	<nav id="main-nav" role="navigation">
	<h2 class="hide">Site Navigation</h2>
	<ul class="cf">
		<li><a href="#">Home<i class="demo-icon icon-home"></i></a></li>
		<li><a href="#">About<i class="demo-icon icon-coffee"></i></a></li>
		<li><a href="#">Gallery<i class="demo-icon icon-picture"></i></a></li>
		<li><a href="#">Deals<i class="demo-icon icon-dollar"></i></a></li>
	</ul>	
	</nav>
</header>
<main>
<section>
	<form method="post" action="#" id="sign-up">
<!-- 	<form method="post" action="processing.php" id="sign-up"> -->

		<fieldset>
			<legend>Basic Info</legend>
<!-- 		<label for="full-name">Name:</label>
			<input type="text" name="name" id="full-name"> -->
			<label>Name: <input type="text" name="name" placeholder="your full name" required title="You need to enter your name."></label>
			<label>Age: <input type="number" name="age" min="10" placeholder="28" required title="hi"></label>
			<label>Gender:
				<select name="gender" required>
					<option value="">Please Choose</option>	
					<option value="male">Male</option>	
					<option value="female">Female</option>	
					<option value="other">Choose not to Answer</option>	
				</select>
			</label>
		</fieldset>
		<fieldset>
			<legend>Daily Coffee Consumption</legend>
			<label>In Cups: 0 - 10+
				<input type="range" name="cups" min="0" max="11" step="1" value="5">
				<!-- the how much wil be hidden with no-js -->
				<span id="how-much">You have selected: 5 cups</span>
				<p>Enter 0 if you don't drink coffee every day.</p>
			</label>
		</fieldset>
		<fieldset>
			<legend>Work Status:</legend>
			<label><input type="radio" name="work" value="student">Student</label>			
			<label><input type="radio" name="work" value="employed">Employed</label>
			<label><input type="radio" name="work" value="unemployed">Unemployed/Retired</label>
			<label><input type="radio" name="work" value="other">Other</label>
		</fieldset>
		<fieldset>
			<legend>Time of Day</legend>
			<p>When do you enjoy your coffee? Please check all that apply</p>
			<label><input type="checkbox" name="coffee[]" value="morning">Morning</label>
			<label><input type="checkbox" name="coffee[]" value="afternoon">Afternoon</label>
			<label><input type="checkbox" name="coffee[]" value="evening">Evening</label>
			<label><input type="checkbox" name="coffee[]" value="night">Night</label>
		</fieldset>
		<fieldset>
			<legend>Treats</legend>
			<p>What kinds of things do you like to have with your coffee?</p>
			<textarea placeholder="cheesecake, pastries, cookies, etc." name="treats"></textarea>
		</fieldset>
		<fieldset>
			<legend>Sign Up for Newsletter</legend>
			<p>We promise not to spam your box or sell your email to a third party.</p>
			<label>Email: <input type="email" name="email" placeholder="You@example.com" required></label>
			<label><input type="checkbox" name="agree" required>I agree to the terms of service.</label>
		</fieldset>
		<input type="hidden" name="did_submit" value="true">
		<input type="submit" value="Sign Up">
	</form>
</section>
</main>
<aside class="cf">
	<section class="cf">
			<h3>What is Coffee?</h3>
			<div>
				<figure>
					<img src="images/whatIsCoffee.png">
				</figure>
				<p>Everyone recognizes a roasted coffee bean but unless you have lived or traveled in a coffee growing country, you might not recognize an actual coffee tree. Pruned short in cultivation, but capable of growing more than 30 feet high, a coffee tree is covered with dark-green, waxy leaves growing opposite each other in pairs.  Coffee cherries grow along the tree's branches. It takes nearly a year for a cherry to mature after the flowering of the fragrant, white blossoms.</p> 
				<a href="http://www.ncausa.org/About-Coffee/What-is-Coffee" target="_blank">National Coffee Association USA</a>

			</div>
		</section>
		<section class="cf">
			<h3>The History of Coffee</h3>
			<div>
				<figure>
					<img src="images/historyOfCoffee.png">
				</figure>
				<p>In the Ethiopian highlands, where the legend of Kaldi, the goatherd, originated, coffee trees grow today as they have for centuries. Though we will never know with certainty, there probably is some truth to the Kaldi legend.</p>

				<p>It is said that he discovered coffee after noticing that his goats, upon eating berries from a certain tree, became so spirited that they did not want to sleep at night.</p>
				<a href="http://www.ncausa.org/About-Coffee/History-of-Coffee" target="_blank">Read more...</a>
			</div>
		</section>
		<section class="parent-container">
			<h3>Coffee and Cream</h3>
			<div class="parent-container">
				<video controls poster="videos/CoffeeAndCream.jpg">
				<source src="videos/CoffeeAndCream.mp4" type="video/mp4">
				</video>
				<p>Enjoy this slow motion video of cream being poured into coffee.</p>
				<p><strong>Music Credit:</strong> Brazilian Mix: Brazilian Mi by texasradiofish &copy; 2014 Licensed under a Creative Commons Attribution Noncommercial(3.0) license. http://ccmixter.org/<wbr>files/<wbr>texasradiofish/<wbr>47134 Ft: Copperhead, Slap Johnson, ElRon Xchile</p>
			</div>
		</section>
</aside>
<footer id="page-foot">
	<small>&copy; 2017 We Love Coffee</small>	
</footer>
<!-- javascript functions that need to be called after page is loaded and DOM is ready -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	'use strict';

	//vanilla JS
	document.querySelector('html').classList = 'js';

	//jQuery:
	var cups = $('input[type=range]'); //only one on page, which has our cups value.

	cups.change( function(){
		var cupsVal = cups.val();
		//alert(cupsVal);
		var message = '';


		if(cupsVal > 10){
			message = 'Are you insane?';
		}else if(cupsVal == 0){
			message = 'How do you get up in the morning?';
		}else{
			message = 'You have selected '+cupsVal+' cups.';
		}

		$('#how-much').text(message);

	})

//jquery validate
	// $('#sign-up').validate(); //default behavior

/*TODO: remove multiline comment
	$('#sign-up').validate({
		//start of arguments for the validate function
		onfocusout:function(element){
			$(element).valid();
		}, //end of first argument
		rules:{
			//name, age and gender come from the name field of the element
			name: 'required',
			age: 'required',
			gender: 'required',
			 
			//because groups of checkboxes cannot be validated by HTML5 validation -- and if we put required attribute on a specific checkbox, that checkbox has to be checked
			
			'coffee[]':{
				required:true,
				minlength:1
			},
			email:{
				required: true,
				email: true
			}
			//any more rules to add? they go here

		}, //end of rules
		messages:{
			//these are custom messages they will overwrite any messages placed in the title tag.
			age:{
				required: 'Please tell me how old you are.'
			},
			gender:{
				required: 'Please make a choice so I know you did not miss this box.'
			},
			'coffee[]':{
				required: 'You must choose at least one time of day.'
			},
			email:{
				required: 'Your email is required so we can send you these great deals straight to your inbox.',
				email: 'This is not a valid email address.'
			},
			agree:{
				required: 'We need to know that you agree to the terms of service.'
			}

		}, //end of messages
		//error placement allows us to put error messages in specific locations (ex: the checkbox errrors)
			errorPlacement: function(error, element){
				if(element.is(':checkbox')){
					error.appendTo(element.parents('fieldset'));
				}else{
					error.insertAfter(element);
				}


			} //end of errorPlacement

	}); //end of validate
*/

//TODO: remove after testing:
$(':required').removeAttr('required'); 
//quick way to remove the required attributes for testing purposes


</script>

</body>
</html>