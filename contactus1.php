<html>
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
    margin: 0;
    padding: 10px;
    overflow: hidden;
    background: rgba(255,255,255,0.02);
	font-size: 15px;	}
	
	
	.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);}
	
	h1{
	color: white;
    font-size: 49px;
	font-family: Copperplate, "Copperplate Gothic Light", fantasy;}
	
	#forms{
			width:50%;
			display: table;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			
			background-color:#f2f2f2;
			font-weight:bold;
			text-align: center;
			color:black;}
	
		
		
		div.tablerow{
			display: table-row;}

		div.tablerow p{
			display: table-cell;
			vertical-align: top;
			padding: 3px;}
		
		select{
			width:100%;
			padding: 12px;
			
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;}
			
		div.tablerow p:firstchild{
			text-align:right;}
			
	
	input[type=submit] {
			background-color: navy;
			color: white;
			padding: 16px 32px;
			text-decoration: none;
			margin: 4px 2px;
			cursor: pointer;
			transition: .5s ease;
			font-weight: bold;
		}
		
		input[type=submit]:hover{
			background-color: white;
			color:navy;
			transition: .5s ease;
			font-weight: bold;
		}

</style>
</head>

<body>
<div class="container">
<img src="contactus.jpg" alt="BackPacker" style="width:100%;height:650px;">
<div style="font-family:'Times New Roman', Times, serif;font-weight:bold">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="home.html"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size:50px;">BackPacker &nbsp;</strong></li>
			<li><a href="home.html"><i class="fa fa-home"></i>&nbsp;Home</a></li>
			<li><a href="des.php">Destinations</a></li>
			<li><a href="login.html">Log In</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="reviews.php">Reviews</a></li>
			</h4>
		</ul>
    </div>
</div>
</div>
 <div class="centered">
    <h1>Get in touch with us</h1>
 </div>
</div>

<br><br>

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
	$fname = $_POST["fname"];
	$emailid = $_POST["emailid"];
	$country = $_POST["country"];
	$msg = $_POST["msg"];
	$sql = "INSERT INTO contactus (fullname,emailid,country,msg) 
			VALUES('$_POST[fname]','$_POST[emailid]','$_POST[country]','$_POST[msg]')";
	if ($conn->query($sql) === TRUE) 
	{
		echo "<script type='text/javascript'>alert('Query Sent Successfully');</script>";
	}
	
	else
	{
		echo "<script type='text/javascript'>alert('Failed');</script>";
	}
	mysqli_close($conn);
?>

<center>
		<form id="forms" action="contactus1.php" method="post">
		<div class="tablerow">
		<p> Full Name</p>
		<p><input type="text" name="fname" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Email ID</p>
		<p><input type="email" name="emailid" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Country</p>
		<p>
		<select id="country" name="country">
		<option value="india">India</option>
		<option value="canada">Canada</option>
		<option value="usa">USA</option>
		<option value="portugal">Portugal</option>
		</select>
		</p>
		<br>
		</div>
		<div class="tablerow">
		<p>Message</p>
		<p><input type="textarea" name="msg" value="" style="height:300px; width:100%"></p>
		</div>
		<div class="tablerow">
		<p></p>
		<p><input type="submit" name="submit" value="Submit"></p>
		</div>
		</form>
		</center>
		<br><br><br>
		
		<h3 align="center" style="font-size:50px;color:navy;font-family: Georgia, Times, "Times New Roman", serif;">
		<i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;Find us at</span></h3>
		
		<div id="map" style="width:100%;height:500px;top:10px "></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(19.0731, 72.8998 );
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 16};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhIbmowZMNQlsMMMXL0LO96rKHAxpdkVQ&callback=myMap"></script>

<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="home.php">Home |</a>
					<a href="des.php">| Destinations |</a>
					<a href="logout.php">| Log Out |</a>
					<a href="aboutus.php">| About  |</a>
					<a href="contactus.php">| Contact |</a>
					<a href="reviews.php">| FAQ</a></p>
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