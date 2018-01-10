<?php
session_start();
?>
<html>
<?php
	
	if(!isset($_SESSION["sess_user"]))
		header("location: login.html");
?>
<head>
<title>BackPacker.in</title>	
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<style>
ul{ 
    width: 100%;
	list-style-type: none;
	position: relative;
	top: 0px;
    margin: 0;
    padding: 10px;
    overflow: hidden;
    background: rgba(255,255,255,0.02);
	font-size: 15px;}
	
.footer-distributed{
	background-color: #DD99FF;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
	bottom: 0;}
	
	input[type=submit] {
	background-color: navy;
	color: white;
	padding: 16px 32px;
	text-decoration: none;
	margin: 4px 2px;
	cursor: pointer;
	transition: .5s ease;}
		
input[type=submit]:hover{
	background-color: white;
	color:navy;
	transition: .5s ease;
	font-weight: bold;}
	
	#img1{
		width:400px;
		height:300px;
		box-shadow: 10px 10px 5px #888888;
	}

</style>
</head>
<body>
<div class="container">
<img src="book_main.png" alt="BackPacker" style="width:100%;height:650px;">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="home.php"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size: 250%;">Backpacker &nbsp;</strong></li>
			<li><a href="home.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
			<li><a href="des.php">Destinations</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="reviewsl.php">Reviews</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="logout.php">Log Out</a></li>
			</h4>
		</ul>
    </div>
</div>
</div>
<br><br>

<center>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "back";
	$conn = new  mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) 
		die("Connection failed: " . $conn->connect_error);
	
	$a=$_SESSION["sess_adv"];
	//$b=$_SESSION["sess_user"];
	$sql=" SELECT * FROM  places WHERE aname='$a'";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
		$image=$row["picid"];
		echo "<img id=img1 src=".$image.">.<br><br>";
		echo "Place Name: " . $row["place"]."<br><br>";
		echo "Adventure Name: " . $row["aname"];}}
	
	else 
{
	echo "no bookings";
}
mysqli_close($conn);
	
	?>

<br><br>

<form id="forms" name="bookform" action="book1.php" method="post" onsubmit="return validateForm()">
		<table style="margin: 0 auto; font-size:20px;">
		<tr>
		<th>Full Name</th>
		<th><input type="text" name="fname" value="" placeholder="Enter Name"></th>		
		</tr>
		<tr><th><br></th></tr>
		<tr>
		<th>No. of People</th>
		<th><input type="number" name="no_of_people" placeholder="People" min="1" max="10"></th>		
		</tr>
		<tr><th><br></th></tr>
		<tr>
		<th>Date of Travel</th>
		<th><input type="date" name="date" placeholder="D.O.J"></th>	
		</tr></table>
		<br><br><br>
		<tr>
		<th><input type="submit" name="booking" value="Confirm Booking"></th>
		</tr></center>
</form>
		
<br><br>	
		
		
	
	<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="home.php">Home |</a>
					<a href="des.php">| Destinations |</a>
					<a href="logout.php">| Log Out |</a>
					<a href="aboutus.php">| About  |</a>
					<a href="contactus.php">| Contact |</a>
					<a href="reviewsl.php">| FAQ</a></p>
				<p class="footer-company-name">BackPacker.in &copy; 2017</p></div>
				
			<div class="footer-center">
				<div><i class="fa fa-map-marker"></i><p><span>21 Altmount Road</span> Mumbai, India</p></div>
				<div><i class="fa fa-phone"></i><p>+91 987 654 3210</p></div>
				<div><i class="fa fa-envelope"></i><p><a href="mailto:support@backpacker.in">support@backpacker.in</a></p></div>
			</div>
			
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					BackPacker is an ultimate location for travel enthusiastics to explore diffrent adventures in the country. </p>
				<div class="footer-icons">
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
					<a href="https://www.twitter.com"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
	</footer>

</body>
</html>