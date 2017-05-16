<?php

$likes = 'eating, drinking, the gym, nothing';
$likes = explode(',', $likes);

//print_r($likes);

foreach($likes as $key => $like) {
	echo '<a href="#">', $like, '</a><br>;
}

?>