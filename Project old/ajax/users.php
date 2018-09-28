<?php

function throw_ex($ex){
	throw new Exception($ex);
}
	
require_once('../includes/database.php');
include('../includes/validation.php');
require('../includes/mail/phpmailer/PHPMailerAutoload.php');

$output=array();
$data=json_decode(file_get_contents("php://input"));
$choice=$data->btnVal;

switch($choice){

case 'read':
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
		

				



case 'Add':
				try{
					mysqli_autocommit($con,false);	
						
					$fName=validateAlpha($data->fName) or throw_ex("Invalid First Name");
					$lName=validateAlpha($data->lName) or throw_ex("Invalid Last Name");
					$email=validateEmail($data->email) or throw_ex("Invalid Email Id");
					$mobile=validateMobile($data->mobile) or throw_ex("Invalid Mobile Number");
					$privilege=validatePrivilege($data->privilege) or throw_ex("Invalid Privileges");
					$tempPwd=combiKey();
					$query="select userId from userlogin where userId='$email'";
					$runquery=mysqli_query($con,$query)or throw_ex(mysqli_error($con));
					if(mysqli_num_rows($runquery)>0){
						throw_ex("Email-Id already exists");
					}
					$query="insert into userlogin(userId,password,privilege,status)values('$email','$tempPwd','$privilege','pending')" ;
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
					$query="insert into userdata(fName,lName,emailid,mobile) value('$fName','$lName','$email','$mobile')";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							
					mysqli_commit($con);
					sendmail($email,$fName,$lName,$tempPwd);
                    
					echo json_encode(array("Data Saved Successfully",userStat($con)));
					
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
						
					$catName=validateAlpha($data->subCategoryName) or throw_ex("Enter a valid category");
					$id=$data->id;
					$catId=$data->catList;
					$query="update questiontype set questiontype='$catName',catId='$catId' where qTypeId='$id'";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));

							echo "Record Updated Successfully";
							exit();

				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ("Error Updating data \n".$ex->getMessage());
					exit();
				}
		
			break;
		
		
	case 'userStat':echo json_encode(userStat($con));
					break;
					
}//end of switch
function userStat($con){
	
	$query="SELECT SUM(CASE WHEN `status`='pending' THEN 1 ELSE 0 END) as pending,	
       						SUM(CASE WHEN `status`='active' THEN 1 ELSE 0 END) as active,
							SUM(CASE WHEN `status`='inactive' THEN 1 ELSE 0 END) as inactive
							from userlogin";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
						while($row=mysqli_fetch_array($runquery))
						{
							$output[]=$row;
						}	
					return($output);
					break;
}

function sendmail($email,$fName,$lName,$tempPwd){
		$message = '<html><head>
           <title>Email Verification</title>
           </head>
           <body>';
			$message .= '<h3>Hi ' . $fName .' '.$lName. '!</h3>';
			
			$message .= '<p>Team Grow welcome you aboard. To activate your account <a href="localhost/Project/login.php?id=' . base64_encode($email) . '&token='.base64_encode($tempPwd).'">click here</a>';
			$message .= '<h3>User Id:  ' . $email .'</h3>';
			$message .= '</body></html>';
			
					$mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = "teamfromgrow@gmail.com";

                    $mail->Password = "sat@christ";

                    $mail->setFrom('from@example.com', 'First Last');

                    $mail->addAddress($email);

                    $mail->Subject = "GROW-Verification";

                    $mail->msgHTML($message);

                   if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                         echo $error;
                    }	
	
	
}

?>