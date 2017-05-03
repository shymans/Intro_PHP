<?php

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
?>