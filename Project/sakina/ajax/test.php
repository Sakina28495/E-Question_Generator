<?php
include("../includes/database.php");
$choice=$_POST['choice'];
switch($choice){
case 'test':
		$output=array();
			$catId=$_POST['catId'];
			$limit=$_POST['limit'];

			$query="
					select  questions.qId,questions.question,
					qoptions.option1,qoptions.option2,qoptions.option3,qoptions.option4,questions.qAnswer,
					questions.qType,questiontype.catId
					from questions inner JOIN qoptions on questions.optionId=qoptions.optionId 
					inner join questiontype on questions.qType=questiontype.qTypeId where questiontype.catId='$catId'  ORDER BY RAND() LIMIT $limit
					";
			$runquery=mysqli_query($con,$query) or die (mysqli_error($con));
			while($result=mysqli_fetch_array($runquery)){
				$output[]=$result;
			}
			header("Content-type: text/x-json");
			echo json_encode($output);

break;
		
	case 'save':
			$catId=$_POST['catId'];
			$limit=$_POST['limit'];
			$userId=$_POST['userId'];
			$marks=$_POST['marks'];
			$query="insert into usertest (userId,testId,totalQuestions,marks) values('$userId','$catId','$limit','$marks')";
			$runquery=mysqli_query($con,$query) or die(mysqli_errno($con));
			
		break;

		
	case 'qType':
			$output=array();
			$catId=$_POST['qTypeId'];
			

			$query="
					select  questions.qId,questions.question,
					qoptions.option1,qoptions.option2,qoptions.option3,qoptions.option4,questions.qAnswer,
					questions.qType,questiontype.catId
					from questions inner JOIN qoptions on questions.optionId=qoptions.optionId 
					inner join questiontype on questions.qType=questiontype.qTypeId 
					where questiontype.qTypeId='$catId'  ORDER BY RAND() LIMIT 40";
			
			$runquery=mysqli_query($con,$query) or die (mysqli_error($con));
			while($result=mysqli_fetch_array($runquery)){
				$output[]=$result;
			}
			header("Content-type: text/x-json");
			echo json_encode($output);
		break;
}

?>