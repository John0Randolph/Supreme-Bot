<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Supreme Bot</title>
	<!-- <link rel="stylesheet" href="formStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		$.post('https://onlyny.com/cart/add.js', {id: 32913815364}, function(data, textStatus, xhr) {
			console.log(data);
			xhr.getAllRequestHeaders();
			$.post('https://onlyny.com/cart', {checkout: 'Check Out'}, function(data, textStatus, xhr) {
				console.log(data);
			});
		});
	</script>
</head>
<body>
	<div class = "jumbotron col-md-6 col-md-offset-3">
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
</body>
</html>

<?php 
	//var_dump($_COOKIE);
	//var_dump($_SERVER);
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		var_dump($_POST);
	}

	$url = 'https://onlyny.com/cart/add.js';
	$data = array('id' => 32913815364);
	$url2 = 'https://onlyny.com/cart';
	$data2 = array('checkout' => 'Check Out');

	$ch = curl_init();
	var_dump($ch);
	curl_setopt($ch,CURLOPT_URL,$url2);
	var_dump($ch);
	curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
	curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($data2));
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
	curl_setopt($ch,CURLOPT_TIMEOUT, 20);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	$response = curl_exec($ch);
	$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
	$header = substr($response, 0, $header_size);
	print($header);
	var_dump(curl_error($ch));
	var_dump(curl_errno($ch));
	curl_close ($ch);
	echo $response;
	var_dump(json_decode($header));
	var_dump($response);
	var_dump($_COOKIE);

	
	$options = array('http' => array('header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'method' => 'POST', 'content' => http_build_query($data)) );
	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	$options2 = array('http' => array('header' => "Content-Type:application/x-www-form-urlencoded\r\nCookie: cart=fb2822ec0e3cb1e6ae449dc5fefc5b72;  cart_sig=ec62606d65e88d2935f245a4b937604c", 'method' => 'POST', 'content' => http_build_query($data2)) );
	$context2 = stream_context_create($options2);
	$result2 = file_get_contents($url2, false, $context2);

	//var_dump($result);	
	//print_r($result2);
	//echo "<script>console.log($result2);</script>";
?>