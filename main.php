<?php

$url = file_get_contents('index.html');
echo $url;

$servername = "localhost";
$username = "maymaays";
$password = "ltolpxAjR7PHQPYO";
$dbname = "Hotel Management";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close();
?>

