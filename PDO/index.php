<?php
// Allows you to find the available drivers on your machine to use with PHP
// var_dump(PDO::getAvailableDrivers());

// For testing purposes only, never in a live environment
// ini_set('display_errors', 'On');


$db = new PDO('mysql:host=127.0.0.1;dpname=pdo', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	$db->query("INVALID");
} catch (PDOException $e) {
	die('Something went wrong.');
}

?>