<?php
$conn = mysqli_connect("localhost", "srehma28", "Mangla786", "srehma28");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM story";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
	   
    echo "<tr><td><br>". $row["Name"]. "<td> <br>" . $row["Email"] . "<td><br>" . $row["Message"] . " <tr> <br>  ";
}
echo "";
} else { echo "0 results"; }
$conn->close();
?>