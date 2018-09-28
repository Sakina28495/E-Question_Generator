var style = document.createElement('style');
style.type = 'text/css';
style.innerHTML = '.error {border-color:red;background:url(images/icons/fail.png);background-repeat: no-repeat;background-position:right 20px center;background-size: 15px 15px; background-color:#FFF; color:#000;}.success {background:url(images/icons/success.png);background-repeat: no-repeat;background-position:right 20px center;background-size: 15px 15px;}';
document.getElementsByTagName('head')[0].appendChild(style);

function validatetitle(title){
	
	var x=document.getElementById(title);
	if(x.value==="")
	{
		$(x).addClass('error').removeClass('success');
		return false;
	}
	else
	{
		$(x).addClass('success').removeClass('error');
		
		return true;
	}
}
function validatename(name){
	
	var x=document.getElementById(name);
	x.value=trim(x.value).toLowerCase();
	var y=x.value;
	if( y.length<3 || y==="") 
	{ 
		//x.classList.add('error');
		//x.classList.remove("success");
		$(x).addClass('error').removeClass('success');
		return false;
	}  
	 else
	 {
	 	 $(x).addClass('success').removeClass('error');
	  	return true;
	 }
}

function validateChoice(name){
	
	var x=document.getElementById(name);
	x.value=trim(x.value).toLowerCase();
	var y=x.value;
	if( y.length<1 || y==="") 
	{ 
		//x.classList.add('error');
		//x.classList.remove("success");
		$(x).addClass('error').removeClass('success');
		return false;
	}  
	 else
	 {
	 	 $(x).addClass('success').removeClass('error');
	  	return true;
	 }
}
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


	
function validateUrl(url)
{
	
var urlformat =/^(?:(?:https?|ftp):\/\/)(?:\S+(?::\S*)?@)?(?:(?!10(?:\.\d{1,3}){3})(?!127(?:\.\d{1,3}){3})(?!169\.254(?:\.\d{1,3}){2})(?!192\.168(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]+-?)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/[^\s]*)?$/i;
var x=document.getElementById(url);
x.value=trim(x.value).toLowerCase();
		var y=x.value;
		
		if(!(urlformat.test(y))||y==="")  
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

function validatePhone(phone)
{
		var x=document.getElementById(phone);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(letters.test(y)|| y===""||y.length<8||y.length>15)  
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

function validateAltNumber(phone)
{
		var x=document.getElementById(phone);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(((y!=="")&&(letters.test(y)||y.length<8||y.length>15)))  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		//x.classList.add('success');
		return true;
	 }
}

function validateAltMobile(phone)
{
		
		var x=document.getElementById(phone);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(((y!=="")&&(letters.test(y)||y.length<10||y.length>10)))  
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

function validateBattaAmount(amount)
{
		
		trimZero(amount);
		var x=document.getElementById(amount);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(letters.test(y)|| y==""||y.length<1|| y==0)  
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

function validateVehicleNumber(number)
{
		var x=document.getElementById(number);
		var letters =/[^0-9]/;
		x.value=trim(x.value);
		var y=x.value;
		if(letters.test(y)|| y==""||y.length<1|| y==0)  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		
		return true;
	 }
}
function validateVehicleRto(rto)
{
		var x=document.getElementById(rto);
		var letters =/[^a-zA-Z0-9]/;
		x.value=trim(x.value).toUpperCase();
		var y=x.value;
		if(letters.test(y)|| y==""||y.length<2|| y==0)  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		
		return true;
	 }
}

function validateVehicleState(state)
{
		var x=document.getElementById(state);
		var letters =/[^a-zA-Z]/;
		x.value=trim(x.value).toUpperCase();
		var y=x.value;
		if(letters.test(y)|| y==""||y.length<2)  
     {  
	   	
		x.classList.add('error');
		x.classList.remove("success");
		return false;  
     }  
	 else
	 {
	 	x.classList.remove("error");
		
		return true;
	 }
}




	
 function validateBattaTime(buttonId) {
	if(buttonId=="insertLocalBatta")
		{
			var x=$('#timeFrom').val();
			var y=$('#timeTo').val();
			var timeFrom,timeTo=null;
			if(x=="")
			{
				
				$('#timeFrom').addClass('error');
				$('#timeFrom').removeClass("success");
			}
			else
			{
				$('#timeFrom').removeClass('error');
				$('#timeFrom').addClass("success");
				timeFrom= $('#localBattaPopup .start').timepicker('getTime', new Date()).toLocaleTimeString();
				
			}
			 if(y=="")
			{
				$('#timeTo').addClass('error');
				$('#timeTo').removeClass("success");
			}
			else
			{
				$('#timeTo').removeClass('error');
				$('#timeTo').addClass("success");
				timeTo= $('#localBattaPopup .end').timepicker('getTime', new Date()).toLocaleTimeString();
			}
			
			var letters=/^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9]) (AM|PM)?$/
		
		
		if(!letters.test(timeFrom))
			{
				$('#timeFrom').addClass('error');
				$('#timeFrom').removeClass("success");
				return false;  
			}
			else
			{
				$('#timeFrom').removeClass('error');
				$('#timeFrom').addClass("success");
				return true;
				
			}
			
			if(!letters.test(timeTo))
			{
				$('#timeTo').addClass('error');
				$('#timeTo').removeClass("success");
				return false;  
			}
			else
			{
				$('#timeTo').removeClass('error');
				$('#timeTo').addClass("success");
			}
		}
		
		else
		{
			var x=$('#osTimeFrom').val();
			var y=$('#osTimeTo').val();
			var osTimeFrom,osTimeTo=null;
			if(x=="")
			{
				
				$('#osTimeFrom').addClass('error');
				$('#osTimeFrom').removeClass("success");
			}
			else
			{
				$('#osTimeFrom').removeClass('error');
				$('#osTimeFrom').addClass("success");
				timeFrom= $('#outstationBattaPopup .start').timepicker('getTime', new Date()).toLocaleTimeString();
				
			}
			 if(y=="")
			{
				$('#osTimeTo').addClass('error');
				$('#osTimeTo').removeClass("success");
			}
			else
			{
				$('#osTimeTo').removeClass('error');
				$('#osTimeTo').addClass("success");
				timeTo= $('#outstationBattaPopup .end').timepicker('getTime', new Date()).toLocaleTimeString();
			}
			
			var letters=/^([0-1]?[0-9]|2[0-4]):([0-5][0-9])(:[0-5][0-9]) (AM|PM)?$/
		
		
		if(!letters.test(timeFrom))
			{
				$('#osTimeFrom').addClass('error');
				$('#osTimeFrom').removeClass("success");
				return false;  
			}
			else
			{
				$('#osTimeFrom').removeClass('error');
				$('#osTimeFrom').addClass("success");
				return true;
				
			}
			
			if(!letters.test(timeTo))
			{
				$('#osTimeTo').addClass('error');
				$('#osTimeTo').removeClass("success");
				return false;  
			}
			else
			{
				$('#osTimeTo').removeClass('error');
				$('#osTimeTo').addClass("success");
			}
		}
		
	
 }
 
