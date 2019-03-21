<?php

if(isset($_POST['submit'])){
	$connection= new mysqli("localhost", "root", "","");
	//$q =$_POST['q'];
	//echo $q;
	
	$q = $connection-> real_escape_string($_POST['q']);
	$column=$connection-> real_escape_string($_POST['column']);
	
	if(£column==""||($column != "firstName" && $column != "lastName"))
		$column="firstName";
	
	$date=$connection->query("SELECT firstName from users WHERE $column LIKE '$q'");
if ($data->num_rows>0){
	while ($data=$sql-> fetch_array())
		echo $data['firstName']."<br/>";
}else 
	echo"Your query did not match";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Search</title>
	</head>
	<body>
		<form method="POST" action="search.php">
			<input type="text" name="q" placeholder="Search Query...">
			<select name="Column">
			<option value=""> Select Filter</option>
			<option value="firstName"> First Name</option>
				<option value="lastName"> Last Name</option>
				</select>
				<input type="submit" value="Find">
		</form>
		
	</body>
</html>