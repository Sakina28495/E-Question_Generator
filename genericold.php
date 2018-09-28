<?php
include("Sakina/includes/database.php");


?><!DOCTYPE HTML>
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
				<div class="logo"><a href="index.html">Grow <span>to LEARN</span></a></div>
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
			<div>
				</br> </br>
			</div>

				<section id="four" >
				<div class="col-md-12" align="center" style="padding-left:30pt">
	
<?php
		
	
		$query="select distinct catName,catId from category";
		$runquery=mysqli_query($con,$query) or die(mysqli_errno($con));
		$i=0;
		while($result =mysqli_fetch_array($runquery)){
			$i+=1;
			$cat = $result['catName'];
			$catId=$result['catId'];
			$query="select qTypeId,questionType from questiontype where catId ='$catId' limit 4";
			$runquery2=mysqli_query($con,$query);
			?>
			
			<div class="col-md-6" >
			
           	<div class="panel panel-default col-md-8 <?php echo "d".$i;?> ">	
			<div class="panel-heading" ><?php echo $cat; ?></div>
			
			<div class="panel-body">
			
			<?php
			while($result2 = mysqli_fetch_array($runquery2)){
          		$qType=$result2['questionType'];
				$qTypeId=$result2['qTypeId'];
					echo ('<ol class="rectangle-list">
						<li><a href="Sakina/practice.php?qType='.$qTypeId.'">'.$qType.'</a></li>
						                   
					</ol>');
					
					}?>
					
    			
    			</div>
				
    			
  			</div>
		</div>
		
	
	<?php } ?>
	
	</div>
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
<script>
	$(document).ready(function(){
		var x=<?php echo $i;?>;
		for(i=1;i<=x;i++){
			if(i%2==0){
				$('.d'+i).addClass("pull-right");
			}
		}
		
	})
</script>
	</body>
</html>