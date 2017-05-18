<?php

$likes = 'eating, drinking, the gym, nothing';
$likes = explode(',', $likes);

//print_r($likes);

foreach($likes as $key => $like) {
	echo '<a href="#">', $like, '</a><br>';
}


//How to split a string with multiple white spaces
$string = trim('Blue      car     sales');
$keywords = preg_split('/[\s]+/', $string);

print_r($keywords);
?>