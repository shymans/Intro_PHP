<?php

require_once 'db.php';

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
// Never send a db query within a loop

/* Grabbing the count of users from the db ( use COUNT for a few thousand users, SQL_ for larger db's )

$usersResult = $db->query("SELECT COUNT(id) as count FROM users");
$users = $usersResult->fetch_object();
echo $users->count; 

OR

$count = db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
$countResult = db->query("SELECT FOUND_ROWS() as count");
var_dump($countResult->fetch_object());

*/

/* How to see affected rows by an update
$updateUser = $db->query("UPDATE users SET last_name = 'Garett'");
echo "{$db->affected_rows} rows were updated.";
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<!-- You can also use fetch_array or fetch_object, depending on what you want to do with the data -->
		<?php while ($row = $users->fetch_assoc()): ?>
			<p><?php echo $row['full_name']; ?>, <?php echo $row['email']; ?>, <?php echo $row['created']; ?></p>
		<?php endwhile; ?>
	</body>
</html>
