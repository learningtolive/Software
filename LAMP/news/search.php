<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="news.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>


<h1> Search page </h1>

<div class="article-container">

<?php 

$server="localhost";
$username="";
$password="";
$dbname="";

$conn=mysqli_connect($server,$username,$password,$dbname);



if(isset($_POST['submit-search'])){
	$search= mysqli_real_escape_string($conn,$_POST['search']);
	$sql="SELECT * FROM article WHERE a_title LIKE '%$search%' OR  a_text LIKE '%$search%' OR
	author LIKE '%$search%' OR a_date LIKE '%$search%'";
	$result= mysqli_query($conn,$sql);
	$queryResult= mysqli_num_rows($result);
	
	echo"Tehere are ".$queryResult." results!";
	if($queryResult > 0){
		while($row = mysqli_fetch_assoc($result)){
			 echo"<a href='article.php?title=".$row[a_title]."&date=".$row['a_date']."'><div class='article-box'> 
	 <h3>".$row['a_title']."</h3>
	 <p>".$row['a_text']."</p>
	 <p>".$row['a_date']."</p>
	 <p>".$row['a_aurthor']."</p>
	 </div> </a>";
		}
		
	}else{
		echo "No results matching";
	}
}
?>
</div>
</html>