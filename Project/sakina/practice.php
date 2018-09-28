<?php
if(!isset($_GET['qType'])||$_GET['qType']==""||$_GET['qType']=="0"){
	header("location:homepage.php");
}



?>
<!doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	table, caption, tbody, tfoot, thead, tr, th, td {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}
	</style>
</head>

<body>
<input type="hidden" id="qTypeId" value="<?php echo $_GET['qType'];?>">
	<div id="tables" style="width:300px; border: 1px dashed grey; width: 800px">
		
		
		</div>


</body>

<script>
	$(document).ready(function(){
		
		startpractice();
	function startpractice()
			  {
				 var qTypeId=$('#qTypeId').val();
				 var cAnswer=[]; 
				  $.ajax({
							url:"ajax/test.php",
							type:'post',
							data:{choice:'qType',qTypeId:qTypeId},
							success:function(data)
										{
											
											
											
										for(var i=0;i<data.length;i++)
										{
											var table=$('<table />');
											var row1=$('<tr/>');
											var row2=$('<tr/>');
											var row3=$('<tr/>');
											var row4=$('<tr/>');
											var row5=$('<tr/>');
											var c=1;//for option value
											
											$('<td>').text((i+1)+".").appendTo(row1);
											$('<td colspan=10>').text(data[i].question).appendTo(row1);
											
											for(var j=2;j<=5;j++){
												
												if(j==2){var row=row2;var ch='A.';}
												if(j==3){var row=row3;var ch='B.';}
												if(j==4){var row=row4;var ch='C.';}
												if(j==5){var row=row5;var ch='D.';}												
												var td=$('<td/>');
												
												$('<td>').text("").appendTo(row);
												$('<td style="width:10px;">').text(ch).appendTo(row);
												
												$(' <input type="radio" value='+c+' id="q'+i+j+'" name="q'+i+'"/>')
													.on("click",function(){answer(this)})
													.appendTo(td);	
												$('<label  for="q'+i+j+'">'+data[i][j]+'</label>').appendTo(td);
												
												c++;
												td.appendTo(row);
												
											}
											c=0;
											$( '<input type="hidden" value='+data[i][6]+' id="q'+(i+1)+'"/>').appendTo(td);	
											table.append(row1,row2,row3,row4,row5);
											$('#tables').append(table);
											var ansOption;
											if(data[i][6]==1){ansOption="A"}
											else if(data[i][6]==2){ansOption="B"}
											else if(data[i][6]==3){ansOption="C"}
											else if(data[i][6]==4){ansOption="D"}
											$( '<div class="collapse" style="color:green;font-weight:bold" id="d'+(i+1)+'">Correct Answer: Option '+ansOption+'</div>').appendTo($('#tables'));
											$( '<hr/>').appendTo($('#tables'));
											
											
											
										}
											$( '<hr/>').appendTo($('#tables'));	
											
											var len=data.length;
											
											for(var i=0;i<len;i++)
												{
													cAnswer[i]=data[i][6]
												}
											
											
											
											
										},
										
						error		: 	function (jqXHR, status, err) 
													{
														  alert(err);
													},
						
						});
			  }
				  
	});//end of ajax;
	
	function answer(q){
		var y=$(q).closest("table").find("input:hidden").val();
		x=q.value;
		
		if(x!=y){
			var x=$(q).attr("disabled",true);
			$('label[for="'+q.id+'"]').attr("style","color:red;font-weight:bold");
		}
		else{
			$('label[for="'+q.id+'"]').attr("style","color:green;font-weight:bold");
			$('label[for="'+q.id+'"]').closest("table").next('div').collapse();
		}
	}
	</script>
</html>