<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


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

var slideIndex = 0;
showSlides();
</script>




</head>
<body>


<div class="login">
	<a href="Registration/register.php"> Register</a>
 <a href="Registration/login.php" > LogIn</a>
	<a href="test.php" >Table</a>
	<select>
  <option value="volvo" ><img src="img/iconfinder_uk.png">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
  
	</div>

	


<div id="mySidenav" class="sidenav">
 <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <a href="index.html " ><img src="logo/logo.png" width="200" > 
  <a id="l" href="index.html " ><img src="logo/logo-white.png" width="200" > 
 
 
	<a href="index.html">Home</a> 
	<a href="#">Resources</a> 
	<a href="#">Output</a> 
	<a href="Newsletter/newsletter.php">Newsletter</a> 
	<a href="about.html">About Us</a> 
	<a href="story.php"> Stories </a> 
	<a href="partners.html">Partners </a> 


</div>

<div id="main">

  <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

   <div class="image-scroll-story">

</div>   


<div class="card-container">
  <div class="cards">
    <h2><th>Name </th></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt. Consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam placeat numquam omnis sit consectetur.</p>
  </div>

  <div class="cards">
    <h2>
  <th>Email</th></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt placeat numquam omnis.</p>
  </div>

  <div class="cards">
    <h2> <th>Message</th></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>
</div>


<table class="story-table">
 <tr>
  <th>Name</th> 
  <th>Email	</th> 
  <th>Messages</th>
 </tr>

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
</div>
</table>


<div class="card-container">
  <div class="cards">
    <h2>Feature 1</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt. Consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam placeat numquam omnis sit consectetur.</p>
  </div>

  <div class="cards">
    <h2>Feature 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt placeat numquam omnis.</p>
  </div>

  <div class="cards">
    <h2>Feature 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>
</div>

<div class="card-container">

<div class="cards">
    <h2>Feature 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>

<div class="cards">
    <h2>Feature 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>
  
  <div class="cards">
    <h2>Feature 3</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>
</div>



	
	<form class="my-form" action="story-database.php" method="post">





<br/>


<div class="story">
<h3> Share Your Story: </h3>
<input placeholder= "Your Name Here"  type="text" name="Name"  id="name"/>
<input placeholder= "Email"  type="text" name="Email"  id="name"/>
<textarea maxlength="1000"  placeholder="Type Your Story Here....."  name="Message"></textarea>



<!--      <input placeholder= "Type Your Story Here "  type="text" name="Story"  id="story"/> -->
 
	<br/>

<input class="subbutton" type="submit" >


</div>

</form>




</body>
	
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

			
				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

	</body>

</html>
