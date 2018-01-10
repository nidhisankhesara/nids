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
	$fname = $_POST["fname"];
	$name = $_POST["name"];
	$pwd = $_POST["password"];
	$cpwd= $_POST["cpassword"];
	$emailid = $_POST["emailid"];
	$mno = $_POST["mobile"];
	$sql = "INSERT INTO users (fullname,username,password,emailid,phone) 
			VALUES('$_POST[fname]','$_POST[name]','$_POST[password]','$_POST[emailid]','$_POST[mobile]')";
	if ($conn->query($sql) === TRUE) 
	{
		$_SESSION["sess_user"]=$name;
		header("location: des.php");
	}
	
	else
	{	
		echo "<script type='text/javascript'>alert('Failed');</script>";
		header("location: signup.html");
	}
	mysqli_close($conn);
?>
