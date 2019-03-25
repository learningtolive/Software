<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database here you use your own details
$db = mysqli_connect('localhost', 'srehma28', 'Mangla786', 'srehma28');
//$db = mysqli_connect('localhost', '', '', '');

// register page (user)
if (isset($_POST['reg_user'])) {
  // receive input values from the form that is on the resgister page
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // makes sure that the form is correctly filled, for example if the email has @
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
    
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  } // checks if passwords match this then registers the user
  
 
  $user_check_query = "SELECT * FROM Admin WHERE username='$username' OR email='$email' LIMIT 1";  // linit 1 means new duplciates so you cannot have 2 accoutns wuth same username or email
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists then do the code below
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

 // if they are no errors then the below code will run
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database this is done with md5 hash.

  	$query = "INSERT INTO admin (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>