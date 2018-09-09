<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min"></script>

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


	<!--this is the form for the user to iput their data -->
	<div class = "jumbotron col-md-6 col-md-offset-3" id="jumbo">
		<h1>Supreme Bot</h1>
		<form method="post">
			<div class = "form-group">
				<label for="" class="">First Name</label>
				<input type="text" name="firstName" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Last Name</label>
				<input type="text" name="lastName" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Email</label>
				<input type="email" name="email" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Phone</label>
				<input type="tel" name="phone" class = "form-control"> 
			</div>
			<div class = "form-group">
				<label for="">Address</label>
				<input type="text" name="address" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Zip Code</label>
				<input type="number" name="zipCode" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">City</label>
				<input type="text" name="city" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">State</label>
				<input type="text" name="state" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Country</label>
				<input type="text" name="country" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Size</label>
				<select name="size" id="" class = "form-control">
					<option value="small">S</option>
					<option value="shirts">M</option>
					<option value="tops">L</option>
					<option value="pants">XL</option>
				</select>
			</div>
			<div class = "form-group">
				<label for="">Category</label>
				<select name="category" id="" class = "form-control">
					<option value="jackets">Jackets</option>
					<option value="shirts">Shirts</option>
					<option value="tops">Tops/Sweaters</option>
					<option value="pants">Pants</option>
					<option value="tshirts">T-Shirts</option>
					<option value="hats">Hats</option>
					<option value="bags">Bags</option>
					<option value="accessories">Accessories</option>
					<option value="skate">Skate</option>
					<option value="shoes">Shoes</option>
					<option value="shorts">Shorts</option>
				</select>
			</div>
			<div class = "form-group">
				<label for="">Keyword</label>
				<input type="text" name="keyword" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Color</label>
				<input type="text" name="color" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Provider</label>
				<input type="text" name="provider" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Card Number</label>
				<input type="number" name="cardNumber" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">Expiration Date</label>
				<input type="text" name="expirationDate" class = "form-control">
			</div>
			<div class = "form-group">
				<label for="">CVV</label>
				<input type="number" name="csv" class = "form-control">
			</div>
			<div class = "form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>

	<div class="dividerLine"></div>

	<p>This is a project by John R, Ryan T, and Grant H for CS V. We reserve all rights to everything.</p>
</html>