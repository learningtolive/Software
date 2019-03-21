<!doctype html>
<html>
<head>

	<title></title>
<link rel="stylesheet" href="style.css" >
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<link href="news.css" rel="stylesheet">
<script src="scroll.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<body>	


<script>
   // script to make the side pannel come out
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>

</head>

<div class="login">
	<a href="../Registration/register.php"> Register</a>
 <a href="../Registration/login.php" > LogIn</a>
	<select>
  <option value="volvo" ><img src="img/iconfinder_uk.png">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
  
	</div>

	
	



<div id="mySidenav" class="sidenav">
 <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a id="l" href="../index.html " ><img src="../logo/logo-white.png" width="200" > 
 
  
 


	<a href="../index.html">Home</a> 
	<a href="#">Resources</a> 
	<a href="#">Output</a> 
	<!-- <a href="news/news.php">News</a> --> 
	<a href="../about.html">About Us</a> 
	<a href="../story.php"> Stories </a> 
	<a href="../partners.html">Partners </a> 

</div>

<div id="main">

  <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<div class="article-top">
<form action="search.php" method="POST">
<input type="text" name="search" placeholder="Search">


<button type="submit" name="submit-search">Search</button>
</form>

</div>
<div class="article-container">
<?php
$server="localhost";
$username="srehma28";                  //change the $server,$usernmae,$password.$databse to your own.
$password="Mangla786"; 
$dbname="";

$conn = mysqli_connect("localhost", "srehma28", "Mangla786", "srehma28");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM news";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo"<div class='article-box'> 
	 <h3>".$row['a_title']."</h3>
	 <p>".$row['a_text']."</p>
	 <p>".$row['a_date']."</p>
	 <p>".$row['a_aurthor']."</p>
	 
	 </div>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();


?>


</div>



</body>

		<footer class="footer-distributed">

			<div class="footer-left">

				<img href="index.html" src="logo/Learning_to_Live.png" alt="L2L Logo" width="200px" >

		

				<p class="footer-company-name">Learning to Live &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Richmond Rd, Bradford</span> BD7 1DP, England</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>01274 232323</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">LearningtoLive@live.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="https://en-gb.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/?lang=en-gb"><i class="fa fa-twitter"></i></a>
					<a href="https://uk.linkedin.com/"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

	</body>

</html>
