<!DOCTYPE html>
<!--
	John Randolph
	Lakeside school
	CS5
	Supreme Bot
	2017
-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>

	<meta charset="UTF-8">
	<title>Supreme Bot</title>

	<!--Handmade stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css" />


	<!--Boostrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Supreme Bot Home</title>
</head>
<body>
	<h2><span class="makeRed">Supreme</span><span class="makeGreen">Bot</span></h2>

	<div class="dividerLine"></div>

	<div>
	<p class="homeMainText">Welcome to our <span class="makeRed">Supreme</span><span class="makeGreen">Bot</span>.</p>
	<p class="homeMainText">Not able to buy <span class="makeRed">Supreme</span> clothing because it sells out too fast?</p>
	<p class="homeMainText">Not able to buy <span class="makeRed">Supreme</span> clothing because you're busy during the sales?</p>
	<p class="homeMainText">Not to worry!</p>
	<p class="homeMainText">With our advanced <span class="makeRed">Supreme</span><span class="makeGreen">Bot</span> verison 7.3, we have you covered! Simply click the form below, enter your info, and the bot will buy clothes for you, for an additional charge of only $175.</p>
	<p class="homeMainText">Note: we are not liable for anything</p>
	</div>

	<div class="dividerLine"></div>


	<!--imports the fields-->
	<!--<?php
		$fields = fopen("testReadIn.html", "r") or die("Unable to open file!");
		echo fread($fields,filesize("testReadIn.html"));
		fclose($fields);
		echo "above should be the fields";
	?>-->

	<p class="lead">Click below to enter your info to buy an item NOW!</p>
	<!--NOTE we will need to modify this link once we put it on the site-->
	<a href="supremeMain.php">
	<div>
		<button id ="toForm" class="btn btn-default"><span class="makeRed">Go to Form</span></button>
	</div>
	</a>

	<div class="dividerLine"></div>

	<p>This is a project by John R, Ryan T, and Grant H for CS V. We reserve all rights to everything.</p>
</html>