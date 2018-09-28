<?php
	include("includes/database.php");
?>

<!doctype html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		
	
	<form class=" form-horizontal" role="form" autocomplete="off" id="testform" action="onlinetest.php" method="get">
					<div class="form-group no-margin" >
							<div class="row">
								<div class="col-md-3">
									<label for="testname" class="control-label" >Choose a test</label>
									<select name="testname" id="testname" class="form-control" style="padding: 0px">
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
								
								<div class="col-md-2">
									<label for="qnumbers" class="control-label" >Number of question</label>
									<select name="qnumbers" id="qnumbers" class="form-control" style="padding: 0px">
										<option value="" selected></option>
										<option value="10">10</option>
										<option value="20">20</option>
										<option value="30">30</option>
									</select>
								</div>
								
								<div class="col-md-2">
										<input type="button" id="check" style="margin-top: 30px;"  class="btn btn-primary form-control" value="GO">
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