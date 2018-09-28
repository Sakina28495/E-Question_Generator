<?php
	include("../../includes/database.php");
	
		
	
				try{
						
		
					$query="
					select questions.qId,questions.question,
					 (case 
					 	when questions.qAnswer = '1'then qoptions.option1 
						when questions.qAnswer = '2'then qoptions.option2 
					 	when questions.qAnswer = '3'then qoptions.option3 
					 	when questions.qAnswer = '4'then qoptions.option4 end)as qanswer,

					qoptions.option1,qoptions.option2,qoptions.option3,qoptions.option4,
					questiontype.questionType,category.catName from questions 
					inner join questiontype on questions.qType=questiontype.qTypeId 
					inner join qoptions on questions.optionId=qoptions.optionId 
					inner join category on questiontype.catId=category.catId";
					
					
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