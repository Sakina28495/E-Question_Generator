
<?php
function validateAlpha($name)
	{
		
		$name=ucwords(strips($name));
		if(!preg_match('/^[a-z\s]*$/i',$name)||$name=="" || strlen($name)<3|| strlen($name)>30)
			{
				return false ;
			}
			return $name;
	}

function validateTitle($number)
	{
		$number=ltrim($number,'0');
		$number=strips($number);
		$number=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $number)));
		if(!preg_match('/^[0-9]*$/',$number) || strlen($number)<1 || strlen($number)>5)
			{
				return false;
			}
			return $number;
	}

function validateChoice($element)
	  	{
			$element=ucwords(strips($element));
			if(strlen($element)<1 || $element=="" || strlen($element)>50 )
				{
					return false;
				}
				return $element;
		}

function validatePassword($element)
	  	{
			$element=strips($element);
			if(strlen($element)<8|| $element=="")
				{
					return false;
				}
				return $element;
		}
				
function validateGender($gender)
	{
		
		$gender=strips($gender);
		
		
		if(($gender!="Male" && $gender!="Female") || $gender=="")
			{
				return false;
			}
			return $gender;
	}

function validatePrivilege($gender)
	{
		
		$gender=ucwords(strips($gender));
		
		if($gender=="High" || $gender=="Medium" || $gender=="Low" || $gender=="Custom")
			{
				
				return $gender;
			}
			return false;
	}
	
	function validateMobile($number)
	{
		$number=ltrim($number,'0');
		$number=strips($number);
		$number=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $number)));
			if(!preg_match('/^[0-9]*$/',$number)||$number==0 || strlen($number)<10 || strlen($number)>10)
			{
				return false;
			}
			return $number;
	}
	
	
	function validatePhone($number)
	{
		$number=ltrim($number,'0');
		$number=strips($number);
		$number=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $number)));
		if(!preg_match('/^[0-9]*$/',$number) || strlen($number)<8 || strlen($number)>15)
			{
				return false;
			}
			return $number;
	}
	
	function validatePincode($number)
	{
		$number=ltrim($number,'0');
		$number=strips($number);
		
			if(!preg_match('/^[0-9]*$/',$number)||$number==0 || strlen($number)<6 || strlen($number)>6)
			{
				return false;
			}
			return $number;
	}
	
	function validateDate($date)
	{
		$date=strips($date);
		if($date==""){return false;}
		$date = explode('-',$date);
		$date = $date[2].'-'.$date[1].'-'.$date[0];		
		
		if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date) || $date=="")
		{
			return false;
		}
		return $date;
	}
	
	 function validateImage($image) 
      {
       	$image=ucwords(strips($image));
		
		if(!preg_match("/(\.jpg|\.png|\.gif|\.jpeg)$/i",$image) || $image=="") 
         {
           return false;
		 }
		return $image;
      }
	  
	  function validateAddress($address)
	  	{
			$address=ucwords(strips($address));
			if(strlen($address)<10 || $address=="" || strlen($address)>500 || preg_match('/^[0-9]*$/',$address))
				{
					return false;
				}
				return $address;
		}

		function validateAlphaNum($element)
	  	{
			$element=ucwords(strips($element));
			if(strlen($element)<4 || $element=="" || strlen($element)>20 || preg_match('/^[0-9]*$/',$element))
				{
					return false;
				}
				return $element;
		}
		
		function validateEmail($email)
		{
			$email=strips($email);
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) 
				{
				 return $email; 
				} 
			else 
			{
			  return false;
			}
 		}
		

function validateIdCard($proof)
{
	$proof=strips($proof);
	if($proof!="Adhaar Card" && $proof!="Driving License" && $proof!="Election Card" && $proof!="Pancard" && $proof!="Passport" && $proof!="Ration Card" )
	{
		return false;
	}
	return $proof;
}

function validateIdNumber($number)
{
	$number=ucwords(strips($number));
	if(strlen($number)<3 || $number=="" || strlen($number)>50)
		{
			return false;
		}
		return $number;
}

function validateDesignation($designation)
{
	$designation=strips($designation);
	if($designation!="Manager" && $designation!="ServiceRep" && $designation!="Supervisor" && $designation!="Workers")
			{
				return false;
			}
			return $designation;
	
}
function validateSalaryType($salary)
{
	$salary=strips($salary);
	if($salary!="fixedSalary" && $salary!="salInc" && $salary!="incentive")
			{
				return false;
			}
			return $salary;
}
function validateBasicSalary($basic)
{
	$basic=strips($basic);
	$basic=ltrim($basic,'0');
		$basic=strips($basic);
		
			if(!preg_match('/^[0-9]*$/',$basic)|| $basic=="" || strlen($basic)<2 || strlen($basic)>6)
			{
				return false;
			}
			return $basic;
}
function validateIncentive($incentive)
{
	
	$incentive=ltrim(strips($incentive),"0");
	
	if($incentive<1)
		{

			$incentive="0".$incentive;
		}
	
	if(!preg_match('/^[0-9]*(\.\d{1})?\d{0,1}$/',$incentive)|| $incentive=="" || strlen($incentive)<1 || strlen($incentive)>5)
			{
				return false;
			}
		return $incentive ;
	
}

function validateVehicleState($name)
	{
		
		$name=strtoupper(strips($name));
		if(!preg_match('/^[a-z\s]*$/i',$name)||$name=="" || strlen($name)<2|| strlen($name)>2)
			{
				return false ;
			}
			return $name;
	}
function validateRto($element)
	  	{
			$element=strtoupper(strips($element));
			if(strlen($element)<2 || $element=="" || strlen($element)>4 || preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/',$element))
				{
					return false;
				}
				return $element;
		}
function validateVehicleNumber($number)
	{
		
		$number=strips($number);
		
			if(!preg_match('/^[0-9]*$/',$number)||$number==0 || strlen($number)<1 || strlen($number)>4)
			{
				return false;
			}
			return $number;
	}

	
	function strips($element)
	{
		
		$element=htmlspecialchars($element);
		$element=stripslashes($element);
		$element=trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $element)));
		$element = str_replace('&amp;', '&', $element);
		return $element;
	}
	
function validateLeaves($leaves)
{
	$leaves=strips($leaves);
	if($leaves!="1" && $leaves!="2" && $leaves!="3" && $leaves!="4" && $leaves!="5")
	{
		return false;
	}
	return $leaves;
}

function combiKey()
	{
		//set the random id length 
		$random_id_length = 6; 
		
		//generate a random id encrypt it and store it in $rnd_id 
		$rnd_id = crypt(uniqid(rand(),1),"tony"); 
		
		//to remove any slashes that might have come 
		$rnd_id = strip_tags(stripslashes($rnd_id)); 
		
		//Removing any . or / and reversing the string 
		$rnd_id = str_replace(".","",$rnd_id); 
		$rnd_id = strrev(str_replace("/","",$rnd_id)); 
		
		//finally I take the first 10 characters from the $rnd_id 
		$rnd_id = substr($rnd_id,0,$random_id_length); 
		return $rnd_id;
	}
	
	

				

?>