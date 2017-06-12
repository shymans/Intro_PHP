<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');

$users = $db->query("SELECT count(id) AS count FROM users");

$users = $users->fetchObject();

echo $users->count;

// rowCount() method allows you to pull how many rows of data there are in the DB

?>