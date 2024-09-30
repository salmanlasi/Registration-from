

<?php
// Database connection file

$host = 'localhost';         // Usually "localhost"
$db_user = 'root';    // Your database username
$db_pass = '';    // Your database password
$db_name = 'log'
;    // Your database name

// Create the connection
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

// Check if the connection was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
