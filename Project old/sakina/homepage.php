<?php
include("includes/database.php");


?>


<!doctype html>


<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	ol {
    counter-reset: li; /* Initiate a counter */
    list-style: none; /* Remove default numbering */
    *list-style: decimal; /* Keep using default numbering for IE6/7 */
    font: 15px 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}
	.rectangle-list a{
    position: relative;
    display: block;
    padding: .4em .4em .4em .8em;
    *padding: .4em;
    background: #ddd;
    color: #444;
    text-decoration: none;
    transition: all .3s ease-out;   
}

.rectangle-list a:hover{
    background: #eee;
}   

.rectangle-list a:after{
    position: absolute; 
    content: '';
    border: .5em solid transparent;
    left: -1em;
    top: 50%;
    margin-top: -.5em;
    transition: all .3s ease-out;               
}

.rectangle-list a:hover:after{
    left: -.5em;
    border-left-color: #fa8072;             
}   
	</style>
	
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  
 
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body>


	
	
	<div class="col-md-8">
	
<?php
		
	
		$query="select distinct catName,catId from category";
		$runquery=mysqli_query($con,$query) or die(mysqli_errno($con));

		while($result =mysqli_fetch_array($runquery)){
			$cat = $result['catName'];
			$catId=$result['catId'];
			$query="select qTypeId,questionType from questiontype where catId ='$catId' limit 4";
			$runquery2=mysqli_query($con,$query);
			?>
			<div class="col-md-5">
           	<div class="panel panel-success">	
			<div class="panel-heading"><?php echo $cat;?></div>
			<div class="panel-body">
			<?php
			while($result2 = mysqli_fetch_array($runquery2)){
          		$qType=$result2['questionType'];
				$qTypeId=$result2['qTypeId'];
					echo ('<ol class="rectangle-list">
						<li><a href="practice.php?qType='.$qTypeId.'">'.$qType.'</a></li>
						                   
					</ol>');
					}?>
    			
    			</div>
    			
  			</div>
		</div>
	
	<?php } ?>
	
	</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>

</body>
</html>