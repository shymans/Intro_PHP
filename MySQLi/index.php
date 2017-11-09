<?php

require_once 'db.php';

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name FROM users");
// Never send a db query within a loop
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
		