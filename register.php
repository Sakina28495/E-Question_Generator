<?php
	
	include('db.php');
	
	$fnm = $_POST["fnm"];
	
	$lnm = $_POST["lnm"];
	
	$mail = $_POST["mail"];
	$cpass = $_POST["cpass"];

	

	$r = mysql_query("insert into users (Firstname,Lastname,Email,Password) values ('$fnm','$lnm','$mail','$cpass')");
	
	if($r)
	{
		echo "<script> alert('Record Inserted Successfully');window.location='generic.php'</script>";
			
		
	}
	else
	{
		echo "<script> alert('Email id Already exists');window.location='register1.php'
	   </script>";
		
	
	}

?>