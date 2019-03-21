<?php
/*the chat poster*/
$db =new PDO('mysql:host=localhost;dbname=ahuss272',  'root', '');

/*secure chat*/

if (isset($POST ['text']) && isset($_POST['name']))
{
	$text = strip_tags(stripslashes($POST['text']));
	$name = strip_tags(stripslashes($POST['name']));
		
		if(!epmty($text) && !epmty($name))
		{
			$insert = $db->prepare("INSERT INTO Messages VALUES ('','".$name."','".$text."')");
			$insert->execute();	
			
			echo "<li class='cm'><b>",ucwords($name)."</b> -".$text."</li>";
		}
}

?>

