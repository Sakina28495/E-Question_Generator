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

case 'read':
				try{
						
					
					$query="select * from category";
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
					
				}
		
			break;
		

				



case 'Add':
				try{
						
					$catName=validateAlpha($data->categoryName) or throw_ex("Enter a valid category");
					$query="insert into category(catName)values('$catName')";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
							echo "Data Saved Successfully";
							exit();

				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ("Error Saving data \n".$ex->getMessage());

				}
		
			break;
		
		
case 'Update':
				try{
						
					$catName=validateAlpha($data->categoryName) or throw_ex("Enter a valid category");
					$id=$data->id;
					$query="update category set catName='$catName' where catId='$id'";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));

							echo "Record Updated Successfully";

							exit();

				}catch(Exception $ex){
					header('HTTP/1.1 404 ');
					echo ("Error Updating data \n".$ex->getMessage());

				}
		
			break;
		
}//end of switch
echo("not switching");
?>