﻿<?php
session_start();
if($_SESSION['uname']!="active"){
		header("location:login2.php");
		die();
	}
?>
<!DOCTYPE html>
<html  ng-app="myApp">
<head>
 <!--<base href="http://localhost/Project/" >-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Question</title>
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
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	.tree-li{
	padding-left:30px;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini" >

<div class="wrapper" >

  <header class="main-header slimScrollDiv">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>TT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GROW</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
			  <a href="login2.php">Logout</a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
</header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Control Panel</li>
        
        <li>
          <a href="#/home">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="pull-right"></i>
            </span>
          </a>
        </li>
             
        
        
        <li>
          <a href="#/adduser">
            <i class="fa fa-user"></i> <span>Add User</span>
            <span class="pull-right-container">
              <i class="pull-right"></i>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i><span>Questions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
             	<li class="tree-li">
				  <a href="#/section">
					<i class="fa fa-folder-o"></i> <span>Category</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>

				<li class="tree-li">
				  <a href="#/subsection">
					<i class="fa fa-folder-open-o"></i> <span>Sub Category</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>

				<li class="tree-li">
				  <a href="#/question">
					<i class="fa fa-quora"></i> <span>Questions</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
			</ul>
			
			
		  </li>
       
       
       
       <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i><span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
             	<li class="tree-li">
				  <a href="#/authusers">
					<i class="fa fa-folder-o"></i> <span>Backend Users</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>

				<li class="tree-li">
				  <a href="#/catReports">
					<i class="fa fa-folder-open-o"></i> <span>Category</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>

				<li class="tree-li">
				  <a href="#/subCatReports">
					<i class="fa fa-quora"></i> <span>Sub Category</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
				
				<li class="tree-li">
				  <a href="#/questionReport">
					<i class="fa fa-quora"></i> <span>Questions</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
				
				<li class="tree-li">
				  <a href="#/testreport">
					<i class="fa fa-quora"></i> <span>All Tests</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
				<li class="tree-li">
				  <a href="#/regusers">
					<i class="fa fa-quora"></i> <span>Registered Users</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
				
				
				
				<li class="tree-li">
				  <a href="#/feedback">
					<i class="fa fa-quora"></i> <span>User Feedback</span>
					<span class="pull-right-container">
					  <i class="pull-right"></i>
					</span>
				  </a>
				</li>
				
			</ul>
			
			
		  </li>
       
        
		</ul>
         <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>-->
        
     
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<ng-view></ng-view>
</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     <!-- <b>Version</b> 2.4.0-->
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    <script src="js/angular-min.js"></script>
    <script src="js/modules.js"></script>
    <script src="js/route.js"></script>
	<script src="js/controller.js"></script>
	<script src="js/validation.js"></script>
	
<script src="js/angular-route.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-utils/0.1.1/angular-ui-utils.min.js"></script>
	<script src="js/pagination.js"></script>
	<script src ="//cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js">	</script>
	<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
	<script src="//cdn.datatables.net/buttons/1.4.2/js/buttons.colVis.min.js"></script>
</body>
</html>
