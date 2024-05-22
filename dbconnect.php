<?php
$host = 'localhost';
$username = 'root';
$password = ''; // Use '' if no password is set
$database = 'bookstore';

$con= new mysqli($host, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "";
?>
