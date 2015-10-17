
<!DOCTYPE html>
<html>
<head>
	<title>POST Example</title>
</head>
<body>

<div>
	
	<p>We are going to submit a form and capture the data.</p>
</div>

<div>
<form method="POST">
	<p>
		First Name
		<input	type='text' name="First" >
	</p>
	<p>
		Last Name
		<input	type='text' name="Last" >
	</p>
	<p>
		
		<input	type='submit' value='POST' >
	</p>

</form>
</div>

<div>
<h3> Form info below.</h3>
	<?php
		print_r($_POST);	
	?>

</div>

</body>
</html>