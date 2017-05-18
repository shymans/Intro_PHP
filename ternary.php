<?php

$age = 18;

/*
if ($age >= 18) {
	$old_enough = true;
}
*/
// The code above is the same thing as the code below
$old_enough = ($age >= 18) ? true : false;

/*
if ($old_enough === true) {
	echo 'Old enough';
} else {
	echo 'Not old enough';
}
*/
echo ($old_enough === true) ? 'Old enough' : 'Not old enough';

?>