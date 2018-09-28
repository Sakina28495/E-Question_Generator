<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Register - Grow to LEARN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="css/font-awesome.css" rel="stylesheet">

		 
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Grow <span>to LEARN</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					
					<li><a href="Project/login2.php">Admin - The Boss</a></li>
				
				</ul>
			</nav>

	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="E-com Login & signup Forms Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->

<!-- //font-awesome icons -->
<!--Google Fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>
<div class="wthree-dot">
	
	<div class="profile">
		<div class="wrap">
			<div class="content-main">
				
			</div>
			<div class="content-main content-main1">
				<div class="w3ls-subscribe" >
					<h4 style="color:#c19615;font-size:18pt;text-decoration:bold">New Customer?</h4>
					<p style="font-size:12pt"> Register and </br>
					<b style="color:#c19615;font-size:18pt;text-decoration:bold">Grow</b> with Us</p>
					
					<form id="loginform" action='register.php' method='post'>
					
						<input type="text" style="color:white !important" id="fname" name="fnm" placeholder="First Name" required="">
						<input type="text" id="lname" style="color:white !important" name="lnm" placeholder="Last Name" required="">
						<input type="email" id="email" style="color:white !important" name="mail" placeholder="Email" required="" unique="">
						<input type="password" id="pass" style="color:white !important" name="pass" placeholder="Password" required="">
						<input type="password" id="cpass" style="color:white !important" name="cpass" placeholder="Confirm Password" required="">
						<input type="button" id="signup" value="Sign Up" 
						style="border-bottom-left-radius:1.25em;
						border-bottom-right-radius:1.25em;
						border-top-left-radius:1.25em
						;border-top-right-radius:1.25em;
						text-align:center; size:35pt"
						>
					</form>
				</div>
			</div>
			<div class="wthree_footer_copy">
				<p>&copy; 2016-2017 by Grow&trade; Technologies. All Rights Reserved</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="js/validation.js"></script>
			<script>
			
			
		$('#signup').click(function(){
			
			var a =validateAlpha($('#fname').attr('id'));
			var b =validateAlpha($('#lname').attr('id'));
			var c =validateEmail($('#email').attr('id'));
			var d =validatename($('#pass').attr('id'));
			
			if(a&&b&&c&&d)
			{
				var x=$('#pass').val();
				var y=$('#cpass').val();
				if(x==y){
					$("#loginform").submit();
				}
				else{alert("Passwords do not match")};
			}
			
		});	
		
</script>



	</body>
</html>