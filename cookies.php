<?php

/*
$exp = time() + 86400;
setcookie("name", "Austin", $exp);
*/

$exp_unset = time() - 86400;

//echo $_COOKIE["name"];

//print_r($_COOKIE);

//unset cookie
setcookie("name", "", $exp_unset);


if (isset($_COOKIE['name'])) 
	echo "Cookie is set";
else
	echo "Cookie is not set";
?>