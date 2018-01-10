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
#img1{
		width:100px;
		height:100px;
				box-shadow: 10px 10px 5px #888888;

	}
	
	#gray{
		background-color:#EDEDED;
				width:100%;

	}
</style>
</head>

<body>
<div class="container">
<img src="reviews_main.png" alt="BackPacker" style="width:100%;height:650px;">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="home.html"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size: 250%;">Backpacker &nbsp;</strong></li>
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
	$username = $_POST["username"];
	$aname = $_POST["aname"];
	$star = $_POST["star"];
	$review = $_POST["review"];
	$sql = "INSERT INTO review (username,aname,star,review) 
			VALUES('$_POST[username]','$_POST[aname]','$_POST[star]','$_POST[review]')";
	if ($conn->query($sql) === TRUE) 
	{
		echo "<script type='text/javascript'>alert('Review Sent successfully');</script>";
	}
	
	else
	{
		echo "<script type='text/javascript'>alert('Failed');</script>";
	}
	mysqli_close($conn);
?>

<center>
		<form id="forms" action="reviews1.php" method="post">
		<div class="tablerow">
		<p>Username</p>
		<p><input type="text" name="username" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Adventure Experienced</p>
		<p><input type="text" name="aname" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Your Rating</p>
		<p><input type="number" name="star"  min="1" max="5"></p>
		</div>
		<div class="tablerow">
		<p>Message</p>
		<p><input type="textarea" name="review" value="" style="height:300px; width:100%"></p>
		</div>
		<div class="tablerow">
		<p></p>
		<p><input type="submit" name="submit" value="Submit"></p>
		</div>
		</form>
		</center>
		<br><br><br>
		
		
<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="home.html">Home |</a>
					<a href="des.html">| Destinations |</a>
					<a href="login.html">| Log IN |</a>
					<a href="aboutus.html">| About  |</a>
					<a href="contactus.html">| Contact |</a>
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