<?php
session_start();
?>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
header("Refresh: 0; url=home.php");
?>