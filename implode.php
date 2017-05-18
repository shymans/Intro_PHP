<?php
/*
$names = array('Alex', 'Austin', 'James');
echo implode(', ', $names);
*/


$name = 'Austin';
$email = 'test@gmail.com';
$message = 'Welcome to the thunderdome!';
$telephone = '12343634';
// Collect and process data up here.

$data = array(
	'name' => $name,
	'email' => $email,
	'message' => $message,
	'telephone' => $telephone
);

$fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
$values_sql = "'" . implode("', '", $data) . "'";

$sql = "
	INSERT INTO `table` ($fields_sql)
	VALUES ($values_sql)
";

echo $sql;
?>