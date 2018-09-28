<?php
	$con=mysqli_connect("localhost","root","","project");
	//$con=mysqli_connect("db4free.net:3307","christ","sat@christ","satdb");
	if(!mysqli_connect())
		{
			echo mysqli_connect_error();
		}
	
?>