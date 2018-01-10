<?php
	session_start();
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
	$sql = "SELECT username,password FROM users WHERE username='$name' and password='$pwd'";
	$result = $conn->query($sql);
	if($name=='admin' and $pwd=='admin')
	{
		$_SESSION["sess_user"]=$name;
		header("location: ahome.php");
	}
	else if ($result->num_rows == 1)
	{
		$_SESSION["sess_user"]=$name;
		header("location: des.php");
	}
	
	else
	{
		header("location: signup.html");
	}
	mysqli_close($conn);
?>
	