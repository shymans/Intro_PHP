<html>
	<head>
		<title>Learning PHP</title>
	</head>
<body>

<form action="trial.php" method="GET">
	Name:<br><input type="text" name="name"><br>
	Age:<br><input type="text" name="age" size="5"><br><br>
	<input type="submit" value="Submit">
</form>
<br>
<br>
<form action="trial.php" method="POST">
	Please enter your password:<br>
	<input type="password" name="password"><br>
	<input type="submit" value="Submit">
</form>

<?php

$password = 'password';

if (isset($_POST['password'])&&!empty($_POST['password'])) {
		$password_post = $_POST['password'];
		if ($password_post==$password) {
			echo 'Correct!';
		} else {
			echo 'Incorrect!';
		}
}

if(isset($_GET['name'])){ $name = $_GET['name']; }
if(isset($_GET['age'])){ $age = $_GET['age']; }

// These calls gave an undefined index error, not sure why. The code above solved the problem.
//$name = $_GET['name'];
//$age = $_GET['age'];

if (isset($name)&&isset($age)) {
	if (!empty($name)&&!empty($age)) {
		echo 'I am '.$name.' and I am '.$age.' years old.';
	} else {
		echo 'Nothing entered';
	}
}

?>

</body>
</html>