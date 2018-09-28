<?php
	include("../../includes/database.php");
	
		
	
				try{
						
		
					$query="
					SELECT usertest.userId,category.catName, usertest.totalQuestions,usertest.marks from usertest inner join category on usertest.testId=category.catId ";
					
					
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							if(mysqli_num_rows($runquery)>0){
								while($result=mysqli_fetch_array($runquery)){
									$output[]=$result;
								}
							}
					
					$json_data = array(
						"data"  => $output
					);
					echo json_encode($json_data);
				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ($ex->getMessage());
					exit();
				}
				
		

	

	



?>