<?php 
session_start();

if(isset($_SESSION["uname"])){

	echo "Hello , ".$_SESSION["uname"]."<br/><br/>";

// LAT=last accsess time
	$def=time()-$_SESSION["LAT"];

	echo "Last Accessed Time: ".$_SESSION["LAT"]."<br/><br/>";
	echo "Current Time: ".$def."<br/><br/>";

	if($def>300){
		session_destroy();
		header("Location:login.php");
	}else{
		$_SESSION["LAT"]=time();	
	}

if($_SESSION["type"]=="admin"){
	echo "<a href=viewData.php>View Data</a><br/>";
	echo "<a href=addData.php>Add Data</a><br/>"	;
	echo "<a href=logout.php>Logout</a><br/>";
}
else if($_SESSION["type"]=="user"){
	echo "<a href=viewData.php>View Data</a><br/>";
	echo "<a href=logout.php>Logout</a><br/>";	
}
}
else{
	session_destroy();
	header("Location:login.php");	
}

?>

<html >
<head>

<title>welcome Admin page</title>
</head>

<body>
<h1>Welcome</h1>

</body>
</html>