var style = document.createElement('style');
style.type = 'text/css';
style.innerHTML = '.error {border-color:red;background:url(./images/icons/fail.png);background-repeat: no-repeat;background-position:right 20px center;background-size: 15px 15px; background-color:#FFF; color:#000;}.success {background:url(./images/icons/success.png);background-repeat: no-repeat;background-position:right 20px center;background-size: 15px 15px;}';
document.getElementsByTagName('head')[0].appendChild(style);


 function validateAddress(element)
{
		 var format =/[^0-9\s]/;
		
		 
		var x=document.getElementById(element);
		x.value=trim(x.value).toLowerCase();
		var y=x.value;
		if(!format.test(y)||y===""||y.length<10 || y.length>200)  
			{ 
				 x.classList.add('error');
				 x.classList.remove("success");
				 return false;
			}  
	 else
	 {
	 	 x.classList.remove("error");
		 x.classList.add('success');
	  	return true;
	 }
}

function validateMobile(mobile){

		trimZero(mobile);
		var x=document.getElementById(mobile);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(letters.test(y)|| y.length<10 || y==="")  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		x.classList.add('success');
		return true;
	 }
}

function validateEmail(emailid)  
	{  
		var x=document.getElementById(emailid);
		x.value=trim(x.value).toLowerCase();
		var y=x.value;
		var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
		
		if(!(mailformat.test(y))||y==="")  
			{  
				x.classList.add('error');
				x.classList.remove("success");
			return false;   
			}  
		else  
		{  
			x.classList.remove('error'); 
			x.classList.add('success');
			return true; 
			
		} 
	}


	

function validateAlpha(element)
{
		 var format =/[^a-zA-Z\s]/;
		
		 
		var x=document.getElementById(element);
		x.value=trim(x.value).toLowerCase();
		var y=x.value;
		if(format.test(y)||y===""||y.length<3 || y.length>20)  
			{ 
				 x.classList.add('error');
				 x.classList.remove("success");
				 return false;
			}  
	 else
	 {
	 	 x.classList.remove("error");
		 x.classList.add('success');
	  	return true;
	 }
}



function validatePincode(pincode)
{
	
	trimZero(pincode);
	var x=document.getElementById(pincode);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(letters.test(y)||y.length<6|| y=="" || y.length>6)  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		x.classList.add('success');
		return true;
	 }
}




function trimZero(field)
{
	
	var x=document.getElementById(field);
	if(x.id=="nac")
	{
		if(x.value==0)
		{
			x.value=0;
		}
		else
		{
			x.value=x.value.replace(/^0+/, '');
		}
		
	}
	else
	{
		x.value=x.value.replace(/^0+/, '');
	}
						
}

function trim(field)
{
	field=field.replace(/(^\s*)|(\s*$)/gi, "").replace(/[ ]{2,}/gi, " ").replace(/\n +/, "\n");
	return field;
}


function validateGender(gender)
{
	 var x=document.getElementById(gender);
	 x.value=trim(x.value);
	 var y=x.value;
	if(y!="Male" && y!="Female" || y=="")
			{
				$(x).addClass('error').removeClass('success');
				return false;
			}
				$(x).addClass('success').removeClass('error');
				return true;
}
function validateQuestion(element)
{
	var x=document.getElementById(element);
	y=x.value;
	if(y=="")
			{
				$(x).addClass('error').removeClass('success');
				return false;
			}
				$(x).addClass('success').removeClass('error');
				return true;
}
