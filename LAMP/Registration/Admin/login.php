<?php include('server.php') ?>
<!DOCTYPE html>
<head lang="en-US">
<meta charset="UTF-8">
  

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="template.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<title>Admin</title>
</head>
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





	

<div id="mySidenav" class="sidenav">
 <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<img href="../../index.html" src="../../logo/Learning_to_Live.png" alt="L2L Logo" >
 
  
 
	<a href="../../index.html">Home</a> 
	<a href="../../../pdf/files.html">Resources</a> 
	<a href="#">Output</a> 
	<!-- <a href="news/news.php">News</a> -->
	<a href="../../About/about.html">About Us</a> 
	<a href="../../story.php"> Stories </a>
	<a href="../../Newsletter/newsletter.php"> Newsletter </a>
	<a href="../../partners.html">Partners </a> 
	<a href="support.html">Support </a>


</div>
<div id="main">

  <span style="color: white; cursor: pointer;" onclick="openNav()">&#9776;</span>
</div>



  <div class="header">
  	<h2>Login</h2>
  </div>
	 
   <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
 
  </form>
</body>
</html>