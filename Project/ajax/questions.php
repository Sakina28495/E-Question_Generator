<?php

function throw_ex($ex){
	throw new Exception($ex);
}
	
require_once('../includes/database.php');
include('../includes/validation.php');
$output=array();
$data=json_decode(file_get_contents("php://input"));
$choice=$data->btnVal;

switch($choice){

case 'readTypes':
				try{
						
					
					$query="select * from questiontype left join category on questiontype.catId=category.catId ";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							if(mysqli_num_rows($runquery)>0){
								while($result=mysqli_fetch_array($runquery)){
									$output[]=$result;
								}
							}
					echo json_encode($output);
					exit();
				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ($ex->getMessage());
					exit();
				}
		
			break;
		

	
case 'read':
				try{
						
					
					$query="select questions.*, questiontype.questionType, qoptions.option1,qoptions.option2,qoptions.option3,qoptions.option4 from questions inner join questiontype on questions.qType=questiontype.qTypeId inner join qoptions on questions.optionId=qoptions.optionId";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							if(mysqli_num_rows($runquery)>0){
								while($result=mysqli_fetch_array($runquery)){
									$output[]=$result;
								}
							}
					echo json_encode($output);
					exit();
				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ($ex->getMessage());
					exit();
				}
		
			break;

case 'Add':
				try{
					mysqli_autocommit($con,false);	
					
					$qType=validateTitle($data->qType)or throw_ex("Enter a valid question type");
					$question=validateAddress($data->questions)or throw_ex("Enter a valid question");
					$option1=validateChoice($data->option1)or throw_ex("Option 1 is invalid");
					$option2=validateChoice($data->option2)or throw_ex("Option 2 is invalid");
					$option3=validateChoice($data->option3)or throw_ex("Option 3 is invalid");
					$option4=validateChoice($data->option4)or throw_ex("Option 4 is invalid");
					$answer=validateChoice($data->qAnswer)or throw_ex("Answer is invalid");
					
					$query="insert into qoptions (option1,option2,option3,option4) values('$option1','$option2','$option3','$option4')";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
					$optionId=mysqli_insert_id($con);	
					$query="insert into questions(qType,question,qAnswer,optionId) values('$qType','$question','$answer','$optionId')";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
					mysqli_commit($con);
					echo "Data Saved Successfully";
					
					exit();

				}catch(Exception $ex){
					mysqli_rollback($con);
					header('HTTP/1.1 404 ');
					echo ("Error Saving data \n".$ex->getMessage());
					exit();
				}
		
			break;
		
		
case 'Update':
				try{
					mysqli_autocommit($con,false);	
					$qId=validateTitle($data->qId)or throw_ex("Error saving data");
					$qType=validateTitle($data->qType)or throw_ex("Enter a valid question type");
					$optId=validateTitle($data->optId)or throw_ex("Error saving data");
					$question=validateAddress($data->questions)or throw_ex("Enter a valid question");
					$option1=validateChoice($data->option1)or throw_ex("Option 1 is invalid");
					$option2=validateChoice($data->option2)or throw_ex("Option 2 is invalid");
					$option3=validateChoice($data->option3)or throw_ex("Option 3 is invalid");
					$option4=validateChoice($data->option4)or throw_ex("Option 4 is invalid");
					$answer=validateChoice($data->qAnswer)or throw_ex("Answer is invalid");
					
					$query="update qoptions set option1='$option1',option2='$option2',option3='$option3',option4='$option4' where optionId='$optId'";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
					$query="update questions set qType='$qType',question='$question',qAnswer='$answer',optionId='$optId' where qId='$qId'";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
					mysqli_commit($con);
					echo "Record Updated Successfully";
					
					exit();

				}catch(Exception $ex){
					mysqli_rollback($con);
					header('HTTP/1.1 404 ');
					echo ("Error Saving data \n".$ex->getMessage());
					exit();
				}
		
			break;
		
		
	case 'catId':
			try{
						
					$query="SELECT catName FROM category INNER JOIN questiontype ON category.catId= questiontype.catId where questiontype.qTypeId='$data->id'"; 
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							if(mysqli_num_rows($runquery)>0){
								while($result=mysqli_fetch_array($runquery)){
									$catName=$result;
								}
							}
					echo json_encode($catName);
					exit();
				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ($ex->getMessage());
					exit();
				}
		
			break;
		
		
						
					
}//end of switch

?>