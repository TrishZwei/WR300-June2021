<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pages Get Knit Together</title>
	<style type="text/css">
		html{
			font-size: 20px;
			font-family: Verdana;
		}	

		img.alignright{
			float: right;
			width: 33%;
			max-width: 300px;
			min-width: 100px;
			margin-left: 1em;
		}

		span{
			color: #e44a3c;
		}
	</style>

</head>
<body>
<h1>PHP Pages</h1>
<p>PHP is great because you can slip into and out of PHP/HTML. When you do, you just need to define an area for PHP programming to occur. You do that like this: <span>&lt;?php ?&gt;</span> on a page with the extension of php. This lets the server know which parts need processing. </p>
<p><img src="http://responsivedesign.trishladd.com/wp-content/uploads/sweater.jpg" class="alignright"> With PHP includes., pages get knit together like two different yarns in a sweater. As seen here through the use of a function called include():</p>
<?php include('text.html'); ?>
<p>It is for this reason, logic also works on your page. The PHP is compiled then served to the browser as if it were normal HTML -- but we know better.</p>

</body>
</html>