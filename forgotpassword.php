<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "back";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$name = $_POST["name"];
	$pwd = $_POST["password"];
	$emailid = $_POST["emailid"];
	$sql = "UPDATE users SET password='$pwd' WHERE username='$name' and emailid='$emailid'";
	if ($conn->query($sql) === TRUE) 
	{
		header("location: login.html");
	}
	
	else
	{
		header("location: forgotpassword.html");
	}
	mysqli_close($conn);
?>