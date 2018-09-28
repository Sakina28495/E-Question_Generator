
category
	.controller("category",function($scope,$http){
		
		$scope.btnName="Save";
		$scope.btnVal="Add";
		$scope.insertData=function(){
			
			$http({
					url			:	"./ajax/category.php",
					method		:	"POST",
					data		:	{'btnVal':$scope.btnVal,'id':$scope.id,'categoryName':$scope.categoryName},
					//headers		:	{'Content-Type': 'application/json'},
			}).then(function(response) {
				alert(response.data);
				$scope.dispCategoryList();
				$scope.reset();
				}).catch(function(response) {
					alert(response.data);
				})
		}
		
		$scope.formSubmission = function() {
			$scope.isSubmitted = true;
		}
		
		$scope.reset=function(){
				angular.element('#myModal').modal('hide');
				$scope.btnName="Save";
				$scope.btnVal="Add";
				$scope.saveCategory.$setPristine();
				$scope.saveCategory.$setUntouched();
				$scope.isSubmitted = false;
				$scope.categoryName=null;
			
		}
		
		$scope.formSubmission = function() {
			$scope.isSubmitted = true;
		}
			
		$scope.dispCategoryList=function(){
			$http({
				url			:	"./ajax/category.php",
				method		:	"POST",
				data		:	{btnVal:'read'},
				//headers		:	{'Content-Type': 'application/json'},
		}).then(function(response) {
			$scope.datas=response.data;
			}).catch(function(response) {
				alert(response.data);
			})
		}
		
		$scope.update=function(id,catName){
			$scope.btnName="Update"
			$scope.btnVal="Update";
			$scope.id=id;
			$scope.categoryName=catName;
			angular.element('#myModal').modal('show');
			
		}
		
		
})//end of section controller

questionTypes
	
	.controller("questionTypes",function($scope,$http,$timeout){
		$scope.btnName="Save";
		$scope.btnVal="Add";
		
		$scope.dispCategoryList=function(){
			$http({
				url			:	"./ajax/category.php",
				method		:	"POST",
				data		:	{btnVal:'read'},
				
			}).then(function(response) {
				$scope.data=response.data;
			}).catch(function(response) {
					alert(response.data);
				})
		}
		
		
		$scope.insertData=function(){
			if($scope.validate()){
				$http({
						url			:	"./ajax/questiontype.php",
						method		:	"POST",
						data		:	{'btnVal':$scope.btnVal,'id':$scope.id,'catList':$scope.catList,'subCategoryName':$scope.questionType},
						
				}).then(function(response) {
					alert(response.data);
					$scope.reset();
					$scope.dispQuestionTypes();


				}).catch(function(response) {
					alert(response.data);
				})

			}
		}
		
		$scope.sort = function(keyname){
			$scope.sortKey = keyname;   //set the sortKey to the param passed
			$scope.reverse = !$scope.reverse; //if true make it false and vice versa
    	}
		
		$scope.reset=function(){
				$scope.btnName="Save";
				$scope.btnVal="Add";
				$scope.catList=null;
				$scope.questionType=null;
				$scope.sCatNameV=false;
				$scope.catNameV=false;
				$('.error,.success').removeClass('error success');
				
				
		}
		
		
		
		//to fill the questiontype dropdown menu in add questiontype page
		$scope.dispQuestionTypes=function(){
			$http({
				url			:	"./ajax/questiontype.php",
				method		:	"POST",
				data		:	{btnVal:'read'},
			
			}).then(function(response) {
				console.log(response.data);
				$scope.data1=response.data;
				
			}).catch(function(response) {
				alert(response.data);
			})
		}
		
		
		
		$scope.update=function(id,subCatName,catId){
			$('html, body').scrollTop(0);
			$scope.btnName="Update"
			$scope.btnVal="Update";
			$scope.id=id;
			$scope.questionType=subCatName;
			$scope.catList=catId;
			
			
			
			
		}
		
		$scope.validate=function(){
			validatename($('#questionType').attr('id'))?$scope.sCatNameV=false:$scope.sCatNameV=true;
			validatetitle($('#catList').attr('id'))?$scope.catNameV=false:$scope.catNameV=true;
			if($scope.sCatNameV||$scope.catNameV)
				{return false;}
			else{return true;}
				
			}
})//end of questiontypes controller


