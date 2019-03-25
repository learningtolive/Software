<!DOCTYPE html>
<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];





$conn =mysqli_connect('localhost', 'srehma28',  'Mangla786', 'srehma28');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

	}

if($Name !="" and $Email !="" and  $Message !=""){


$sql = "INSERT INTO story (Name,Email,Message)
VALUES ('$Name','$Email','$Message')";

if ($conn->query($sql) === TRUE) {
	header("refresh:1;url=story.php");
}

	
}else {
	echo"please fill all";
	 header("refresh:1;url=story.php"); 
}
	
$conn->close();

?>

