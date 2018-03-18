<?php
	$user = $_REQUEST['username'];
	$pass=$_REQUEST['pwd'];
	$name=$_REQUEST['name'];

	$connect = mysqli_connect("localhost","root","","firstDB");
	if (!$connect) {
		die("Connection Failed");
	}
	else{
		echo "Connection Successful";
	}

	//$str = "create table info(name varchar(20), username varchar(20), password varchar(20))";
	//mysqli_query($connect,$str);

	$str = "insert into info(name,username,password) values ('$name','$user','$pass')";
	mysqli_query($connect,$str);
?>