questions
	.controller("questions",function($scope,$http){
		$scope.btnName="Save";
		$scope.btnVal="Add";
		$scope.dispQuestionTypes=function(){
			
			
			$http({
				url			:	"./ajax/questions.php",
				method		:	"POST",
				data		:	{btnVal:'readTypes'},
				//headers		:	{'Content-Type': 'application/json'},
		}).then(function(response) {
			$scope.data=response.data;
			}).catch(function(response) {
				alert(response.data);
			})
		}
		
		$scope.dispQuestions=function(){
			
			
			$http({
				url			:	"./ajax/questions.php",
				method		:	"POST",
				data		:	{btnVal:'read'},
				//headers		:	{'Content-Type': 'application/json'},
		}).then(function(response) {
			$scope.data1=response.data;
				console.log($scope.data1);
			}).catch(function(response) {
				alert(response.data);
			})
		}
		
		
		$scope.insertData=function(){
			if($scope.validate()){
				
					
					$http({
							url			:	"./ajax/questions.php",
							method		:	"POST",
							data		:	{'btnVal':$scope.btnVal,
											 'qId':$scope.id,
											 'optId':$scope.optId,
											 'qType':$scope.qType,
											 'qCategory':$scope.qCategory,
											 'questions':$scope.questions,
											 'option1':$scope.option1,
											 'option2':$scope.option2,
											 'option3':$scope.option3,
											 'option4':$scope.option4,
											 'qAnswer':$scope.qAnswer,
											},
							//headers		:	{'Content-Type': 'application/json'},
					}).then(function(response) {
						alert(response.data);
						$scope.reset();
						$scope.dispQuestionTypes();
						$scope.dispQuestions();

					}).catch(function(response) {
						alert(response.data);
					})
			}
			
		}
		
		$scope.reset=function(){
			
				 $scope.btnName="Save";
				 $scope.btnVal="Add";
				 $scope.qType=null;
				 $scope.qCategory=null;
				 $scope.questions=null;
				 $scope.option1=null;
				 $scope.option2=null;
				 $scope.option3=null;
				 $scope.option4=null;
				 $scope.qAnswer=null;
				 $scope.opt1V=false;
				 $scope.opt2V=false;
				 $scope.opt3V=false;
				 $scope.opt4V=false;
				 $scope.opt5V=false;
				 $scope.qTypeV=false;
				 $scope.questV=false;
				$('.error,.success').removeClass('error success');
		}
		
		
		
		
		
		
		
		$scope.update=function(qId,qTypeId,question,opt1,opt2,opt3,opt4,answer,optId){
			//alert(qId+","+qTypeId+","+question+","+opt1+","+opt2+","+opt3+","+opt4+","+optId);
			$('html, body').scrollTop(0);
			
			$scope.btnName="Update"
			$scope.btnVal="Update";
			$scope.id=qId;
			$scope.optId=optId;
			
			$scope.qType=qTypeId;
			$scope.change();
			$scope.questions=question;
			$scope.option1=opt1;
			$scope.option2=opt2;
			$scope.option3=opt3;
			$scope.option4=opt4;
			$scope.qAnswer=answer;
			
			
			
		}
		
		$scope.change=function(){
			
			$http({
				url			:	"./ajax/questions.php",
				method		:	"POST",
				data		:	{'btnVal':'catId','id':$scope.qType},
			
		}).then(function(response) {
			console.log(response.data);
			$scope.qCategory=response.data.catName;
			}).catch(function(response) {
				alert(response.data);
			})
		}
			
			$scope.validate=function(){
				validatetitle($('#qType').attr('id'))?$scope.qTypeV=false:$scope.qTypeV=true;
				validatename($('#questions').attr('id'))?$scope.questV=false:$scope.questV=true;
				validateChoice($('#option1').attr('id'))?$scope.opt1V=false:$scope.opt1V=true;
				validateChoice($('#option2').attr('id'))?$scope.opt2V=false:$scope.opt2V=true;
				validateChoice($('#option3').attr('id'))?$scope.opt3V=false:$scope.opt3V=true;
				validateChoice($('#option4').attr('id'))?$scope.opt4V=false:$scope.opt4V=true;
				validatetitle($('#qAnswer').attr('id'))?$scope.opt5V=false:$scope.opt5V=true;
			
			if($scope.qTypeV||$scope.questV||$scope.opt1V||$scope.opt2V||$scope.opt3V||$scope.opt4V||$scope.opt5V)
				{return false;}
				
			else{return true;}
				
			}
			
		$scope.sort = function(keyname){
        $scope.sortKey = keyname;   //set the sortKey to the param passed
        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
		}
		
	
})

