<?php

	$hostname= "localhost";
	$username="pdnc";
	$password="123";
	
	$con = mysqli_connect($hostname,$username,$password);
	
	$dbconect=mysqli_select_db($con,"tbluser");
	
	$sql="SELECT * FROM user";

	$result= mysqli_query($con,$sql);
	echo "
	<table border=1>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Type</th>
		</tr>
	";
	
		
		while($row=mysqli_fetch_array($result)){
		echo "
		<tr>
			
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>$row[2]</td>
				<td>$row[3]</td>
			
		</tr>
		";
	}
		
	echo "</table>";
	
	mysqli_close($con);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>