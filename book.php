
<html>
<head>
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
			padding: 20px;
			 
		}
</style>
</head>
<body>

<center>
<br>
<br>
<br>
<br>
<br>
<b>
 Welcome
<?php

echo $_GET["name"];
?><br>
<br>

Your email address is:
<?php
echo $_GET["email"];
?><br>
<br>

Your Mobile number is:
<?php
echo $_GET["Mobilephone"];
?>
<br>
<br>
Your address is:
<?php
echo $_GET["text"];
?>
<br>
<br>

Quantity booked:
<?php
echo $_GET["number"];
?><br>
</b>
</center>
</body>
</html>
