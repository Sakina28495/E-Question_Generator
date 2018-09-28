<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

	 include('db.php');
	
	$c_name = $_POST["caname"];
	$c_id = $_POST["cid"];
	$r = mysql_query("insert into category_name(cid,cat_name) values('$c_id','$c_name')");
	if($r)
			header('location:category_admin.php');

?> 

<?php 
	include ('db.php');

	$caname = $_POST["selected_cat"];
	$x = mysql_query("select cid from category_name where cat_name='$caname'");
	$a = mysql_fetch_assoc($x);
	$b = $a['cid']	;
	
	$sc_name = $_POST["scaname"];

	$sql=mysql_query("insert into subcategory_name(cid,caname,scaname)values('$b','$caname','$sc_name')");
	
	if($sql)
		header('location:category_admin.php');
?>
</body>
</html>