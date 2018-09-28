<?php

	
require_once('../includes/database.php');
include('../includes/validation.php');




	
	$query="select (SELECT COUNT(*) FROM category ) as category, 
       (SELECT COUNT(*) FROM questiontype) as tqtype,
       (SELECT COUNT(*) FROM questions) as question,
       (SELECT COUNT(*) FROM userlogin WHERE STATUS='active') as auser,
       (SELECT COUNT(*) FROM usertest) as test,
       (SELECT COUNT(*) FROM questions) as table2Count ";
					$runquery=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
						while($row=mysqli_fetch_array($runquery))
						{
							$output[]=$row;
						}	
					echo json_encode(array($output));
					exit();

?>