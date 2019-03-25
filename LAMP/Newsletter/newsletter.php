	
	<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="newsletter.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<title> Newsletter</title>
</head>
	

<body>
		<script>
			// script to make the side pannel come out
			function openNav() {
				document.getElementById( "mySidenav" ).style.width = "200px";
				document.getElementById( "main" ).style.marginLeft = "0px";
			}

			function closeNav() {
				document.getElementById( "mySidenav" ).style.width = "0";
				document.getElementById( "main" ).style.marginLeft = "0";
			}

			var slideIndex = 0;
			showSlides();
		</script>




		<div class="login">
			<a href="../Registration/register.php"> Register</a>
			<a href="../Registration/login.php"> Log In</a>
		

		</div>
		
		<div class="search">
  <form class="searchbar" action="#">
  <input type="text" placeholder="search" name="search">
     <button type="submit" class="searchButton"> <i class="fa fa-search"></i> </button>
 </form>
   </div>




		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<img src="../logo/Learning_to_Live.png" alt="L2L Logo" >



			<a href="../index.html">Home</a>
				<a href="../pdf/files.html">Resources</a> 
			<a href="#">Output</a>
			<!-- <a href="news/news.php">News</a> -->
			<a href="../About/about.html">About Us</a>
			<a href="../story.php"> Stories </a>
			<a href="newsletter.php"> Newsletter </a>
			<a href="../partners.html">Partners </a>
			<a href="../support.html">Support </a>

		</div>

		<div id="main">

			<span style="cursor:pointer" onclick="openNav()">&#9776;</span>
		</div>





		<section class="banner-newsletter">
			<div class="banner-inner">
				<h1>Subscribe To Our Newsletter</h1>


			</div>

		</section>








		<div class="grid-container">

			<div class="item2">

				<h2> Our Newsletter</h2>
				<p>
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<div class="button_1"><a class="butn" href="#signupbg" href="#motbackground">Subscribe</a>
				</div>
			</div>
			<div class="item3">

				<img src="../img/map.jpg">
			</div>





			<div class="item5">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum modi nisi tenetur sint dignissimos nulla, blanditiis nesciunt.</p>
			</div>
		</div>

		<div id="signup">

			<section id="signupbg">
				<section id="forms">
					<form class="my-form" action="signup.php" method="post">
						<img src="../logo/Learning_to_Live.png" alt="L2L Logo">
						<h1> Subscribe To Our Newsletter Below:</h1>

						<br/>
						<p><label>Email Address:</label>
							<input type="text" name="email" id="email"/>
						</p>
						<br/>
						<p><label>First Name:</label>
							<input type="text" name="fname" id="fname"/>
						</p>
						<br/>

						<p><label>Surname:</label>
							<input type="text" name="sname" id="sname"/>
						</p>
						<br/>



						<button class="button_submit" id="butn"> Submit </button>

					</form>
				</section>
			</section>
		</div>





	<footer class="footer-distributed">

		<div class="footer-left">

			<img href="index.html" src="../logo/Learning_to_Live.png" alt="L2L Logo" >



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
				<p><a href="mailto:support@company.com">LearningtoLive@live.com</a>
				</p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
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