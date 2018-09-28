<?php session_start(); $_SESSION['uname']="";?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User Activation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/password-strength/demo/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>GROW</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

      </div>
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <div class="login-box">
  		
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p>Enter Credentials To Login</p>

    <form  method="post">
      <div class="form-group has-feedback" style="margin-bottom:30px;">
       <input type="test" id="field" name="uname" class="form-control" placeholder="User Name">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
		</div>
		
		
     
     <div class="form-group has-feedback">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
       <input type="password" name="password"  class="form-control" placeholder="password">
        
      </div>
		
     
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-6">
         
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Login">
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="#">Grow</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="bower_components/password-strength/jquery.pwstrength.min.js"></script>
<script>
 
</script>
</body>
</html>
<?php
require_once('includes/database.php');	
include('includes/validation.php');

	
if(isset($_POST['submit'])){
		
	 $uname=$_POST['uname'];
	$password=$_POST['password'];
		
	$query="select userId,password,status from userlogin where userId='$uname' and password='$password'";
	$runquery=mysqli_query($con,$query)or die (mysqli_errno($con));
	$count=mysqli_num_rows($runquery);
	if($count>0){
		while($result=mysqli_fetch_array($runquery)){
			if($result['status']!="active"){
				echo '<script>alert("User ID is inactive")</script>';
			}
		}
		session_start();
		$_SESSION['uname']="active";
		
		echo '<script>window.location.replace("/Project_E-Question/Project")</script>';
		die();
	}
	else{
		echo '<script>alert("Invalid details")</script>';
	}
	}

?>