function validateBattaInterval(interval1,interval2)
{
		
		trimZero(interval1);
		trimZero(interval2);
		var a=document.getElementById(interval1);
		var b=document.getElementById(interval2);
		
		var letters =/[^0-9]/;
		a.value=trim(a.value);
		b.value=trim(b.value);
		var x=a.value;
		var y=b.value;
		var flag1,flag2,flag3=false;
	
		if(letters.test(x)||x==0)  
			 {  
				
				a.classList.add('error');
				a.classList.remove("success");
				flag1=false;
			 }  
		else
			 {
				a.classList.remove("error");
				a.classList.add('success');
				flag1=true;
			 }
	 
	 	if(letters.test(y)||y==0)  
			 {  
				
				b.classList.add('error');
				b.classList.remove("success");
				 flag2=false;
			 }  
		else
			 {
				b.classList.remove("error");
				b.classList.add('success');
				flag2=true;
			 }
	 
	
	if(flag1==true && flag2==true && flag3==true)
		{
			return true;
		}
	
	 
}

function validateAmount(amount)
{
		var letters = /^\d*(\.\d{1})?\d{0,1}$/;
		
		var x=document.getElementById(amount);
		if(x.id==="nac")
		{
				trimZero(amount);
				x.value=trim(x.value);
				var y=x.value;
				
					if(!letters.test(y)|| y===""||y.length<1)
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
		
		else if(x.id==="localIncentive" || x.id==="osIncentive")
		{
			   x.value=trim(x.value);
			   
			   var y=x.value;
			if(y.length>0 && y==0)
			{
					trim(amount);
					x.value=0;
					x.classList.remove("error");
					x.classList.add('success');
					return x;
			}
			else{
				
				trimZero(amount);
				if(!letters.test(y)|| y===""||y.length<1|| y>100)
				 {  
					
					x.classList.add('error');
					x.classList.remove("success");
					return false;  
				 }  
				 else
				 {
					if(x.value<1){
						x.value="0"+x.value;
					}
					x.classList.remove("error");
					x.classList.add('success');
					return x;
				 }
			}
		}
		
		else if(x.id==="noLeaveBonus")
		{
			 
			 
			   x.value=trim(x.value);
			   
			   var y=x.value;
			if(y.length>0 && y==0)
			{
					trim(amount);
					x.value=0;
					x.classList.remove("error");
					x.classList.add('success');
					return x;
			}
			else{
				
					trimZero(amount);
					if(!letters.test(y)|| y===""||y.length<1|| y>9999)
					 {  
						
						x.classList.add('error');
						x.classList.remove("success");
						return false;  
					 }  
					 else
					 {
						if(x.value<1){
							x.value="0"+x.value;
						}
						x.classList.remove("error");
						x.classList.add('success');
						return x;
					 }
			}
		}	
			
		else
		{
				trimZero(amount);
				x.value=trim(x.value);
				var y=x.value;
			
				if(!letters.test(y)|| y===""||y.length<2|| y==0)
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

function validateDate(date)
{
  var x = document.getElementById(date);
  y=x.value;
  
  if(y == ''){
   	x.classList.add('error');
	x.classList.remove("success");
	return false;  
  }
   
  var format = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; 
  var dtArray = y.match(format); 

  if (!y.match(format)){
	  x.classList.add('error');
	  x.classList.remove("success");
	  
	  return false;  
  }
    
 //check dd-mm-yyy
 dtDay= dtArray[1];
 dtMonth = dtArray[3];
 dtYear = dtArray[5];
 
 /*check mm-dd-yyy
 dtDay= dtArray[3];
 dtMonth = dtArray[1];
 dtYear = dtArray[5];*/

  if (dtMonth < 1 || dtMonth > 12){
  	  x.classList.add('error');
	  x.classList.remove("success");
      return false;
  }
  else if (dtDay < 1 || dtDay> 31){
  	  x.classList.add('error');
	  x.classList.remove("success");
      return false;
  }
  else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31){
      x.classList.add('error');
	  x.classList.remove("success");
	  return false;
  }
  else if (dtMonth == 2)
  {
     var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
     if (dtDay> 29 || (dtDay ==29 && !isleap)){
         x.classList.add('error');
	  	 x.classList.remove("success");
		  return false;
	 }
  }
  x.classList.remove("error");
  x.classList.add('success');
  return true;
}

 function validateImage(fileName,div) 
      {
       	var x =document.getElementById(fileName);
	
		
		var y=x.value.toLowerCase();
		var z=document.getElementById(div);
		
		if(/(\.jpg|\.png|\.gif|\.jpeg)$/i.test(y) && y!="") 
         {
            $(z).addClass('success').removeClass('error');
		   return true;
		   
         }
		  
		 $(z).addClass('error').removeClass('success');
        return false;
       }
	   
   function validateStartEndDate(start,end,iDate,eDate)
   {
		var x=document.getElementById(start);
		var y=document.getElementById(end);
		
		if(iDate >eDate)
		{
			$(x).addClass('error').removeClass('success');
			$(y).addClass('error').removeClass('success');
			return false;
		}
		return true;
   }
   function validateIdCard(proof)
   {
	  
	  var x=document.getElementById(proof);
	  x.value=trim(x.value);
	  var proof=x.value;
	   
	   if(proof!="Adhaar Card" && proof!="Driving License" && proof!="Election Card" && proof!="Pancard" && proof!="Passport" && proof!="Ration Card" )
   		{
			$(x).addClass('error').removeClass('success');
			return false;
		}
		$(x).removeClass('error').addClass('success');
		return true;
   }
   
   function validateIdNumber(element)
   {
	  var x=document.getElementById(element);
	  x.value=trim(x.value).toLowerCase();;
	  var number=x.value;
	   
	   if(number.length<3||number.length>50 || number==="")
   		{
			$(x).addClass('error').removeClass('success');
			return false;
		}
		$(x).removeClass('error').addClass('success');
		return true;
   }
   
   function validateDesignation(designation)
   {
	  var x=document.getElementById(designation);
	  x.value=trim(x.value);
	  var y=x.value;
	   
		if(y!="Manager" && y!="ServiceRep" && y!="Supervisor" && y!="Workers")
			{
				$(x).addClass('error').removeClass('success');
				return false;
			}
				$(x).addClass('success').removeClass('error');
				return true;
   }
function validateSalaryType(salary)
{
	 var x=document.getElementById(salary);
	 x.value=trim(x.value);
	 var y=x.value;
	if(y!="fixedSalary" && y!="salInc" && y!="incentive")
			{
				$(x).addClass('error').removeClass('success');
				return false;
			}
				$(x).addClass('success').removeClass('error');
				return true;
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

function validateFreeLeave(leave)
   {
	  var x=document.getElementById(leave);
	  x.value=trim(x.value);
	  var y=x.value;
	   
		if(y!="0" && y!="1" && y!="2" && y!="3" && y!="4" && y!="5")
			{
				$(x).addClass('error').removeClass('success');
				return false;
			}
				$(x).addClass('success').removeClass('error');
				return true;
   }
  