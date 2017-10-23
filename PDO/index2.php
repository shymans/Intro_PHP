<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');


// Use quote to protect from an SQL injection -> Prepared methods are more useful and cleaner.
/*
if (!empty($_GET['user'])) {
	$userId = $db->quote($_GET['user']);

	$user = $db->query("SELECT * FROM users WHERE id = {$userId}");
	var_dump($user->fetchObject());
}
*/
// This is the prepare method that is cleaner than the quote method
if (!empty($_GET['user'])) {
	$user = $db->prepare("SELECT * FROM users WHERE id = :user_id");
	
	$user->execute([
		'user_id' => $_GET['user'],
	]);
	
	var_dump($user->fetchObject());
}

/* 
$users = $db->query("SELECT count(id) AS count FROM users");

$users = $users->fetchObject();

echo $users->count;
*/
// rowCount() method allows you to pull how many rows of data there are in the DB

?>