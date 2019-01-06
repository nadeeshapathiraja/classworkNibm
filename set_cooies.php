<?php 

	session_start();
	
	if(isset($_SESSION["uname"])){
	
	echo "User name:".$_SESSION["uname"]."<br/>";
	echo "User Type:".$_SESSION["type"]."<br/>";
	}else{
		echo "Authorize access..";	
	}
	
	echo "<a href=session_destroy.php>Destroy Session</a>";
?>