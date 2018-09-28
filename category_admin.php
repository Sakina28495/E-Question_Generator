<!doctype html>
<html>
<head>
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<title>Untitled Document</title>
<script>
		function functions()
		{
			var x = document.getElementById("selected_cat").value;
			document.getElementById("demo").innerHTML=x;	
		}
		
	</script>


<body style ='background:white' align='center'>
		</br>	
        </br>
        </br>
		<form action='category_admin_connect.php' method='post' id='form1' >
            <table align='center' >
               <tr>
                	<td>
                    	Enter Category name
                    </td>
                	<td>
                    	<input type ='text' name ='caname' value="" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td> </br> </td>
                 </tr>

                 <tr>
                 <td>
                 	Category Id
                 </td>
                	<td colspan="3">
                       <input type='text' name = 'cid' value="" class="form-control">
                  	</td>
                </tr> 
   
    	  	  <tr>
               		 <td> </br> </td>
                </tr> 
                
                <tr>
                    <td >
                        Choose Category Name 
                    </td>
                
                    <td>
						<?php
							include ('db.php');
							$sql = "select * from category_name";
							$r = mysql_query($sql);	
							
							 echo  '<select name="selected_cat" id="selected_cat" >';
							 	echo '<option value="Select Category">Select Category</option>';
								
								while($row=mysql_fetch_array($r))
								{
									echo '<option value="'.$row['cat_name'].'">'.$row['cat_name'].'</option>';
								}
							 echo  "</select>";
                        ?>
                    </td>
                  </tr>
                  
                 <tr>
               		 <td> </br> </td>
                </tr> 
                
                 <tr>
               		 <td colspan="3"> <input type='button' value ="Get" onclick ="functions()" class="btn btn-warning">
                     
                      <p id="demo"> </p>
                     </td>
                </tr>
               
                <tr>
               		 <td> </br> </td>
                </tr>
                
                <tr>
                	<td>
                    	Enter SubCategory
                    </td>
                    
                	<td>
                    	<input type='text' name='scaname' value="" class="form-control" Class="validate[required]">
                    </td>
                </tr> 
                
                 <tr>
               		 <td> </br> </td>
                </tr> 
                
                <tr>
                	<td colspan="3">
                    	<input type = 'submit' name='send' value="Done" class="btn btn-warning">
                    </td>
                </tr>
            </table>
           </form>
	
  
</body>
</html>

