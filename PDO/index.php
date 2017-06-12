<?php
// Allows you to find the available drivers on your machine to use with PHP
// var_dump(PDO::getAvailableDrivers());

// For testing purposes only, never in a live environment
ini_set('display_errors', 'On');

class User
{
		public function getFullName()
		{
			return "{$this->first_name} {$this->last_name}";
		}
}


$db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

/*
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// A simple way to catch an error

try {
	$db->query("INVALID");
} catch (PDOException $e) {
	die('Something went wrong.');
}
*/

// A single query into the DB to change a specific parameter
/*
$db->query("
	UPDATE users
	SET last_name = 'Smith'
	WHERE id = 1
");
*/

$users = $db->query("
	SELECT * FROM users
");


//echo '<pre>', var_dump($users->fetchAll(PDO::FETCH_ASSOC)), '</pre>';

/*
while ($user = $users->fetchObject()) {
	echo $user->email, '<br>';
}
*/

// The same thing can be done using a foreach method 
/*
$users = $users->fetchAll(PDO::Fetch_OBJ);

foreach ($users as $user) {
	echo $user->email, '<br>';
}
*/

$users->setFetchMode(PDO::FETCH_CLASS, 'User');

//$users = $users->fetch();

//echo '<pre>', var_dump($users->email), '</pre>';

while ($user = $users->fetch()) {
	echo $user->getFullName(), '<br>';
}


?>