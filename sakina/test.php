<?php
	include("includes/database.php");
?>

<!doctype html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<title>Test</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="../width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body style="margin-top:50px;background-image:url(../images/pic03.jpg)">
		
	
	<form class=" form-horizontal" role="form" autocomplete="off" id="testform" action="onlinetest.php" method="get"
	
	style="margin-top:200px">
	<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.html">Grow <span>to LEARN</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>
				
				<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="Sakina/test.php">Test Yourself</a></li>
					<li><a href="generic.html">Feedback Form</a></li>
				
				</ul>
			</nav>
			
			<section id="four" >
				<div class="col-md-12" align="center" style="padding-left:30pt">
		
								
					<div class="form-group no-margin"  >
							<div class="row" align="center">
								<div class="col-md-4">
									<label for="testname" class="control-label" style="color:white;font-size:15pt">Choose a test</label>
									<select name="testname" id="testname" class="form-control" style="margin-left: 5px">
										<option selected value=""></option>
										<?php
											$query="select * from category";
											$runquery=mysqli_query($con,$query);
											if(mysqli_num_rows($runquery)>0){
												while($result=mysqli_fetch_array($runquery)){
													?>
											<option value="<?php echo $result['catId'];?>"><?php echo $result['catName'];?></option>	
												<?php }
											}
										?>
									</select>
								</div>
								
							
									
							<table>
								<tr>
									<td>
										</br>
									</td>
								</tr>
							</table>
							
								
								<div class="col-md-4" style="">
									<label for="qnumbers" class="control-label"style="color:white;font-size:15pt" >Number of question</label>
									<select name="qnumbers" id="qnumbers" class="form-control" style="margin-left: 5px">
										<option value="" selected></option>
										<option value="10">10</option>
										<option value="15">15</option>
										<option value="20">20</option>
									</select>
								</div>
								
											
							<table>
								<tr>
									<td>
										</br>
									</td>
								</tr>
							</table>
								<div class="col-md-2">
										<input type="button" id="check" style="margin-top:42px;margin-left:200px"  class="btn btn-primary form-control" value="GO">
								</div>
						</div>
						   
						   	
					</div>
				</form>
	
	

</body>

	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/validation.js"></script>
<script>
$(document).ready(function(){

   $( "#check" ).click(function() {
	 	var x=validateQuestion($('#testname').attr('id')) ;
	   	var y=validateQuestion($('#qnumbers').attr('id')) ;
	   if(x&&y){
		   $('#testform').submit();
		   
	   }
   });

}); 			
			
	
</script>
</html>