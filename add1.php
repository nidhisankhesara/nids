<?php
session_start();
?>
<html>
<head>
<?php
	
	if(!isset($_SESSION["sess_user"]))
		header("location: login.html");
?>
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
	
h2 { 
	position: absolute; 
	top: 300px; 
	left: 0; 
	width: 100%; 
	color: white;
	font-size: 39px;
	font-family: Copperplate, "Copperplate Gothic Light", fantasy;}
	
h1{
	font-family: "Brush Script MT", cursive;}

h4{
	font-family: "Brush Script MT", cursive;
	font-size: 30px;}
	
	
.container1 {
	left: 10;    
	position: relative;
    width: 315px;
	height: 315px;
	box-shadow: 10px 10px 5px #f2f2f2;	}

.image {
	opacity: 1;
	display: block;
	width: 100%;
	height: 80%;
	transition: .5s ease;
	backface-visibility: hidden;}

.middle {
	transition: .5s ease;
	opacity: 0;
	font-family: Georgia, Times, "Times New Roman", serif;
	font-size: 15px;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%)}

.container1:hover .image {
	opacity: 0.6;}
	
.container1:hover .middle {
	opacity: 1;}


.button {
    background-color: navy;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;}
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

  <div class="w3-content w3-section" style="max-width:100%">
	    <img class="mySlides w3-animate-fading" src="camp.png" style="width:100%; height:650px"> <h2>Plenty of Adventures<br />Worth experiencing...</h2>  
		<img class="mySlides w3-animate-fading" src="scuba.png" style="width:100%; height:650px"> <h2>Plenty of Adventures<br />Worth experiencing...</h2>        
		<img class="mySlides w3-animate-fading" src="balloon.png" style="width:100%; height:650px"><h2>Plenty of Adventures<br />Worth experiencing...</h2> 
		<img class="mySlides w3-animate-fading" src="rafting.png" style="width:100%; height:650px"> <h2>Plenty of Adventures<br />Worth experiencing...</h2> 
  </div>  

  <script>
	var myIndex = 0;
	carousel();

	function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    }
   </script>
<div style="font-family:'Times New Roman', Times, serif;font-weight:bold">
<div class="top-left">
    <div id="heading">
		<ul>
		    <li><a href="index.php"><img src="logo.png" alt="BackPacker" align="left" style="width:50px;height:70px;"></a> </li>
			<h5 style="font-size: 18px;"><li><strong style="color:black; font-size:50px;">BackPacker &nbsp;</strong></li>
			<li><a href="ahome.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
			<li><a href="add1.php">Add Destinations</a></li>
			<li><a href="remove.php">Remove Destinations</a></li>
			<li><a href="areviews.php">Reviews</a></li>
			<li><a href="logout.php">Log Out</a></li>
			</h5>
		</ul>
    </div>
</div>
</div>
<br><br><br>
<center>
		<form id="forms" action="add.php" method="post">
		<div class="tablerow">
		<p> Adventure Name</p>
		<p><input type="text" name="aname" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Place</p>
		<p><input type="text" name="place" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Type</p>
		<p><input type="text" name="type" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Availibility</p>
		<p><input type="text" name="avail" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Cost</p>
		<p><input type="text" name="cost" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Duration</p>
		<p><input type="text" name="duration" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Pic</p>
		<p><input type="text" name="pic" value="" style="width:100%"></p>
		</div>
		<div class="tablerow">
		<p>Description</p>
		<p><input type="textarea" name="description" value="" style="height:300px; width:100%"></p>
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