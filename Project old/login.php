
<?php
function throw_ex($ex){
	throw new Exception($ex);
}

require_once('includes/database.php');	
include('includes/validation.php');
function redirect(){
		header('HTTP/1.0 404 Not Found');
    	include('/error/404error.html');
    	exit();
}
if(isset($_GET['id']) && !empty($_GET['id']) AND isset($_GET['token']) && !empty($_GET['token'])){
    
    $email = mysql_escape_string(base64_decode($_GET['id'])); // Set email variable
    $hash = mysql_escape_string( base64_decode($_GET['token'])); // Set hash variable
		
	$query="select userId, status from userlogin where userId='$email'";
	$query="select userlogin.userId, userlogin.status,userdata.fname,userdata.lName from userlogin INNER JOIN userdata on userlogin.userId = userdata.emailId where userlogin.userId='$email' and userlogin.password='$hash'";
		$runquery=mysqli_query($con,$query);
		if(mysqli_num_rows($runquery)>0){
			$rows=mysqli_fetch_all($runquery,MYSQLI_ASSOC);
			if($rows[0]['status']!=="pending")
				redirect();
		}
		else redirect();
}	
	
else redirect();
	
if(isset($_POST['submit'])){
	
	try{
	
	mysqli_autocommit($con,false);
		
	$password= validatePassword($_POST['password'])  or throw_ex("Password must be minimum 8 characters");
	$cpassword=validatePassword($_POST['cpassword']) or throw_ex("password and retyped password do not match");
	
		if($password!=$cpassword){
		throw_ex("Password and retyped password do not match.");
	}
	$password=password_hash($password,PASSWORD_BCRYPT);	
	$query="update userlogin set password='$password',status='active' where userId='$email'";
	$execute=mysqli_query($con,$query) or throw_ex(mysqli_error($con));
	mysqli_commit($con);
	unset($_POST['password']);
	echo '<script>alert("Password Changed successfully")</script>';
	}catch(Exception $ex){
		mysqli_rollback($con);
		echo '<script>alert("'.$ex->getMessage().'")</script>';
		
	}
}

?>

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
  		<div class="login-logo">
			<a href="#"><h3>Hello <?php echo $rows[0]['fname'];?> !!</h3></a>
  		</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Set your password to start your session</p>

    <form  method="post">
      
      
       
	
    
      <div class="form-group has-feedback" style="margin-bottom:30px;">
       <input type="password" id="field" name="password" class="form-control" placeholder="New Password" data-indicator="pwindicator"  value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <p class="pull-left">Minimum 8 Characters</p>
                   <div id="pwindicator" class="pull-right">
						<div class="bar"></div>
						<div class="label" style="font-size:12px"></div>
                	</div>
		</div>
		
		
     
     <div class="form-group has-feedback">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
       <input type="password" name="cpassword"  class="form-control" placeholder="Confirm Password">
        
      </div>
		
     
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-6">
         
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Change Password">
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
  $(function () {
    
	  $('#field').pwstrength();
  });
</script>
</body>
</html>
