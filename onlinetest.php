
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<input type="hidden" id="catId" value="<?php echo $_GET['testname'];?>">
<input type="hidden" id="limit" value="<?php echo $_GET['qnumbers'];?>">
	
	<div id="results">
		<table border=1 style="border-collapse: collapse">
			
			<tr>
				<td>Total Questions</td><td><?php echo $_GET['qnumbers'];?></td>
			</tr>	
			<tr>
				<td>Unanswered questions</td><td id="unanswer"></td>
			</tr>
			<tr>	
				<td>Incorrect Answers</td><td id="incorrect"></td>
			</tr>
			<tr>	
				<td>Marks</td><td><span id="correct"></span> out of <?php echo $_GET['qnumbers'];?></td>
			</tr>
		</table>
	</div>
	<div id="instructions">
	 
Instruction:

    <ul>
		<li> Total number of questions : 20.</li>
		<li> Time alloted : 30 minutes.</li>
		<li> Each question carry 1 mark, no negative marks.</li>
		<li> DO NOT refresh the page.</li>
		<li> All the best :-).</li>
	</ul>
	<input type="button" value="Start" id="start">
	</div>
	
	<div id="tables" style="width:300px; border: 1px dashed grey; width: 800px">
		<span id="time">30:00</span> minutes!
		
		
	</div>
	
	

</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$('#results').hide();
		$('#start').click(function(){
			starttest();
			startTimer();
		})
		var cAnswer=[];
			function starttest()
			  {
				 var catId=$('#catId').val();
				  var limit=$('#limit').val();
				  $.ajax({
							url:"ajax/test.php",
							type:'post',
							data:{catId:catId,limit:limit},
							success:function(data)
										{
											
											$('#instructions').hide();
												
										for(var i=0;i<3;i++)
										{
											var table=$('<table style/>');
											var row1=$('<tr/>');
											var row2=$('<tr/>');
											var row3=$('<tr/>');
											var row4=$('<tr/>');
											var row5=$('<tr/>');
											var c=1;
											//var row = $('<tr style="border-spacing:5em;"></tr>')
											$('<td>').text(i+1+". ").appendTo(row1);
											$('<td colspan=10>').text(data[i].question).appendTo(row1);
											
											for(j=2;j<=5;j++){
												
												if(j==2){var row=row2;var ch='A';}
												if(j==3){var row=row3;var ch='B';}
												if(j==4){var row=row4;var ch='C';}
												if(j==5){var row=row5;var ch='D';}												
												var td=$('<td/>');
												
												$('<td>').text("").appendTo(row);
												$('<td>').text(ch).appendTo(row);
												$( '<input type="radio" value='+c+' name="q'+i+'"/>'+data[i][j]+'<br>' ).appendTo(td);	
												c++;
												td.appendTo(row);
												
											}
											c=0;
											table.append(row1,row2,row3,row4,row5);
											$('#tables').append(table);
											
											
										}

												
											var btn=$( '<input type="button" value="submit" id="result" />').appendTo();
											alert("fsd");
											$('#tables').append(btn);	
											
											
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
		
		function startTimer() {
		
		
		duration=60*0.2;
		
		display = $('#time');
    	var timer = duration, minutes, seconds;
    	var interval=setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
			clearInterval(interval);
			alert("time up");
			$('#results').show();
			
			var answers=[];
			
			var i=0;
			var incorrect=0;
			var correct=0;
			$("input[type=radio]:checked").each(function() {
			  if(this.checked == true)
			  {
				 answers[i++]=this.value;
			  }
				
			});
			
			
			for(i=0;i<cAnswer.length;i++){
				if(cAnswer[i]!=answers[i])
					incorrect+=1;
				else
					correct+=1;
			}
			var unanswer=cAnswer.length-answers.length;
			$('#unanswer').text(unanswer);
			$('#incorrect').text(incorrect);
			$('#correct').text(correct);

    }

	}, 1000);
}
		
		
	
	});
	
	
	


</script>
</html>