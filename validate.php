<?php
	$user=$_GET['username'];
	$pass=$_GET['pwd'];

	$connect=mysqli_connect("localhost","root","","firstDB");

	$select="SELECT * FROM `info` WHERE username = '$user' and password = '$pass'";
	$result = mysqli_query($connect,$select);
	
	$row=mysqli_fetch_array($result);

	if (mysqli_num_rows($result)>0) {
		echo $row['username']."".$row['password']; 
	}
	else{
		echo "Incorrect username-password or Not Registered";
	}

?>