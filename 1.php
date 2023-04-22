<!DOCTYPE html>
<html>
<head>
	<title>Water Can Booking Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
			padding: 20px;
		}

		h1 {
			text-align: center;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
			max-width: 500px;
			margin: 0 auto;
		}

		.form-group {
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"], input[type="tel"], input[type="number"], textarea {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<h1>Water Can Booking</h1>
<form action="book.php" method="get">

		Name: <input type="text" name="name" placeholder="Enter your name here"><br/>
<br/>
E-mail: <input type="text" name="email" placeholder=" Enter your Email"><br/>
<br/>
Mobile Phone: <input type="text" name="Mobilephone" placeholder=" Enter your
Mobile Number"><br/>
<br/>
Address: <input type="text" name="text" placeholder=" Enter your Address"><br/>
<br/>
Quantity: <input type="number" name="number" placeholder=" Enter quantity"><br/>
<br/>
		<input type="submit" value="Book Now">
	</form>
</body>
</html>