addUser
	.controller("addUser",function($scope,$http){
	
	$scope.btnName="Register";
		$scope.btnVal="Add";
	
		$scope.insertData=function(){
			if($scope.validate()){
				
					
					$http({
							url			:	"./ajax/users.php",
							method		:	"POST",
							data		:	{'btnVal':$scope.btnVal,
											 'userId':$scope.id,
											 'fName':$scope.fName,
											 'lName':$scope.lName,
											 'email':$scope.email,
											 'mobile':$scope.mobile,
											 'privilege':$scope.privilege
											
											 
											},
							//headers		:	{'Content-Type': 'application/json'},
					}).then(function(response) {
						alert(response.data[0]);
						
						$scope.active=response.data[1][0].active;
						$scope.inactive=response.data[1][0].inactive;
						$scope.pending=response.data[1][0].pending;
						$scope.total=parseInt($scope.active)+parseInt($scope.inactive)+parseInt($scope.pending);
						$scope.reset();
					}).catch(function(response) {
						alert(response.data);
					})
			}
			
		}
	
		
		$scope.userStat=function(){
			
				
					
					$http({
							url			:	"./ajax/users.php",
							method		:	"POST",
							data		:	{btnVal:'userStat'}
					
					}).then(function(response) {
						
						$scope.active=response.data[0].active;
						$scope.inactive=response.data[0].inactive;
						$scope.pending=response.data[0].pending;
						$scope.total=parseInt($scope.active)+parseInt($scope.inactive)+parseInt($scope.pending);
						$scope.reset();
					}).catch(function(response) {
						alert(response.data);
					})
			
			
		}
		$scope.validate=function(){
				
				validateAlpha($('#fName').attr('id'))?$scope.vFName=false:$scope.vFName=true;
				validateAlpha($('#lName').attr('id'))?$scope.vLName=false:$scope.vLName=true;
				validateEmail($('#email').attr('id'))?$scope.vEmail=false:$scope.vEmail=true;
				validateMobile($('#mobile').attr('id'))?$scope.vMobile=false:$scope.vMobile=true;
				validatetitle($('#privilege').attr('id'))?$scope.vPrivilege=false:$scope.vPrivilege=true;
				
			
			if($scope.vFName||$scope.vLName||$scope.vEmail||$scope.vMobile||$scope.vPrivilege)
				{return false;}
				
			else{return true;}
				
			}
		
		$scope.reset=function(){
				 $scope.btnName="Register";
				 $scope.btnVal="Add";
				 $scope.fName=null;
				 $scope.lName=null;
				 $scope.email=null;
				 $scope.mobile=null;
				 $scope.privilege=null;
				 $scope.vFName=false;
				 $scope.vLName=false;
				 $scope.vEmail=false;
				 $scope.vMobile=false;
				 $scope.vPrivilege=false;
				$('.error,.success').removeClass('error success');
		}
		
		

	
})


stat
	.controller("stat",function($scope,$http){
	
	
				
		$scope.dashboard=function(){
			
				
					$http({
							url			:	"./ajax/stat.php",
							method		:	"POST",
							data		:	{btnVal:'userStat'}
					
					}).then(function(response) {
						
						$scope.tCategory=response.data[0][0].category;
						$scope.tQType=response.data[0][0].tqtype;
						$scope.tQuestions=response.data[0][0].question;
						$scope.tAUser=response.data[0][0].auser;
						$scope.tTest=response.data[0][0].test;
						
					}).catch(function(response) {
						alert(response.data);
					})
			
		}
		
		
		

	
});




