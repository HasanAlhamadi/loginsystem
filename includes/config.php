<?php
define('DB_SERVER','mysql-db');
define('DB_USER','hasan');
define('DB_PASS' ,'Hasan_alhamadi');
define('DB_NAME', 'loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

