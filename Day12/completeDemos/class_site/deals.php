<?php  
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
<link rel="manifest" href="favicons/manifest.json">
<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="favicons/favicon.ico">
<meta name="msapplication-config" content="favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">	

</head>
<body class="cf">
<header id="main-head">
	<h1>We Love Coffee</h1>
	<h3 id="menu"><a href="#main-nav" title="open navigation"><i class="icon-menu"> </i>Menu</a></h3>
</header>
<div id="wrap" class="wrap">	
	
	<nav id="main-nav" role="navigation">
	<h2 class="hide">Site Navigation</h2>
	<ul class="cf">
		<li><a href="index.html">Home<i class="demo-icon icon-home"></i></a></li>
		<li><a href="about.html">About<i class="demo-icon icon-coffee"></i></a></li>
		<li><a href="gallery.html">Gallery<i class="demo-icon icon-picture"></i></a></li>
		<li><a href="deals.html">Deals<i class="demo-icon icon-dollar"></i></a></li>
	</ul>	
	</nav>
<main>
<section>
<!-- 
form element attributes:
action - tells the data where to go to be processed
method - tells what superglobal array to place the data in:
this can be get ($_GET[]) or post ($_POST[])

TODO: remove novalidate and reestablish jQ validate when complete

-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="signup" >
<fieldset>
	<legend>Basic Info</legend>
	<label>Name: <input type="text" name="name" placeholder="Your Name" required title="please tell me your name"></label>
	<label>Age <input type="number" name="age" min="10" placeholder="28" required title="I know it is not polite, but I need to knowt that you are older than 9."></label>
	<label>Gender:
	<select name="gender" required>
		<option value="">Please Choose</option>		
		<option value="male">Male</option>
		<option value="female">female</option>
		<option value="other">Choose Not to Answer</option>
	</select>
	</label>
</fieldset>
<fieldset>
	<legend>Daily Coffee Consumption</legend>
	<label>In Cups: 0 - 10+
	<input type="range" name="cups" min="0" max="11" step="1">
	<!-- the how-much will be hidden with .no-js is active -->
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
	<p>When do you enjoy your coffee? Please check all that apply.</p>
	<label><input type="checkbox" name="coffee[]" value="morning">Morning</label>
	<label><input type="checkbox" name="coffee[]" value="afternoon">Afternoon</label>
	<label><input type="checkbox" name="coffee[]" value="evening">Evening</label>
	<label><input type="checkbox" name="coffee[]" value="night">Night</label>
</fieldset>
<fieldset>
	<legend>Treats</legend>
	<p>What other items do you typically purchase with your coffee?</p>
	<textarea name="items" placeholder="cheesecake, pastries, etc."></textarea>
</fieldset>
<fieldset>
	<legend>Sign up for our Newsletter</legend>
	<p>We promise not to spam your box or sell your email to a third party.</p>
	<label>Email: <input type="email" name="email" placeholder="you@example.com" required></label>
	<label><input type="checkbox" name="agree" required> I agree to the terms of service.</label>
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
				<p>Because it grows in a continuous cycle, it is not unusual to see flowers, green fruit and ripe fruit simultaneously on a single tree. The trees can live as long as 20 - 30 years and are capable of growing in a wide range of climates, as long as there is no harsh fluctuation in temperature.  Optimally, they prefer a rich soil and mild temperatures, with frequent rain and shaded sun.
				Learn more about coffee from the <a href="http://www.ncausa.org/About-Coffee/What-is-Coffee" target="_blank">National Coffee Association USA</a>

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

				<p>Kaldi dutifully reported his findings to the abbot of the local monastery who made a drink with the berries and discovered that it kept him alert for the long hours of evening prayer.  Soon the abbot had shared his discovery with the other monks at the monastery, and ever so slowly knowledge of the energizing effects of the berries began to spread.  As word moved east and coffee reached the Arabian peninsula, it began a journey which would spread its reputation across the globe.</p>

				<p>Today coffee is grown in a multitude of countries around the world. Whether it is Asia or Africa, Central or South America, the islands of the Caribbean or Pacific, all can trace their heritage to the trees in the ancient coffee forests on the Ethiopian plateau.</p>
				<address><a href="http://www.ncausa.org/About-Coffee/History-of-Coffee" target="_blank">Read more...</a></address>
			</div>
		</section>
		<section class="parent-container">
			<h3>Coffee and Cream</h3>
			<div class="parent-container">
				<video controls poster="videos/CoffeeAndCream.jpg">
				<source src="videos/CoffeeAndCream.mp4" type="video/mp4">
				</video>
				<p>Enjoy this slow motion video of cream being poured into cofee.</p>
				<p><strong>Music Credit:</strong> Brazilian Mix: Brazilian Mi by texasradiofish &copy; 2014 Licensed under a Creative Commons Attribution Noncommercial(3.0) license. http://ccmixter.org/<wbr>files/<wbr>texasradiofish/<wbr>47134 Ft: Copperhead, Slap Johnson, ElRon Xchile</p>
			</div>
		</section>
</aside>
<footer id="page-foot">
	<small>&copy; 2017 We Love Coffee</small>	
</footer>
</div>
<!-- javascript functions that need to be called after page is loaded and DOM is ready -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="scripts/site.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript">
//custom script for this page goes here.	

//to capture the number of cups described by the user and give them feedback
var cups = $('input[type=range]');

cups.change( function(){
	var cupsVal = cups.val();
	//alert(cupsVal);
	if(cupsVal > 10){
		message = 'Are you insane?';
	}else if(cupsVal == 0){
		message = 'How do you get up in the morning?';
	}else{
		message = 'You have selected '+cupsVal+' cups.';
	}
	$('#how-much').text(message);

});
/*MULTILINE COMMENT IN JS: 

//validate function
$('#signup').validate({
//start of arguments for the validate function

//this will call the validate function to run when the user leaves the input. See document on plugin site

onfocusout:function(element){
		$(element).valid();

	}, //end of first argument, proceed to the next one
	rules:{
//age and gender come from the name field of the element		
		age: 'required',
		gender:'required',
//because groups of checkboxes cannot be validated by HTML5 validation -- and if we put a required attribute on a specific checkbod., the user will have to check the box.
		'coffee[]':{
			required:true,
			minlength:1 //this ensures at least one checkbox was checked
		},
		email:{
			required:true,
			email:true
		}
//add more rules here		
	}, //end of rules
	messages:{
		//these are custom messages. They will over write any messages that are placed in the title tag
		age:{
			required: "Please tell me how old you are."
		},
		gender:{
			required: "Please make a choice so I know you did not miss this box."
		},
		'coffee[]':{
			//must be in a string because of the []
			required: "You must choose at least one time of day."
		},
		email:{
			required: "Your email is required so we can send you these great deals straight to your inbox.",
			email:"This is not a valid email address."
		},
		agree:{
			required: "We need to know that you agree to the terms of service."
		}

	},//end of messages
//error placement allows us to put error messages in specific locations. (ex: checkbox errors)
	errorPlacement: function(error, element){
		if(element.is(':checkbox')){
			error.appendTo(element.parents('fieldset'));
		}else{
			error.insertAfter(element);
		}
	} //end errorPlacement
}); //end of validate
*/

$(':required').removeAttr('required'); //quick way to get rid of the required attributes for testing purposes

</script>

</body>
</html>