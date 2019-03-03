<?php
<?php
$servername = "localhost";
$username = "srehma28";
$password = "Mangla786";
$dbname = "srehma28";

$name = $_POST['name'];
$car = $_POST['car'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$time =$_POST['time'];

$records=mysql_query($sql);


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM Website";

if ($conn->query($sql) === TRUE) {
	header("refresh:4;url=mot.html");
    echo "Thank you for booking your MOT we will be in touch shortly";
}


$conn->close();
?>



?>