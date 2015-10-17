<?php

// this is the view

// its for capturing and displaying data. Passing it to the controller.

?>

<!DOCTYPE html>
<html>
<head>
	<title>MVC - View</title>
</head>
<body>



<div>
	<h3>Simple MVC example. We are going to create a new record.</h3>

	<h5>This form will send the data to the controller.</h5>

	<form method="POST" action='/MVC/controller.php'>
		<p>
			Field 1: <input	type='text' name='field1' required>
		</p>
		<p>
			Field 2: <input	type='text' name='field2' required>
		</p>
		<p>
			Field 3: <input	type='text' name='field3' required>
		</p>
		<p>
			<input type='submit' value='Create'>
		</p>
	</form>

</div>
</body>
</html>