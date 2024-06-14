<?php
// Check if the constants are already defined
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}
if (!defined('DB_PASS')) {
    define('DB_PASS', '');
}
if (!defined('DB_NAME')) {
    define('DB_NAME', 'placement');
}

// Establish database connection
$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the connection was successful
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
