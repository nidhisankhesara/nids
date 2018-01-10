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


	
.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);}
	
h1{
	color: white;
    font-size: 49px;
	font-family: Copperplate, "Copperplate Gothic Light", fantasy;}
   
   
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
	input[type=text], input[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

</style>
</head>
<body>
<img src="backpackers.jpg" alt="BackPacker" style="width:100%;height:650px;">
<div style="font-family:'Times New Roman', Times, serif;font-weight:bold">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="index.php"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h4 style="font-size: 18px;"><li><strong style="color:black; font-size:50px;">BackPacker &nbsp;</strong></li>
			<li><a href="ahome.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
			<li><a href="add1.php">Add Destinations</a></li>
			<li><a href="remove.html">Remove Destinations</a></li>
			<li><a href="areviews.php">Reviews</a></li>
			<li><a href="logout.php">Log Out</a></li>
			</h4>
		</ul>
    </div>
</div>
</div>
<center>
 <div class="centered">
    <h1>"Don't call it a DREAM, <br>Call it a PLAN"</h1>
</div>
<br><br><br>
<p style="font-size:40px;font-family:Brush Script MT, cursive;">
WELCOME to Admin Mode. You can update your tours,delete tours and reply to the queries.
</p>
<br><br><br>

	<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="index.php">Home |</a>
					<a href="logout.php">| Log Out |</a>
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