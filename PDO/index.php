<?php
// Allows you to find the available drivers on your machine to use with PHP
// var_dump(PDO::getAvailableDrivers());

// For testing purposes only, never in a live environment
// ini_set('display_errors', 'On');


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

echo '<pre>', var_dump($users->fetchAll(PDO::FETCH_ASSOC)), '</pre>';


?>