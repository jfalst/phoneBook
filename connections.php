<?php
$mysql_hostname = "localhost";

$mysql_username = "root";
$mysql_password = "root";
$port = 3306;
$db = "phonebook";

$conn = new mysqli( $mysql_hostname, $mysql_username, $mysql_password, $db, $port) or die("something wrong");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>