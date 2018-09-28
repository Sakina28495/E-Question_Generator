<?php

		date_default_timezone_set("Asia/Kolkata");
		$date=date("Y:m:d");
				

$action=$_POST['action'];
switch($action)
{
	/*case "read":

			//$docid=$_POST['vehid'];
				$query="select * from tariff where id='{$_POST['vehid']}'";
						include("../includes/travelsdatabase.php");
						$runquery=mysqli_query($query);
						
												$result=mysqli_fetch_array($runquery);
												header("Content-type: text/x-json");
												$tariff=$result['local_tariff'];	
												$tariff=unserialize($tariff);
												sort($tariff);
												echo json_encode(array($result,$tariff));
												exit();
	
*/

case "createClient":
				
							
							$ctitle=$_POST['cTitle'];
						 	$cname=$_POST['cName'];
							$caddress=$_POST['cAddress'];
							$ccity=$_POST['cCity'];
							$cpincode=$_POST['cPincode'];
							$cstate=$_POST['cState'];
							$cmobile1=$_POST['cMobile1'];
							$cmobile2=$_POST['cMobile2'];
							$cphone=$_POST['cContact'];
							$cemail=$_POST['cEmail'];
							
					
						
							$query="insert into clients(title,name,address,city,pincode,state,mobile1,mobile2,phone,email,date)values('$ctitle','$cname','$caddress','$ccity','$cpincode','$cstate','$cmobile1','$cmobile2','$cphone','$cemail','$date')";
							
							include("../includes/travelsdatabase.php");
							$runquery=mysqli_query($query);
							if (!$runquery) 
								{
									$message  = 'Invalid query: ' . mysqli_error() . "\n";
									die($message);
									exit();
									
								}
							else
								{
									header("Content-type: text/x-json");
									$clientid=mysqli_insert_id();
									$result="Client Saved Successfully";
									echo json_encode(array($result,$clientid));
									exit();
									
								}


case "updateClient":
							$ctitle=$_POST['cTitle'];
						 	$client_id=$_POST['clientid'];
							$cname=$_POST['cName'];
							$caddress=$_POST['cAddress'];
							$ccity=$_POST['cCity'];
							$cpincode=$_POST['cPincode'];
							$cstate=$_POST['cState'];
							$cmobile1=$_POST['cMobile1'];
							$cmobile2=$_POST['cMobile2'];
							$cphone=$_POST['cContact'];
							$cemail=$_POST['cEmail'];
							
					
						
							$query="update clients set title='$ctitle',name='$cname',address='$caddress',city='$ccity',pincode='$cpincode',state='$cstate',mobile1='$cmobile1',mobile2='$cmobile2',phone='$cphone',email='$cemail' where clientId='$client_id'";
							
							include("../includes/travelsdatabase.php");
							$runquery=mysqli_query($query);
							if (!$runquery) 
								{
									$message  = 'Invalid query: ' . mysqli_error() . "\n";
									die($message);
									exit();
									
								}
							else
								{
									header("Content-type: text/x-json");
									//$clientid=mysqli_insert_id();
									$result="Client Saved Successfully";
									echo json_encode(array($result,$client_id));
									exit();
									
								}

case "createAdmin":	
				
				
					$client_id=$_POST['clientid'];
					$adminTitle=$_POST['adminTitle'];
					$adminName=$_POST['adminName'];
					$adminMobile=$_POST['adminMobile'];
					$adminEmail=$_POST['adminEmail'];
					$query="insert into bookingadmin(clientId,adminTitle,adminName,adminContact,adminEmail,adminStatus)values('$client_id','$adminTitle','$adminName','$adminMobile','$adminEmail','active')";
							
							include("../includes/travelsdatabase.php");
							$runquery=mysqli_query($query);
							
							if (!$runquery) 
								{
									$message  = 'Invalid query: ' . mysqli_error() . "\n";
									die($message);
									exit();
									
								}
							else
								{
									$adminId=mysqli_insert_id();
									header("Content-type: text/x-json");
									$query="select * from bookingadmin where adminId='$adminId' ";
									$runquery=mysqli_query($query);
									if(!$runquery){
									$message="Invalid Query".mysqli_error()."\n";
									die($message);
									exit();
									}
									else{
									$result1="Admin Saved Successfully";
									$result2=mysqli_fetch_array($runquery);
									echo json_encode(array($result1,$result2));
									exit();
									}
									
								}
								

case "updateAdmin":
					
					
					$client_id=$_POST['clientid'];
					$adminTitle=$_POST['adminTitle'];
					$adminName=$_POST['adminName'];
					$adminMobile=$_POST['adminMobile'];
					$adminEmail=$_POST['adminEmail'];
					$admin_Id=$_POST['adminId'];
					if(isset($_POST['adminStatus']))
					{
						$query="update bookingadmin set clientId='$client_id',adminTitle='$adminTitle',adminName='$adminName',adminContact='$adminMobile',adminEmail='$adminEmail',adminStatus='{$_POST['adminStatus']}' where adminId='$admin_Id'";
					}
					else
					{
						$query="update bookingadmin set clientId='$client_id',adminTitle='$adminTitle',adminName='$adminName',adminContact='$adminMobile',adminEmail='$adminEmail',adminStatus='active' where adminId='$admin_Id'";
					
					}
							include("../includes/travelsdatabase.php");
							$runquery=mysqli_query($query);
							
							if (!$runquery) 
								{
									$message  = 'Invalid query: ' . mysqli_error() . "\n";
									die($message);
									exit();
									
								}
							else
								{
									
									header("Content-type: text/x-json");
									$query="select * from bookingadmin where adminId='$admin_Id' ";
									$runquery=mysqli_query($query);
									if(!$runquery){
									$message="Invalid Query".mysqli_error()."\n";
									die($message);
									exit();
									}
									else{
									$result1="Admin Updated Successfully";
									$result2=mysqli_fetch_array($runquery);
									$result3="update";
									echo json_encode(array($result1,$result2,$result3));
									exit();
									}
									
								}



case "createSection":
	
						$client_id=$_POST['clientid'];
						$sectionName=$_POST['sectionName'];
						$sectionAddress=$_POST['sectionAddress'];
						$sectionCity=$_POST['sectionCity'];
						$sectionState=$_POST['sectionState'];
						$sectionPincode=$_POST['sectionPincode'];
						$sectionPhone=$_POST['sectionPhone'];
						$addressType=$_POST['copyaddress'];
						
						$query="insert into billingsection(clientId,sectionName,sectionAddress,sectionCity,sectionState,sectionPincode,sectionContact,copyAddress)values('$client_id','$sectionName','$sectionAddress','$sectionCity','$sectionState','$sectionPincode','$sectionPhone','$addressType')";
						include("../includes/travelsdatabase.php");
						$runquery=mysqli_query($query);
						
						if(!$runquery){
							$message  = 'Invalid query: ' . mysqli_error() . "\n";
							die($message);
							exit();
						}
						else{
							$sectionId=mysqli_insert_id();
							header("Content-type: text/x-json");
							$query="select * from billingsection where sectionId='$sectionId' ";
							$runquery=mysqli_query($query);
							if(!$runquery){
								$message="Invalid Query".mysqli_error()."\n";
								die($message);
								exit();
							}
							else{
							$result1="Billing Section Saved Successfully";
							$result2=mysqli_fetch_array($runquery);
							echo json_encode(array($result1,$result2));
							exit();
							}
							
						}
						

case "updateSection":

						$client_id=$_POST['clientid'];
						$sectionName=$_POST['sectionName'];
						$sectionAddress=$_POST['sectionAddress'];
						$sectionCity=$_POST['sectionCity'];
						$sectionState=$_POST['sectionState'];
						$sectionPincode=$_POST['sectionPincode'];
						$sectionPhone=$_POST['sectionPhone'];
						$addressType=$_POST['copyaddress'];
						$sectionId=$_POST['sectionId'];
						
						$query="update billingsection set clientId='$client_id',sectionName='$sectionName',sectionAddress='$sectionAddress',sectionCity='$sectionCity',sectionState='$sectionState',sectionPincode='$sectionPincode',sectionContact='$sectionPhone',copyAddress='$addressType' where sectionId='$sectionId'";
						
						include("../includes/travelsdatabase.php");
						$runquery=mysqli_query($query);
						
						if(!$runquery){
							$message  = 'Invalid query: ' . mysqli_error() . "\n";
							die($message);
							exit();
						}
						else{
							
							header("Content-type: text/x-json");
							$query="select * from billingsection where sectionId='$sectionId' ";
							$runquery=mysqli_query($query);
							if(!$runquery){
								$message="Invalid Query".mysqli_error()."\n";
								die($message);
								exit();
							}
							else{
							$result1="Billing Section Updated Successfully";
							$result2=mysqli_fetch_array($runquery);
							$result3="update";
							echo json_encode(array($result1,$result2,$result3));
							exit();
							}
							
						}







case "createEmployee":

				 	$client_id=$_POST['clientid'];
				 	$empTitle=$_POST['empTitle'];
					$empName=$_POST['empName'];
					$empAddress=$_POST['empAddress'];
					$empCity=$_POST['empCity'];
					$empState=$_POST['empState'];
					$empPincode=$_POST['empPincode'];
					$empPhone=$_POST['empPhone'];
					$empMobile=$_POST['empMobile'];
					$empAltMobile=$_POST['empAltMobile'];
					$empEmail=$_POST['empEmail'];
					
					
					$query="insert into empaddress(clientId,empTitle,empName,empAddress,empCity,empState,empPincode,empPhone,empMobile,empAltmobile,empEmail,empStatus)values('$client_id','$empTitle','$empName','$empAddress','$empCity','$empState','$empPincode','$empPhone','$empMobile','$empAltMobile','$empEmail','active')";
					
						include("../includes/travelsdatabase.php");
						$runquery=mysqli_query($query);
						
						if(!$runquery){
							$message  = 'Invalid query: ' . mysqli_error() . "\n";
							die($message);
							exit();
						}
						else{
							$empId=mysqli_insert_id();
							header("Content-type: text/x-json");
							$query="select * from empaddress where employeeId='$empId' ";
							$runquery=mysqli_query($query);
							if(!$runquery){
								$message="Invalid Query".mysqli_error()."\n";
								die($message);
								exit();
							}
							else{
							$result1="Employee Saved Successfully";
							$result2=mysqli_fetch_array($runquery);
							echo json_encode(array($result1,$result2));
							exit();
							}
							
						}
						
						
						
						

case "updateEmployee":

				 	$client_id=$_POST['clientid'];
				 	$empTitle=$_POST['empTitle'];
					$empName=$_POST['empName'];
					$empAddress=$_POST['empAddress'];
					$empCity=$_POST['empCity'];
					$empState=$_POST['empState'];
					$empPincode=$_POST['empPincode'];
					$empPhone=$_POST['empPhone'];
					$empMobile=$_POST['empMobile'];
					$empAltMobile=$_POST['empAltMobile'];
					$empEmail=$_POST['empEmail'];
					$empId=$_POST['employeeId'];
					if(isset($_POST['employeeStatus']))
					{
						$query="update empaddress set clientId='$client_id',empTitle='$empTitle',empName='$empName',empAddress='$empAddress',empCity='$empCity',empState='$empState',empPincode='$empPincode',empPhone='$empPhone',empMobile='$empMobile',empAltmobile='$empAltMobile',empEmail='$empEmail',empStatus='{$_POST['employeeStatus']}' where employeeId='$empId' ";
					}
					else
					{
						$query="update empaddress set clientId='$client_id',empTitle='$empTitle',empName='$empName',empAddress='$empAddress',empCity='$empCity',empState='$empState',empPincode='$empPincode',empPhone='$empPhone',empMobile='$empMobile',empAltmobile='$empAltMobile',empEmail='$empEmail',empStatus='active' where employeeId='$empId' ";
					}
						include("../includes/travelsdatabase.php");
						$runquery=mysqli_query($query);
						
						if(!$runquery){
							$message  = 'Invalid query: ' . mysqli_error() . "\n";
							die($message);
							exit();
						}
						else{
							
							header("Content-type: text/x-json");
							$query="select * from empaddress where employeeId='$empId' ";
							$runquery=mysqli_query($query);
							if(!$runquery){
								$message="Invalid Query".mysqli_error()."\n";
								die($message);
								exit();
							}
							else{
							$result1="Employee Updated Successfully";
							$result2=mysqli_fetch_array($runquery);
							$result3="update";
							echo json_encode(array($result1,$result2,$result3));
							exit();
							}
							
						}
						
						
case "retrieveClient":
							$client_id=$_POST['clientid1'];
							header("Content-type: text/x-json");
							$queryClient="select * from clients  where clientId='$client_id' ";
							$queryAdmin="select * from bookingadmin where clientId='$client_id'";
							$queryBillingSection="select * from billingsection where clientId='$client_id'";
							$queryEmployee="select * from empaddress where clientId='$client_id'";
							
							include("../includes/travelsdatabase.php");
							
							
							$runQueryClient=mysqli_query($con,$queryClient);
							$runQueryAdmin=mysqli_query($con,$queryAdmin);
							$runQuerySection=mysqli_query($con,$queryBillingSection);
							$runQueryEmployee=mysqli_query($con,$queryEmployee);
							
							if (!$runQueryClient || !$runQueryAdmin || !$runQuerySection ||!$runQueryEmployee) 
								{
									$message  = 'Invalid query: ' . mysqli_error($con) . "\n";
									die($message);
									exit();
									
								}
							else
								{
									//$adminColumn=mysqli_num_fields(mysqli_query("SELECT * from bookingadmin"));
									//$q="SELECT * FROM bookingadmin WHERE clientId='$client_id'";
									//$run=mysqli_query($q);
									//$x=mysqli_num_rows($run);
										
										
									if(mysqli_num_rows($runQueryClient) > 0)
										{
											while($result=mysqli_fetch_array($runQueryClient))
											{
												$clientResultArray[]=$result;
											}
										}
									else
										{
											$clientResultArray[]=false;
										}
									
									if(mysqli_num_rows($runQueryAdmin) > 0)
										{
											$adminColumns=mysqli_num_fields($runQueryAdmin);
											$adminRows=mysqli_num_rows($runQueryAdmin);
											while($result=mysqli_fetch_array($runQueryAdmin))
											{
												$adminResultArray[]=$result;
											}
										}
									else
										{
											$adminResultArray[]=false;
											$adminColumns=false;
											$adminRows=false;
										}
									
									if(mysqli_num_rows($runQuerySection) > 0)
										{
											$sectionColumns=mysqli_num_fields($runQuerySection);
											$sectionRows=mysqli_num_rows($runQuerySection);
											while($result=mysqli_fetch_array($runQuerySection))
											{
												$sectionResultArray[]=$result;
											}
										}
									else
										{
											$sectionResultArray[]=false;
											$sectionColumns=false;
											$sectionRows=false;
										}
										if(mysqli_num_rows($runQueryEmployee) > 0)
										{
											$employeeColumns=mysqli_num_fields($runQueryEmployee);
											$employeeRows=mysqli_num_rows($runQueryEmployee);
											while($result=mysqli_fetch_array($runQueryEmployee))
											{
												$employeeResultArray[]=$result;
											}
										}
									else
										{
											$employeeResultArray[]=false;
											$employeeColumns=false;
											$employeeRows=false;
										}
									
									echo json_encode(array($adminRows,$adminColumns,$sectionRows,$sectionColumns,$employeeRows,$employeeColumns,$clientResultArray,$adminResultArray,$sectionResultArray,$employeeResultArray));
									exit();
									
								}
								
								
case "loadSavedClients":
							$startRow=$_POST['startRow'];//0 10 20
							$clientName=$_POST['clientName'];
							header("Content-type: text/x-json");
							if($clientName=="")
							{
								$query="select clientId,name,address from clients limit $startRow,10";
								//$query="select clientId,name,address from clients ";
								$clientName="";
							}
							else
							{
								$query="select clientId,name,address from clients where name like '%$clientName%' limit $startRow,10";
								$clientName="";
							}
							include("../includes/travelsdatabase.php");
							$runquery=mysqli_query($con,$query);
							
							
								 if(mysqli_num_rows($runquery)==0)
								{
									$rows=0;
									echo json_encode(array($rows));
									exit();
								}
								else
								{
									$rowColumn=mysqli_num_fields($runquery);
										$rows=mysqli_num_rows($runquery)+$startRow;
										while($result=mysqli_fetch_array($runquery))
										{
											$resultArray[]=$result;
										}
										echo json_encode(array($rows,$rowColumn,$resultArray));
										exit();
								}
							
							
							
												

}
								

