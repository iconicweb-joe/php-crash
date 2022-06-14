<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'app_user');
define('DB_PASS', ')L]S8/Ix]NbP!QlY');
define('DB_NAME', 'php_dev');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check conn
if (!$conn) {
  die('Database connect failed :(');
}
