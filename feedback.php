<?php
session_start();
	if($_SESSION['status']==""){
		header("location:index.php");
	}
include("Sakina/includes/database.php");


if(isset($_POST['submit'])){
	
	date_default_timezone_set("Asia/Kolkata");
	$date=date("d:m:Y");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$query="insert into feedback(name,email,comment,date) values('$name','$email','$message','$date')";
	$runquery=mysqli_query($con,$query) or die(mysqli_error($con));
	echo "<script> alert('Thank you for submitting your feedback.');window.location='generic.php';</script>";
	exit();
	
}


?>
<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>		
		<title>Category</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<style>
	ol {
    counter-reset: li; /* Initiate a counter */
    list-style: none; /* Remove default numbering */
    *list-style: decimal; /* Keep using default numbering for IE6/7 */
    font: 16px 'Comic Sans MS', 'lucida sans';
	
    padding: 0;
    margin-bottom: 4em;
	margin-left: 1em;
	
    
}
	.rectangle-list a{
    position: relative;
    display: block;
    padding: .4em .4em .4em .4em;
    
    background: #505050;
    color: white;
    text-decoration: none;
    transition: all .3s ease-out;   
}

.rectangle-list a:hover{
    background: #e74c3c;
}   

.rectangle-list a:after{
    position: absolute; 
    content: '';
    border: .5em solid transparent;
    left: -1em;
    top: 50%;
    margin-top: -.5em;
    transition: all .3s ease-out; 
	background:#fa8072	;
	
}

.rectangle-list a:hover:after{
    left: -.5em;
    border-left-color: #fa8072;             
}   
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
  <!-- Font Awesome -->
  
 
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	
		
	</head>
	<body class="subpage" style="background-image:url(images/bg1.jpg);background-size: 100% 1500px;
	background-repeat: no-repeat">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="generic.php">Grow <span>to LEARN</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
	
						<li><a href="Sakina/test.php">Test</a></li>
					<li><a href="generic.html">Feedback Form</a></li>
					
					<li><a href="index.php">Logout</a></li>
				</ul>
			</nav>
			<div>
				</br> </br>
			</div>

				<section id="four" >
				<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box"  style="font-family:FontAwesome;font-size:18px">
							<div class="content" >
								<b><h2 class="align-center" style="text-decoration:bold">Growing Feedback</h2></b>
								
									
								<hr/>
								<form action="feedback.php" method="post">
									<div class="field half first">
										<label for="name" style="font-size:22px">Name</label>
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email" style="font-size:22px">Email</label>
										<input name="email" id="email" style="color:black" type="email" placeholder="Email" value=<?php echo $_SESSION['status'];?>>
									</div>
									
									<div class="field" >
										<label for="message" style="font-size:22px">Message</label>
										<textarea style="font-family:FontAwesome;font-size:20px;color:black" name="message" id="message" rows="4" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" id="feedback" type="button"></li>
										<input type="submit" id="send" name="submit">
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; 2016-2017 by Grow&trade; Technologies. All Rights Reserved
						</br> </br>
						Contact Us : SAT2017@grow.com
					</div>
				</div>
			</footer>
			</section>
		

		<!-- Four -->
				

<div class="inner" >
	
<section>

</section>

					
	

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			
			
<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/validation.js"></script>
<script>
$(document).ready(function(){
	$('#send').hide();
	
})
	$('#feedback').click(function(){
			
			var a =validateAlpha($('#name').attr('id'));
			var b =validateEmail($('#email').attr('id'));
			var c =validateAddress($('#message').attr('id'));
			
			if(a&&b&&c)
			{
				$('#send').trigger("click");
			}
			
		});	
</script>
	</body>
</html>

