<?php

session_start();

// Once it runs once, you can comment it out, because the session will remain active as
// long as the browser remains open.

//$_SESSION['name']="Austin";

echo $_SESSION['name'];

//unset($_SESSION['name']);
// The difference between the two is that session_destroy() will delete all sessions on the page.
session_destroy();
?>