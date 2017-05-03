<?php

/* Just showing embedded HTML usage

$name = "kyle";

if ($name=="alex") {
	echo "Hi, Alex.";
} else {

?>

You're not Alex? Please type your name:<br />
<form action="working.php" method="POST">
<input type="text" name="name"> <input type="submit" value="Submit">
</form>

<?php
}

*/


$GLOBALS['levels'] = array(
	1 => array(
			'name' => 'Level 1',
			'desc' => 'This is the first level'
		),
	2 => array(
			'name' => 'Level 2',
			'desc' => 'You\'ve made it to level 2!'
		),
	3 => array(
			'name' => 'Level 3',
			'desc' => 'The last level'
		)
);

function level_data($level, $data) {
	if (array_key_exists() === true) {
		
	}
}

// Prints out the Array in a clean readable way
echo '<pre>', print_r($GLOBALS['levels'], true), '</pre>';



?>
