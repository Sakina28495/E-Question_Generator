<?php
session_start();
$_SESSION['status']="";
?>
<html>
	<head>
		<title>Grow</title>
		<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="assets/css/main.css" />
			<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
			
				<div class="logo">
				
				<a href="index.php">Grow <span> to LEARN</span></a></div>
				
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="register1.php">Register</a></li>
					<li><a href="Project/login2.php">Admin - The Boss </a></li>
					
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" data-video="images/banner">
				<div class="inner">
				
					<h1>Grow</h1>
					<p>A Website to help you learn<br />
					and <b style="color:#F3860C">GROW </b></br>
					Never stop Learning because <b style="color:#F3860C"> LIFE </b> never stops Teaching </p>
					<a href="#one" class="button special scrolly">Get Started</a>
				</div>
			</section>

			<!-- One -->
				<section id="one" class="wrapper style2">


					<div class="inner">

						<div>

	<img src="images/nature.png" style="position:absolute;top:120px;padding-left:35px;width:1150px;height:420px" alt="">	 
							<div class="box">

							<div class="grid">
							
							
			 <form  method="post" class="form login" style="position:relative;padding-top:90px;padding-left:58px">

				  <header class="login__header">
					<h3 class="login__title"><b style="color:white">Login</b></h3>
				  </header>

				  <div class="login__body" >
				
					<div class="form__field">
					</br>
				
					  <input type="email" placeholder="Email" name="nm" required>
				
					</div>

					<div class="form__field">
					  <input type="password" placeholder="Password" name="pass" required>
					</div>
					
				  </div>

				  <footer class="login__footer">
					<input type="submit"  name="login1" value="GROW" 
					style="border-bottom-left-radius:1.25em;border-bottom-right-radius:1.25em
				;border-top-right-radius:1.25em;border-top-left-radius:1.25em">
				
					<p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
					</br> </br> </br> </br> </br>
					<div id="x" style="align:left;position:absolute;padding-left:95px">
				<input type="button" value="REGISTER"
				style="padding-bottom:40px;border-bottom-left-radius:1.25em;border-bottom-right-radius:1.25em
				;border-top-right-radius:1.25em;border-top-left-radius:1.25em"
				onclick="window.location.href='register1.php'">
				</div>
				  </footer>

				  
				
				</form> 
		
	</div>	

	  </div>
							
								<div class="image fit">
									
									
									
								</div>
								<div class="content">
									<header class="align-center"></br>
	</br>
	</br>
	</br>
										<h2>About Us</h2>
										<p>Grow to LEARN</p>
									</header>
									<hr />
									<p align="center"> 
							This is a e-Question Generator Website, which would provide users to experience a whole new world
							of learning. Users can be teachers and learners at the same time. They can conduct tests at the 
							same time to evaluate themselves. 
							
							</br></br>	"Live as if you were to die tomorrow. </br> 
							Learn as if you were to live forever"
							</br>
							<i style="padding-left:220pt"> - Gandhi </i>
									</p>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Two -->
				<section id="two" class="wrapper style3">
					<div class="inner">
						<div id="flexgrid">
							<div>
								<header>
									<h3>Amanveer Singh Khera</h3>
								</header>
								<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu</p>
								
							</div>
							<div>
								<header>
									<h3>Sakina Naaz</h3>
								</header>
								<p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed </p>
								
							</div>
							<div>
								<header>
									<h3>Tony Manuel</h3>
								</header>
								<p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
								
							</div>
						</div>
					</div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style2">
					<div class="inner">
						<div class="grid-style">

							<div>
								<div class="box">
									<div class="image fit">
										<img src="images/book.jpg" style="height:380px;width:540px;
										padding-left:70px" alt="" />
									</div>
									<div class="content">
										<header class="align-center">
											<h2>Online Book Store </h2>
											<p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
										</header>
										<hr />
										<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
									</div>
								</div>
							</div>

							<div>
								<div class="box">
									<div class="image fit">
										<img src="images/clock.jpg" style="height:380px;width:540px
										;padding-left:70px" alt="" />
									</div>
									<div class="content">
										<header class="align-center">
											<h2>Time Based Tests</h2>
											<p>mattis sapien pretium tellus venenatis</p>
										</header>
										<hr />
										<p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3">
					<div class="inner">

						<header class="align-center">
							<h1>Contact Us</h1>
							<p>
								<p>
									#78/6 R.K. LUXURY HOMES
									</br>
									HEADQUARTERS,
									</br>
									BANGALORE, KARNATAKA
									</BR>
									560029
									</BR>
								<ul><B>MAIL US :</B> <I>SAT2017@grow.com</I> </ul>
								<ul><B>PING US :</B> <I>grow@facebook.com</I> </ul>
								<ul align="center"><B>CALL US :</B>
								</br><i>
								91-8058800011
								</br>
								91-9461645989
								</br>
								91-9902771821</i>
								</ul>
								</p>
								
							</br>
							
							</p>
						</header>

					</div>
				</section>

			<!-- Footer -->
				<footer id="footer" class="wrapper">
					<div class="inner">
						<section>
							<div class="box"  style="font-family:FontAwesome;font-size:18px">
								<div class="content" >
									<b><h2 class="align-center" style="text-decoration:bold">Growing Feedback</h2></b>
									
										
									<hr/>
									<form action="#" method="post">
										<div class="field half first">
											<label for="name" style="font-size:22px">Name</label>
											<input name="name" id="name" type="text" placeholder="Name">
										</div>
										<div class="field half">
											<label for="email" style="font-size:22px">Email</label>
											<input name="email" id="email" type="email" placeholder="Email">
										</div>
										
										<div class="field" >
											<label for="message" style="font-size:22px">Message</label>
											<textarea style="font-family:FontAwesome;font-size:20px" name="message" id="message" rows="4" placeholder="Message"></textarea>
										</div>
										<ul class="actions align-center">
											<li><input value="Send Message" class="button special" type="submit"></li>
										</ul>
									</form>
								</div>
							</div>
						</section>
						<div class="copyright">
							&copy; 2016-2017 by Grow&trade; Technologies. All Rights Reserved
							</br> </br>
							
						</div>
					</div>
				</footer>

			<!-- Scripts -->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/jquery.scrolly.min.js"></script>
				<script src="assets/js/jquery.scrollex.min.js"></script>
				<script src="assets/js/skel.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/main.js"></script>

		</body>
	</html>

<?php
include('db.php');
	
	if(isset($_POST['login1'])){
	
		$uname=$_POST['nm'];
		$pass=$_POST['pass'];
		
		$query="select Email,Password from users where Email='$uname' and Password='$pass'";
		$runquery=mysqli_query($con,$query) or die(mysqli_error($con));
		$count=mysqli_num_rows($runquery);
		echo $count;
		if($count>0){
			session_start();
			$_SESSION['status']=$uname;
			echo '<script>window.location.replace("generic.php")</script>';
			die();
		}
	else{
		echo '<script>alert("Invalid details")</script>';
	}
		
	
	
	}
?>