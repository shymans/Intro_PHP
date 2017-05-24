<?php
// Allows you to find the available drivers on your machine to use with PHP
// var_dump(PDO::getAvailableDrivers());

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dpname=pdo', 'root', '');
?>