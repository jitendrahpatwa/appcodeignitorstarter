<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<?php echo $header; ?>
<form action="register/rauth" method="post">
	<input type="text" name="name" placeholder="enter name">
	<input type="text" name="email" placeholder="enter email">
	<input type="password" name="age" placeholder="enter age">
	<input type="submit" value="Take a look">
	<br>
	<?php
	if(isset($error)){
		echo $error;
	}
	?>
</form>
</body>
</html>