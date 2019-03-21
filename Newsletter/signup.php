<?php
$servername = "localhost";
$username = "srehma28";
$password = "Mangla786";
$dbname = "srehma28";


$email = $_POST['email'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];




$conn =mysqli_connect("localhost", "srehma28", "Mangla786", "srehma28");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO newsletter (email,fname,sname)
VALUES ('$email','$fname','$sname')";

if ($conn->query($sql) === TRUE) {
	header("refresh:1;url=newsletter.php");
}


$conn->close();
?>

