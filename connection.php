<?php
$servername = "localhost";
$username = '';
$password = '';
$dbname = "chat";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];





$conn = mysqli_connect('localhost', '','', 'chat');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user (is, first_name, last_name, user_name, pass)
VALUES ('','$first_name','$last_name','$user_name', '$pass',)";


?>

