<?php

/* Get username*/
$user = $_GET[ 'u'];
?>
<html>
<head>
<meta charset="utf-8">
<title>Chatter</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="chatroom.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">	
	<script src="//code.jquery.com/jquery-1.11.0.min"></script>
	<script src="chatroom1.js"></script>
</head>

<body>
	
<div class="chatContainer">
	<div class= 'chatHeader'>
	   <h3>Welcome <?php echo ucwords ($user); ?></h3>
</div>	
	
	<div class=" chatMessages"></div>
	<div class="chatBottom">
	<form action = '#' onSubmit= 'return false;' id='chatForm'>
		<input type = 'hidden' id='name' value= '<?php echo $user; ?>' />
		<input type= 'text' name='text' id='text' value= '' placeholder= 'type your chat message' />
		<input type='submit' name='submit' value='Post' />
	</div>
	
	</div>	
</body>
</html>