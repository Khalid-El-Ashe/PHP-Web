<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database_name = 'firstweb';

// in here i need to make connection to database
$connection = mysqli_connect($host, $username, $password, $database_name);

if (!$connection) {
    echo "can't success" . mysqli_connect_error();
}

?>