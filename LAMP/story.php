<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<title> Share Your Stroy</title>
</head>


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




<body>


<div class="login">
	<a href="Registration/register.php"> Register</a>
 <a href="Registration/login.php" > LogIn</a>
	
</div>
	<div class="search">
  <form class="searchbar" action="#">
  <input type="text" placeholder="search" name="search">
     <button type="submit" class="searchButton"> <i class="fa fa-search"></i> </button>
 </form>
   </div>


<div id="mySidenav" class="sidenav">
 <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<img src="logo/Learning_to_Live.png" alt="L2L Logo" >


	<a href="index.html">Home</a> 
		<a href="pdf/files.html">Resources</a> 
	<a href="temp.html">Output</a> 
	<!-- <a href="news/news.php">News</a> -->
	<a href="About/about.html">About Us</a> 
	<a href="story.php"> Stories </a> 
	<a href="Newsletter/newsletter.php"> Newsletter </a>
	<a href="partners.html">Partners </a> 
	  <a href="support.html">Support </a>



</div>

<div id="main">

  <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

   <div class="image-scroll-story">

</div>   


<div class="card-container">
  <div class="cards">
    <h2>Name </h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt. Consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam placeat numquam omnis sit consectetur.</p>
  </div>

  <div class="cards">
    <h2>Email</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit consectetur nobis molestias! Explicabo deserunt placeat numquam omnis.</p>
  </div>

  <div class="cards">
    <h2>Message</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam obcaecati vel, placeat numquam omnis sit.</p>
  </div>
</div>


<table class="story-table">
 <tr>
  <th>Name</th> 
  <th>Email	</th> 
  <th>Messages</th>
 </tr>

<?php include 'story-con.php'; ?>

</div>
</table>




	


	
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
