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
	
	#img1{
		width:400px;
		height:300px;
				box-shadow: 10px 10px 5px #888888;

	}
	
	#gray{
		background-color:#EDEDED;
	}

</style>
</head>

<body>

<div class="container">

<img src="water_main.png" alt="BackPacker" style="width:100%;height:600px;">

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
</div></div>
</div>
<br><br>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "back";
	$conn = new  mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
die("Connection failed: " . $conn->connect_error);
$a='water';
$sql=" SELECT * FROM places WHERE type like '%".$a."%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc()) 
  {
	echo "<table cellpadding=10>";
	$image=$row["picid"];
	$adv=$row["aname"];
	$_SESSION["sess_adv"]=$adv;
	echo "<tr><td><img id=img1 src=".$image."></td>";
    echo "<td id=gray><span style=font-weight:bold;color:#0000FF;>Place:</span> &nbsp; " . $row["place"]. "<br><br><span style=font-weight:bold;color:#0000FF;>Adventure:</span> " . $row["aname"] . "<br><br>";
	echo $row["description"]."<br><br>";
	echo "<span style=font-weight:bold;color:#0000FF;>Inclusions:</span> &nbsp; <i class='fa fa-cutlery' aria-hidden='true'></i> &emsp; <i class='fa fa-coffee' aria-hidden='true'></i> &emsp; <i class='fa fa-car' aria-hidden='true'></i><br><br>";
	echo "<span style=font-weight:bold;color:#0000FF;>Cost per Person:</span> &nbsp; ".$row["cost"]."<br><br>";
	echo "<span style=font-weight:bold;color:#0000FF;>Duration:</span> &nbsp; ".$row["duration"] ."<br><br>";
	echo"<form action=book.php method=get><input type=submit value=Book></input></form>. </td></tr>";
	echo "</table><br>";
  }
} 
else 
{
	echo "Sorry,no activities available in the region....";
}
mysqli_close($conn);
?>

<footer class="footer-distributed">
	<div class="footer-left">
				<h3>BackPacker<span>.in</span></h3>
				<p class="footer-links">
					<a href="home.html">Home |</a>
					<a href="des.php">| Destinations |</a>
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