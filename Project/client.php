<!doctype html>
<html><!-- InstanceBegin template="../Templates/bootstrapTemplate.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
 <title>Untitled Document</title>
 <!-- InstanceEndEditable -->

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="AdminLTE/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<!-- InstanceBeginEditable name="head" -->

 <link rel="stylesheet" type="text/css" href="styles/client-vendor-register.css" />
  
 <style>
.ui-dialog-titlebar {
	background-color: #ED4835 !important;
	background-image: none;
	color: #fff;
	border: none;
	border-radius: 0px;
}
.ui-dialog-content, .ui-dialog-buttonpane, .ui-dialog-title {
	font-size: 12px;
	font-family: Verdana, Geneva, sans-serif;
}
.ui-dialog-titlebar-close {
	display: none;
}
.ui-dialog {
	overflow-x: hidden !important;
	border: 3px solid #ED4835;
	padding: 0px;
}
#loader {
	width: 50px;
	height: 50x;
	position: fixed;
	top: 50%;
	left: 50%;
	text-align: center;
	margin-left: -50px;
	margin-top: -100px;
	z-index: 998;
	overflow: auto;
	padding: 0px;
	margin: 0px;
}
.container {
	width: 100% !important;
}

</style>
 <!-- InstanceEndEditable -->
</head>


 <body class="hold-transition skin-blue sidebar-mini">
    
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="AdminLTE/index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Geo</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Geo Travel Links</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
             
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="AdminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">

            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
            <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
		<!-- InstanceBeginEditable name="pageHeader" -->
       <h1> Clients <small>Add or Modify</small> </h1>
       <!-- InstanceEndEditable -->
         
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content" style="background-color:#FFF">

         
          <!-- InstanceBeginEditable name="page content" -->
       <div class="container">
                    <div id="tab1" >
                    
                    <div class="btn-group">
                  		<a class="btn btn-sm btn-info"  id="t1" href="#clientregister" data-toggle="tab">New Registration</a>
                        <a class="btn btn-sm btn-info" href="#clientlist" data-toggle="tab">Client List</a>
      				</div>
     			
                                <!--<ul class="nav nav-tabs">
                                   <li class="active  "><a data-toggle="tab" id="t1" href="#clientregister">New Registeration</a></li>
                                   <li ><a data-toggle="tab" href="#clientlist">Clients List</a></li>
                                 </ul>-->
                                <div class="tab-content" >
                                           <div id="clientregister" class="tab-pane active" >
                                            <form id="saveClientForm" name="saveClientForm" method="post" enctype="multipart/form-data" autocomplete="off"  >
                                               <input type="hidden" id="clientid" value="" />
                                               <table>
                                                <tbody>
                                                   <tr>
                                                    <td width="90">Client Name</td>
                                                    <td colspan="3" ><select id="c_title" name="cTitle"  class="inputStyle selectStyle">
                                                        <option value="" selected="selected">----</option>
                                                        <option value="Mr.">Mr.</option>
                                                        <option value="Ms.">Ms.</option>
                                                        <option value="M/S.">M/S.</option>
                                                      </select>
                                                       <input type="text" class="inputStyle cnameStyle" id="c_name" name="cName" placeholder="First Name" value=""  maxlength="100" ></td>
                                                  </tr>
                                                   <tr>
                                                    <td >Address</td>
                                                    <td colspan="3"><input type="text"  placeholder="Address" class="inputStyle address-email" id="c_address" name="cAddress" /></td>
                                                  </tr>
                                                   <tr>
                                                    <td>City</td>
                                                    <td><input type="text" class="inputStyle"  id="c_city" name="cCity" placeholder="Enter City Name" value=""  maxlength="20"></td>
                                                    <td width="90">Pincode</td>
                                                    <td><input type="text" class="inputStyle" id="c_pincode" name="cPincode" placeholder="Enter Pincode" value=""  maxlength="6"></td>
                                                  </tr>
                                                   <tr>
                                                    <td>State</td>
                                                    <td><input type="text" class="inputStyle" id="c_state" name="cState" placeholder="Enter State Name" value="" maxlength="20"></td>
                                                    <td>Landline No</td>
                                                    <td><input type="text" class="inputStyle" id="c_contact" name="cContact" placeholder="Enter Landline No:2" value=""  maxlength="10"></td>
                                                  </tr>
                                                 </tbody>
                                                <tbody class="client">
                                                   <tr>
                                                    <td>Mobile No</td>
                                                    <td><input type="text" class="inputStyle" id="c_mobile1" name="cMobile1" placeholder="Enter Landline No:1" value=""  maxlength="10"></td>
                                                    <td>Alt Mobile</td>
                                                    <td><input type="text" class="inputStyle" id="c_mobile2" name="cMobile2"  placeholder="Enter Landline No:1" value=""  maxlength="10"></td>
                                                  </tr>
                                                   <tr>
                                                    <td>Email-Id</td>
                                                    <td colspan="3"><input type="text" class="inputStyle address-email" id="c_email" name="cEmail"  placeholder="Enter email id"  maxlength="50" style="text-transform:lowercase"></td>
                                                  </tr>
                                                 </tbody>
                                              </table>
                                               <hr id="line"/>
                                               <br />
                                             </form>
                                          
                                             
                       
                                     
                           
                                   
                                                 
                                                 
                               <div id="tab2">
                                                               <div class="btn-group">
                                                               
                                                                 <a class="btn btn-lg btn-xs btn-warning" data-toggle="tab" href="#bookingAdminTab">Booking Admin</a>
                                                                <a class="btn btn-lg btn-xs btn-warning" data-toggle="tab" href="#billingSectionTab">Billing Section</a>
                                                                <a class="btn btn-lg btn-xs btn-warning" data-toggle="tab" href="#billingTermsTab">Billing Terms</a>
                                                                <a class="btn btn-lg btn-xs btn-warning" data-toggle="tab" href="#empAddressTab">Address Book</a>
                                                              </div>
                                                               <!--<ul class="nav nav-tabs">
                                                                <li class="active"><a data-toggle="tab" href="#bookingAdminTab">Booking Admin</a></li>
                                                                <li><a data-toggle="tab" href="#billingSectionTab">Billing Section</a></li>
                                                                <li><a data-toggle="tab" href="#billingTermsTab">Billing Terms</a></li>
                                                                <li><a data-toggle="tab" href="#empAddressTab">Address Book</a></li>
                                                              </ul>-->
                                                               <div class="tab-content">
                                                                <div id="bookingAdminTab"  class="tab-pane fade in active">
                                                                   <label class="header pull-left">Booking Administrators</label>
                                                                   <table  class="table table-hover table-responsive" >
                                                                    <thead >
                                                                       <tr>
                                                                        <td colspan="2" align="center"><a id="admintrigger" href="#adminmodal" class="edit">Add New Admin</a></td>
                                                                      </tr>
                                                                     </thead>
                                                                    <thead>
                                                                      <th style="width:300px">Name</th>
                                                                       <th style="width:300px" >Phone</th>
                                                                       <th style="width:300px">Email</th>
                                                                       <th class="editdelete">Action</th>
                                                                       <th>Status</th>
                                                                     </thead>
                                                                     <tbody id="savedAdmins" >
                                                                     </tbody>
                                                                  </table>
                                                                 </div>
                                                                <div id="billingSectionTab" class="tab-pane fade ">
                                                                   <table class="table table-hover table-responsive">
                                                                    <thead >
                                                                       <tr>
                                                                        <td colspan="6" align="center">Billing Departments</td>
                                                                        <td colspan="2" align="center"><a id="sectiontrigger" href="#sectionmodal" class="edit" >Add New Section</a></td>
                                                                      </tr>
                                                                     </thead>
                                                                    <thead >
                                                                       <th class="name" >Name</th>
                                                                       <th class="hideStyle">AddressType</th>
                                                                       <th class="caddress">Address</th>
                                                                       <th class="name">City</th>
                                                                       <th class="name">State</th>
                                                                       <th class="name">Pincode</th>
                                                                       <th class="name">Phone</th>
                                                                       <th class="editdelete">Edit</th>
                                                                       <th class="editdelete">Delete</th>
                                                                     </thead>
                                                                     <tbody id="savedSections">
                                                                     </tbody>
                                                                  </table>
                                                                 </div>
                                                                <div id="billingTermsTab" class=" tab-pane fade">
                                                                   <table  class=" table table-hover table-responsive" >
                                                                    <tr>
                                                                       <td>TDS Deduction %</td>
                                                                       <td><input type="text" name="tds" class="inputStyle" placeholder="Eg:1.5 or 2" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="15"></td>
                                                                     </tr>
                                                                    <tr>
                                                                       <td>Service Tax Payable %</td>
                                                                       <td><input type="text" name="stax" class="inputStyle" placeholder="Eg:60% or 40%" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="15"></td>
                                                                       <td>On 4.95%</td>
                                                                     </tr>
                                                                  </table>
                                                                 </div>
                                                                 
                                                                <div id="empAddressTab" class=" tab-pane fade">
                                                                   <table class="table table-hover table-responsive" style="table-layout : fixed">
                                                                    <thead >
                                                                       <tr>
                                                                        <td colspan="5" align="center">Client Address Book</td>
                                                                        <td colspan="2" align="center"><a id="empAddress_trigger" href="#addressmodal" class="edit">Add New Address</a></td>
                                                                      </tr>
                                                                     </thead>
                                                                     <thead>
                                                                       <th class="name">Name</th>
                                                                       <th class="caddress">Address</th>
                                                                       <th class="hideStyle">City</th>
                                                                       <th class="hideStyle">State</th>
                                                                       <th class="hideStyle">Pincode</th>
                                                                       <th class="name">Phone 1</th>
                                                                       <th class="name">Phone 2</th>
                                                                       <th class="email">Email</th>
                                                                       <th class="editdelete">Action</th>
                                                                       <th>Status</th>
                                                                     </thead>
                                                                     <tbody id="savedEmployees"></tbody>
                                                                  </table>
                                                                 </div>
                                             
                                                                    <div id="adminmodal" class="popupContainerStyle" style="display:none;">
                                                                       <header class="popupHeaderStyle"> <span class="header_title">Booking Administrator</span> <span class="modal_close"><i class="fa fa-times"></i></span> </header>
                                                                       <section class="popupBodyStyle">
                                                                        <form id="saveAdminForm" method="post" enctype="multipart/form-data" autocomplete="off"  >
                                                                           <input type="hidden" id="adminId" value="" name="adminId"/>
                                                                           <table width="600">
                                                                            <tbody>
                                                                               <tr>
                                                                                <td width="90">Admin Name</td>
                                                                                <td ><select id="admintitle" name="adminTitle" class="inputStyle selectStyle" >
                                                                                    <option value="" selected="selected" >----</option>
                                                                                    <option value="MR.">MR.</option>
                                                                                    <option value="MS.">MS.</option>
                                                                                  </select>
                                                                                   <input type="text" id="adminname" name="adminName" class="inputStyle cnameStyle"   placeholder="First Name" value="" maxlength="100"/></td>
                                                                              </tr>
                                                                               <tr>
                                                                                <td>Mobile No</td>
                                                                                <td><input type="text" name="adminMobile" id="adminmobile" class="inputStyle address-email" value="" maxlength="10" /></td>
                                                                              </tr>
                                                                               <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" id="adminemail" name="adminEmail" class="inputStyle address-email"  value="" maxlength="50" /></td>
                                                                              </tr>
                                                                               <tr id="adminStatus" class="hideStyle">
                                                                                <td>Status</td>
                                                                                <td class="inputStyle"  style="border:none; padding-left:0px;"><input type="checkbox" id="adminInactive" name="adminStatus"   value="inactive"  />
                                                                                   <label for="adminInactive">Inactive</label></td>
                                                                              </tr>
                                                                             </tbody>
                                                                          </table>
                                                                           <hr/>
                                                                           <button type="submit" value="createAdmin" class="button"  id="createAdminBtn">Save</button>
                                                                           <input type="button"  class="button cancel" value="Cancel"  />
                                                                         </form>
                                                                      </section>
                                                                     </div><!--end of admin modal-->
                                            
                                                                    <div id="sectionmodal" class="popupContainerStyle" style="display:none;">
                                                                       <header class="popupHeaderStyle"> <span class="header_title">Billing Section</span> <span class="modal_close"><i class="fa fa-times"></i></span> </header>
                                                                       <section class="popupBodyStyle">
                                                                        <form id="saveSectionForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                                                           <input type="hidden" id="sectionId" value="" name="sectionId"/>
                                                                           <table>
                                                                            <tr>
                                                                               <td width="70">Name</td>
                                                                               <td colspan="3"><input type="text" id="sectionname" name="sectionName" class="inputStyle address-email" placeholder="Section Name" value=""  maxlength="100"></td>
                                                                             </tr>
                                                                            <tr >
                                                                               <td></td>
                                                                               <td colspan="3" align="center" >BILLING ADDRESS</td>
                                                                             </tr>
                                                                            <tr >
                                                                               <td></td>
                                                                               <td colspan="2" ><input type="radio" value="same"  name="copyaddress"  onclick="copyaddressdetails()" />
                                                                                Same as Company Address</td>
                                                                               <td colspan="2"><input type="radio" value="diff"  name="copyaddress" onClick="newaddress()" />
                                                                                A Different Address</td>
                                                                             </tr>
                                                                            <tbody id="sectioninformation" style="display:none">
                                                                               <tr>
                                                                                <td>Address</td>
                                                                                <td colspan="3"><input type="text" placeholder="Address" class="inputStyle address-email" id="sectionaddress" name="sectionAddress" /></td>
                                                                              </tr>
                                                                               <tr>
                                                                                <td>City</td>
                                                                                <td><input type="text" class="inputStyle"  id="sectioncity" name="sectionCity" placeholder="Enter City Name" value=""  maxlength="20"></td>
                                                                                <td>Pincode</td>
                                                                                <td><input type="text" class="inputStyle" id="sectionpincode" name="sectionPincode" placeholder="Enter Pincode" value=""  maxlength="6"></td>
                                                                              </tr>
                                                                               <tr>
                                                                                <td>State</td>
                                                                                <td><input type="text" class="inputStyle" id="sectionstate" name="sectionState" placeholder="Enter State Name" value=""  maxlength="20"></td>
                                                                                <td>Landline No</td>
                                                                                <td><input type="text" class="inputStyle" id="sectionphone" name="sectionPhone" placeholder="Enter Landline No" value=""  maxlength="10"></td>
                                                                              </tr>
                                                                             </tbody>
                                                                          </table>
                                                                           <hr/>
                                                                           <button type="submit" value="createSection" class="button"  id="createSectionBtn">Save</button>
                                                                           <input type="button"  class="button cancel" value="Cancel"  />
                                                                         </form>
                                                                      </section>
                                                                     </div><!--end of section modal-->
                                            
                                                                    <div id="addressmodal" class="popupContainerStyle" style="display:none;">
                                                                           <header class="popupHeaderStyle"> <span class="header_title">Employee Address</span> <span class="modal_close"><i class="fa fa-times"></i></span> </header>
                                                                           <section class="popupBodyStyle">
                                                                            <form id="saveEmployeeForm" method="post" enctype="multipart/form-data" autocomplete="off">
                                                                               <input type="hidden" id="employeeId" value="" name="employeeId"/>
                                                                               <table>
                                                                                <tbody>
                                                                                   <tr>
                                                                                    <td width="110">Employee Name</td>
                                                                                    <td colspan="3" ><select id="empTitle" name="empTitle" class="inputStyle selectStyle">
                                                                                        <option value="" selected="selected">----</option>
                                                                                        <option value="Mr.">Mr.</option>
                                                                                        <option value="Ms.">Ms.</option>
                                                                                      </select>
                                                                                       <input type="text" class="inputStyle cnameStyle" id="empName" name="empName" placeholder="First and Last Name" value="" onKeyUp="this.value=this.value.replace(/[^a-z A-Z]/g,'');" maxlength="100" ></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td >Address</td>
                                                                                    <td colspan="3"><input type="text" placeholder="Address" class="inputStyle address-email" id="empAddress" name="empAddress" /></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td>City</td>
                                                                                    <td><input type="text" class="inputStyle"  id="empCity" name="empCity" placeholder="Enter City Name" value="" onKeyUp="this.value=this.value.replace(/[^a-z A-Z]/g,'');" maxlength="20"></td>
                                                                                    <td width="90" align="center">Pincode</td>
                                                                                    <td><input type="text" class="inputStyle" id="empPincode" name="empPincode" placeholder="Enter Pincode" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="6"></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td>State</td>
                                                                                    <td><input type="text" class="inputStyle" id="empState" name="empState"  placeholder="Enter State Name" value="" onKeyUp="this.value=this.value.replace(/[^a-z A-Z]/g,'');" maxlength="20"></td>
                                                                                    <td align="center">Landline No</td>
                                                                                    <td><input type="text" class="inputStyle" id="empPhone" name="empPhone"  placeholder="Landline No" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10"></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td>Mobile No</td>
                                                                                    <td><input type="text" class="inputStyle" id="empMobile" name="empMobile" placeholder="Primary Contact No" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10"></td>
                                                                                    <td align="center">Alt Mobile</td>
                                                                                    <td><input type="text" class="inputStyle" id="empAltMobile" name="empAltMobile" placeholder="Alternate Contact No" value="" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10"></td>
                                                                                  </tr>
                                                                                   <tr>
                                                                                    <td>Email-Id</td>
                                                                                    <td colspan="3"><input type="text" class="inputStyle address-email" id="empEmail" name="empEmail" placeholder="Enter email id"  maxlength="50"></td>
                                                                                  </tr>
                                                                                   <tr id="employeeStatus" class="hideStyle">
                                                                                    <td>Status</td>
                                                                                    <td class="inputStyle" style="border:none; padding-left:0px;"><input type="checkbox" id="employeeInactive" name="employeeStatus"   value="inactive"  />
                                                                                       <label for="employeeInactive">Inactive</label></td>
                                                                                  </tr>
                                                                                 </tbody>
                                                                              </table>
                                                                               <hr/>
                                                                               <button type="submit" value="createEmployee" class="button"  id="createEmployeeBtn">Save</button>
                                                                               <input type="button"  class="button cancel" value="Cancel"/>
                                                                             </form>
                                                                          </section>
                                                                     </div><!--end of address modal--> 
                                                                     
                                                         </div><!-- end of tab content of tab2-->
                                            
                                        			</div> <!--end of tab2-->  
                                                    
                                                    <input type="button" class="button"  id="resetForm" value="New" />
                                   <button  value="createClient" class="button"  id="createClientBtn">Save</button>
                            
                                
                                                <div id="dialog-confirm" style="display:none" title="Client Saved">
                                                       <p  id="responseAlert" align="center" style="color:#060"></p>
                                                       <p style="color:#ED4835">Click <span style="color:green">"Yes"</span> if you wish to add any the following details for this client.</p>
                                                       <ul style="color:#ED4835">
                                                        <li>Booking Administrator</li>
                                                        <li>Billing Section</li>
                                                        <li>Tds Details</li>
                                                        <li>Employee Address</li>
                                                      </ul>
                                                 </div>            
                      </div>
                 
        
                                           <div id="clientlist"  class="tab-pane">
                                                    
                                                    <label>Quick Search</label>
                                                    <input type="text" id="clientName" value="" class="inputStyle" style="margin-top:20px"/>
                                                    <br />
                                                    <form id="savedClientsForm" method="post" enctype="multipart/form-data">
                                                       <input type="hidden" id="clientId1" name="clientid1"/>
                                                       <table class="table table-bordered table-hover" style="margin-top:20px; text-transform:capitalize" >
                                                        <thead align="left">
                                                           <th>ID</th>
                                                           <th width="300">Client Name</th>
                                                           <th width="600">Address</th>
                                                        </thead>
                                                        <tbody align="left" id="savedClients">
                                                        </tbody>
                                                      </table>
                                                       <img id="loader" src="images/icons/loader.gif">
                                                     </form>
                                         
                                       </div>
                                      
                     
                                       
                                       
                       
                       
           </div><!--end of tab content of tab1--> 
      </div><!--End of tab1-->
      </div>
      
      
      
    
     
     
    
     
     
      
      
       <!-- InstanceEndEditable -->
        </section>
        <!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      
      	 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
        
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="AdminLTE/starter1.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
             </li>
           
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Clients</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="client.php" id="newClient"><i class="fa fa-circle-o"></i> New Client</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Bookings</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Ledger</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Invoice Status</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Payment History</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-car"></i> <span>Vendors</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              <li><a href="vendor.php"><i class="fa fa-circle-o"></i> New Vendor</a></li>
              <li><a href="vendor-list.php"><i class="fa fa-circle-o"></i> Vendor List</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Ledger</a></li>
                 <li><a href="#"><i class="fa fa-circle-o"></i> Add Vehicle</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Payment Details</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Employees</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="new-employ.php"><i class="fa fa-circle-o"></i> New Employee</a></li>
                <li><a href="employee-list.php"><i class="fa fa-file"></i> Employee List</a></li>
                <li><a href="#"><i class="fa fa-euro"></i> Process Salary</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> Attendance</a></li>
                <li><a href="#"><i class="fa fa-book"></i> Log Sheet</a></li>
                <li><a href="#"><i class="fa fa-euro"></i> Process Loan</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i> <span>Invoice</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="#"><i class="fa fa-circle-o"></i> Generate Invoice</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Credit Invoices</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Invoice Summary</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Tax Summary</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-building"></i> <span>Company Profile</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="profile.php"><i class="fa fa-circle-o"></i> Add/Edit Profile</a></li>
              	<li><a href="car-tariff.php"><i class="fa fa-circle-o"></i> Car And Tariff</a></li>
                <li><a href="register-company-vehicle.php"><i class="fa fa-circle-o"></i> Register Vehicle</a></li>
                 
              </ul>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="AdminLTE/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      	
     
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <script src="AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="AdminLTE/dist/js/app.min.js"></script>
	<!-- InstanceBeginEditable name="scripts" --> 
 <!-- REQUIRED JS SCRIPTS --> 
 
 <!-- jQuery 2.1.4 --> 
 
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
 <script type="text/javascript" src="js/popup/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
 <script type="text/javascript" src="js/validation.js"></script> 
 <script>
  $(document).ready(function() {
    	
		$('#savedAdmins > tr').click(function(){
			
			 alert( $(this).index());
			
		});						
		
			$('#loader').hide();
			$('#clientlist').css('min-height','600px');
		  	$('#tab2').css('display','none');
		  	$("input[name='copyaddress']").removeAttr('checked'); 
		
		
			 $('#saveClientForm').on('reset',function(){
				 $('input,select').removeClass('error success');
				 $('#createClientBtn').html('save').css('background-image','').val('createClient').removeAttr('disabled');
			 })
   		
			 
			 
			$('#createClientBtn').click(function(){
				$('#saveClientForm').submit();
			})
			
			
			$("a[href=#clientlist]").click(function(){
				$('#resetForm').trigger('click');
				tabName="clientlist";
				if(!tabClick)
				{
					loadClient();
					tabClick=true;
				}
				
			});
			
			var timer = null;
			$('#clientName').keyup(function(){
			if (timer) 
				{
   			 		clearTimeout(timer); //cancel the previous timer.
    				timer = null;
				}
			timer = setTimeout(function(){$('#savedClients').html(''),
					startRow=0,
					loadClient()},700);
				
			});
			
			
			
			
			 $('#resetForm').click(function(){
				 $('#saveClientForm')[0].reset();
				 $('#tab2').css('display','none');
				 $('#savedAdmins,#savedSections,#savedEmployees,#savedClients').html('');
				 $('#clientName').val('')
				 
				 tabClick=false;
				 startRow=0;
			}) 
		 
		  
		var startRow=0;
		var tabClick=false;
		var tabName="";
		
		
				
		$(window).scroll(function() 
			{
				if($(window).scrollTop() + $(window).height() == $(document).height() && tabName=="clientlist")  //user scrolled to bottom of the page?
				{
				   loadClient();
				}
			});
			  
			  
			  function loadClient()
			  {
				 
				  name=$('#clientName').val();
				  $('#loader').show();
				  $.ajax({
							url:"ajax/saveclient.php",
							type:'post',
							data:{action:'loadSavedClients',startRow:startRow,clientName:name},
							success:function(data)
										{
											
											if(data[0]==0)
											{
												
												$('#loader').hide();
												
												
											}
											
											
											else
											{
												$('#loader').hide();
												startRow=data[0];
												var columns=data[1];
												
												for(var i=0;i<startRow;i++)
												{
													var row = $('<tr></tr>')
													for(var j=0;j<columns;j++)
													{
														$('<td>').text(data[2][i][j]).appendTo(row);
													}
													
													$(row).bind("click", function(){
														edit(this);
														$('#savedClientsForm').submit();
													});
													
													$('#savedClients').append(row);
													
												}
											}
											
											if($('#savedClients tr').length==0)
											{
												alert('No Record Found');
											}
											
											
										},
										
						error		: 	function (jqXHR, status, err) 
													{
														  alert(err);
													},
						
						});
				
			  }
		  
		
						
			 $('#saveClientForm').on('submit',(function (k) {
						
					 			 var a=validatetitle($('#c_title').attr('id'));
								 var b=validatename($('#c_name').attr('id'));
								 var c=validatename($('#c_address').attr('id'));
								 var d=validatecitystate($('#c_city').attr('id'));
								 var e=validatepincode($('#c_pincode').attr('id'));
								 var f=validatecitystate($('#c_state').attr('id'));
								 var g=validatealtnumber($('#c_contact').attr('id'));
								 var h=validatemobile($('#c_mobile1').attr('id'));
								 var i=validatealtnumber($('#c_mobile2').attr('id'));
						 		 var j=validateemail($('#c_email').attr('id'));
						
						
							 
						  if(a&&b&&c&&d&&e&&f&&g&&h&&i&&j)
							{
								k.preventDefault();
								
								var formdata=new FormData(this);
									formdata.append("action",$('#createClientBtn').attr('value'));
									formdata.append("clientid",$('#clientid').val());
									$('#createClientBtn').css('background-image','url(images/icons/progress_bar.gif)').html('Saving...').attr('disabled','true');
									
				
		 
									$.ajax({
												url			:	"ajax/saveclient.php",
												type		:	"POST",
												data		:	formdata,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												success		: 	function (data, status, jqXHR) 
																	{
																	
																			 if($('#createClientBtn').attr('value')=="createClient")
																			 	{
																			 		$('#responseAlert').html(data[0]);
																			   
																					   $( "#dialog-confirm" ).dialog({
																						  resizable: false,
																						  height:245,
																						  width:400,
																						  modal: true,
																						  buttons: {
																											"Yes": function() 
																													{
																														$('#clientid').val(data[1]);
																														$( this ).dialog( "close" );
																														$('#tab2').css('display','block');
																														$('#createClientBtn').html('save').css({'background-image':'','display':'none'}).val('updateClient');
																									
																													},
																											"No": function() 
																													{
																														
																														$( this ).dialog( "close" );
																														$('#createClientBtn').html('save').css('background-image','').val('createClient').removeAttr('disabled');
																														$('#saveClientForm')[0].reset();
																													}
																						  
																									}
																			   
																						});  
																			 	}//end if
																			else
																				{
																					alert('Client Updated Successfully');
																					$('#resetForm').trigger('click');
																				}
																				
																			
																		  
																	},
												error		: 	function (jqXHR, status, err) 
																	{
																		  alert("Local error callback.");
																	},
										});  //####### End of ajax #####   
									
							}
					 
						else
							{
								k.preventDefault();
								return false;
							}
				
			}));
			
			
			
			
			
			$('#saveAdminForm').on('submit',(function (k) {
						
					 var w=validatetitle($("#admintitle").attr('id'));
					 var x=validatemobile($("#adminmobile").attr('id'));
			         var y=validatename($("#adminname").attr('id'));
			         var z=validateemail($("#adminemail").attr('id'));
			
					
			
					if(w&&x&&y&&z&&isClientSaved())
					 						
							{
								k.preventDefault();
								
								var formdata=new FormData(this);
							
									formdata.append("action", $('#createAdminBtn').attr('value'));
									formdata.append("clientid",$('#clientid').val());
									$('#createAdminBtn').css('background-image','url(images/icons/progress_bar.gif)').attr('disabled','true');
									
				
		 
									$.ajax({
												url			:	"ajax/saveclient.php",
												type		:	"POST",
												data		:	formdata,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												success		: 	function (data, status, jqXHR) 
																	{
																	  		$('#createAdminBtn').css('background-image','').removeAttr('disabled');//button disabled for preventing multiple fomr submiting.
																	  		alert(data[0]);
																			 $(".cancel").trigger('click');
																			 if(data[2]=="update")
																			 {
																				  $('#savedAdmins tr:eq('+rownum+') td:eq(0)').html(data[1].adminId);
																				  $('#savedAdmins tr:eq('+rownum+') td:eq(2)').html(data[1].adminTitle.substring(0)+data[1].adminName.substring(0));
																				  $('#savedAdmins tr:eq('+rownum+') td:eq(3)').html(data[1].adminContact);
																				  $('#savedAdmins tr:eq('+rownum+') td:eq(4)').html(data[1].adminEmail);
																				  $('#savedAdmins tr:eq('+rownum+') td:eq(6)').html(data[1].adminStatus);
																				  
																				  rownum="";
																				 
																				
																				 
																			 }
																			 else
																			 {
																				 	$('#savedAdmins').append('<tr><td class="hideStyle">'+data[1].adminId+'</td><td class="hideStyle">'+data[1].clientId+'</td><td>'+data[1].adminTitle.substring(0)+data[1].adminName.substring(0)+'</td><td>'+data[1].adminContact+'</td><td>'+data[1].adminEmail+'</td><td><a class="edit edit_click">Edit</a></td><td>'+data[1].adminStatus+'</td></tr>');
							
																					$('.edit_click').unbind('click').bind("click", function(){
																					edit(this);
																					});
																				
																					$(".delete_click").unbind('click').bind("click", function(){
																					deleterow(this);
																					});
																					
																					addRowColor("savedAdmins");
																				$("#lean_overlay").trigger("click"); 
																			 }
																		  
																	},
												error		: 	function (jqXHR, status, err) 
																	{
																		  alert("Local error callback.");
																		  $('#createAdminBtn').css('background-image','').removeAttr('disabled');//button disabled for preventing multiple fomr submiting.
																	  	  $(".cancel").trigger('click');
																	},
										});  //####### End of ajax #####   
									
							}
					 
						else
							{
								k.preventDefault();
								return false;
							}
				
			}));
			
			
			
			
			
			$('#saveSectionForm').on('submit',(function (k) {
						
					    var t=validatename($('#sectionname').attr('id'));
						var u=validatename($('#sectionaddress').attr('id'));
						var v=validatecitystate($('#sectioncity').attr('id'));
						var w=validatepincode($('#sectionpincode').attr('id'));
						var x=validatecitystate($('#sectionstate').attr('id'));
						var y=validatephone($('#sectionphone').attr('id'));
			
		
			
					if(t&&u&&v&&w&&x&&y)
					 						
							{
								k.preventDefault();
								
								var formdata=new FormData(this);
							
									formdata.append("action", $('#createSectionBtn').attr('value'));
									formdata.append("clientid",$('#clientid').val());
									$('#createSectionBtn').css('background-image','url(images/icons/progress_bar.gif)').html('Saving...').attr('disabled','true');
									
				
		 
									$.ajax({
												url			:	"ajax/saveclient.php",
												type		:	"POST",
												data		:	formdata,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												success		: 	function (data, status, jqXHR) 
																	{
																	  		alert(data[0]);
																			$('#createSectionBtn').css('background-image','').html('Save').removeAttr('disabled');
																	  		
																			 $(".cancel").trigger('click');
																			  if(data[2]=="update")
																			 {
																				  $('#savedSections tr:eq('+rownum+') td:eq(0)').html(data[1].sectionId);
																				  $('#savedSections tr:eq('+rownum+') td:eq(2)').html(data[1].sectionName);
																				  $('#savedSections tr:eq('+rownum+') td:eq(3)').html(data[1].sectionAddress);
																				  $('#savedSections tr:eq('+rownum+') td:eq(4)').html(data[1].sectionCity);
																				  $('#savedSections tr:eq('+rownum+') td:eq(5)').html(data[1].sectionState);
																				  $('#savedSections tr:eq('+rownum+') td:eq(6)').html(data[1].sectionPincode);
																				  $('#savedSections tr:eq('+rownum+') td:eq(7)').html(data[1].sectionContact);
																				  $('#savedSections tr:eq('+rownum+') td:eq(8)').html(data[1].copyAddress);
																				  rownum="";
																			 }
																			else{$("#savedSections").append('<tr><td class="hideStyle">'+data[1].sectionId+'</td><td class="hideStyle">'+data[1].clientId+'</td><td>'+data[1].sectionName.substring(0).toUpperCase()+'</td><td class="hideStyle">'+ data[1].copyAddress	+'</td><td>'+data[1].sectionAddress+'</td><td>'+data[1].sectionCity+'</td><td >'+data[1].sectionState+'</td><td>'+data[1].sectionPincode+'</td><td>'+data[1].sectionContact+'</td><td><a class="edit edit_click">Edit</a></td><td><a class="edit delete_click">Delete</a></td></tr>');}
																			$(".edit_click").unbind('click').bind("click", function(){
																				edit(this);
																			});
																			
																			$(".delete_click").unbind('click').bind("click", function(){
																				deleterow(this);
																			});
																			
																				addRowColor("savedSections");
																			
																				$("#lean_overlay").trigger("click"); 
																			
																		
																	},
												error		: 	function (jqXHR, status, err) 
																	{
																		  alert("Local error callback.");
																		  $('#createSectionBtn').css('background-image','').html('Save').removeAttr('disabled');
																	  	  $(".cancel").trigger('click');
																	},
										});  //####### End of ajax #####   
									
							}
					 
						else
							{
								k.preventDefault();
								return false;
							}
				
			}));
			
			
			
			
			$('#saveEmployeeForm').on('submit',(function (k) {
						
					   	    var a=validatetitle($('#empTitle').attr('id'));
							var b=validatename($('#empName').attr('id'));
							var c=validatename($('#empAddress').attr('id'));
							var d=validatecitystate($('#empCity').attr('id'));
							var e=validatepincode($('#empPincode').attr('id'));
							var f=validatecitystate($('#empState').attr('id'));
							var g=validatealtnumber($('#empPhone').attr('id'));
							var h=validatemobile($('#empMobile').attr('id'));
							var i=validatealtnumber($('#empAltMobile').attr('id'));
							var j=validateemail($('#empEmail').attr('id'));
							
							if(a&&b&&c&&d&&e&&f&&g&&h&&i&&j)
							{
			
								k.preventDefault();
								
								var formdata=new FormData(this);
							
									formdata.append("action", $('#createEmployeeBtn').attr('value'));
									formdata.append("clientid",$('#clientid').val());
									$('#createEmployeeBtn').css('background-image','url(images/icons/progress_bar.gif)').html('Saving...').attr('disabled','true');
									
				
		 
									$.ajax({
												url			:	"ajax/saveclient.php",
												type		:	"POST",
												data		:	formdata,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												success		: 	function (data, status, jqXHR) 
																	{
																	  		
																			$('#createEmployeeBtn').css('background-image','').html('Save').removeAttr('disabled');
																	  		
																			 $(".cancel").trigger('click');
																			  if(data[2]=="update")
																			 {
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(0)').html(data[1].employeeId);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(2)').html(data[1].empTitle.substring(0)+data[1].empName.substring(0));
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(3)').html(data[1].empAddress);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(4)').html(data[1].empAddress+","+data[1].empCity+"-"+data[1].empPincode+","+data[1].empState);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(5)').html(data[1].empCity);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(6)').html(data[1].empPincode);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(7)').html(data[1].empState);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(8)').html(data[1].empPhone);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(9)').html(data[1].empMobile);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(10)').html(data[1].empAltmobile);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(11)').html(data[1].empEmail);
																				  $('#savedEmployees tr:eq('+rownum+') td:eq(13)').html(data[1].empStatus);
																				  rownum="";
																			 }
																			else{$("#savedEmployees").append('<tr><td class="hideStyle">'+data[1].employeeId+'</td><td class="hideStyle">'+data[1].clientId+'</td><td>'+data[1].empTitle.substring(0)+data[1].empName.substring(0)+'</td><td class="hideStyle">'+data[1].empAddress+'</td><td>'+data[1].empAddress+','+data[1].empCity+'-'+data[1].empPincode+','+data[1].empState+'</td><td class="hideStyle">'+data[1].empCity+'</td><td class="hideStyle">'+data[1].empPincode+'</td><td class="hideStyle">'+data[1].empState+'</td><td class="hideStyle">'+data[1].empPhone+'</td><td>'+data[1].empMobile+'</td><td>'+data[1].empAltmobile+'</td><td>'+data[1].empEmail+'</td><td><a class="edit edit_click">Edit</a></td><td>'+data[1].empStatus+'</td></tr>');}
																			$(".edit_click").unbind('click').bind("click", function(){
																				edit(this);
																			});
																			
																			$(".delete_click").unbind('click').bind("click", function(){
																				deleterow(this);
																			});
																			
																			addRowColor("savedEmployees");
																			
																				$("#lean_overlay").trigger("click"); 
																			
																		
																	},
												error		: 	function (jqXHR, status, err) 
																	{
																		  alert("Local error callback.");
																		  $('#createEmployeeBtn').css('background-image','').html('Save').removeAttr('disabled');
																	  	  $(".cancel").trigger('click');
																	},
										});  //####### End of ajax #####   
									
							}
					 
						else
							{
								k.preventDefault();
								return false;
							}
				
			}));
			
			
			
			$('#savedClientsForm').on('submit',(function (k) {
						
					 			$('#loader').show();
								k.preventDefault();
								var formdata=new FormData(this);
							
									formdata.append("action","retrieveClient");
									
									
									
				
		 
									$.ajax({
												url			:	"ajax/saveclient.php",
												type		:	"POST",
												data		:	formdata,
												contentType	: 	false,
												cache		:	false,
												processData	:	false,
												
												
												success		: 	function (data, status, jqXHR) 
																	{
																	  
																	
																		$('#saveClientForm')[0].reset();
																		$('html, body').animate({scrollTop: '0px'},0);
																		$('#savedAdmins').html('');
																		$('#savedSections').html('');
																		$('#savedEmployees').html('');
																		
																			$('#c_title').val(data[6][0][1]);
																			$('#c_name').val(data[6][0][2]);
																			$('#c_address').val(data[6][0][3]);
																			$('#c_city').val(data[6][0][4]);
																			$('#c_pincode').val(data[6][0][5]);
																			$('#c_state').val(data[6][0][6]);
																			$('#c_mobile1').val(data[6][0][7]);
																			$('#c_mobile2').val(data[6][0][8]);
																			$('#c_contact').val(data[6][0][9]);
																			$('#c_email').val(data[6][0][10]);
																			$('#createClientBtn').val('updateClient');
																			
																			$('#t1').click();
																			tabName="";
																			
																				//Retrieve and display Booking Administrator
																				if(!data[0]=="")//Condition to check if any admin exists in the database.If so display the admin tab with the details
																			{
																				var adminArrayLength=data[0];
																				var adminColumnLength=data[1];
																				
																				
																				$('#tab2').css('display','block');
																						
																						
																							
																							for(var i=0;i<adminArrayLength;i++)
																									 {
																										
																										var row = $('<tr></tr>');
																										
																										
																										for(var j=0;j<adminColumnLength;j++)
																											{
																												
																												if(j==0||j==1)
																												{
																													
																													 $('<td class="hideStyle">').text(data[7][i][j]).appendTo(row);
																													 
																												}
																												
																												
																												else if(j==2)
																												{
																													
																													$('<td>').text(data[7][i][j]+data[7][i][j+1]).appendTo(row);
																												}
																												
																												else if(j==3|j==6)
																												{
																												}
																												
																												else
																																																								 
																												 $('<td>').text(data[7][i][j]).appendTo(row);
																												
																											}
																										 
																										 
																										 		
																												
																												$('<td>').append('<a class="edit edit_click">Edit</a>').appendTo(row);
																												$('<td>').append(data[7][i][6]).appendTo(row);
																												$('#savedAdmins:last').append(row);
                                                                                                              	
																												$('.edit_click').unbind('click').bind("click", function(){
																												edit(this);
																												});
																									
																										}
																												
																												
																			}
																								
																								
																								if(!data[2]==0)
																								{
																									var sectionArrayLength=data[2];
																									var sectionColumnLength=data[3];
																									 
																									$('#tab2').css('display','block');
																								    for(var i=0;i<sectionArrayLength;i++)
																									 {
																										
																										var row = $('<tr></tr>')
																										
																										for(var j=0;j<sectionColumnLength;j++)
																											{
																												
																												if(j==0||j==1||j==8)
																												{
																													
																													 $('<td class="hideStyle">').text(data[8][i][j]).appendTo(row); 
																													 
																												}
																												else if(j==3)
																												{
																													
																													 $('<td class="caddress">').text(data[8][i][j]).appendTo(row); 
																													 
																												}
																												
																												else
																												 
																												 $('<td>').text(data[8][i][j]).appendTo(row); 
																												
																											}
																										 
																										 
																										 		
																												$('<td>').append('<a class="edit edit_click">Edit</a>').appendTo(row);
																												$('<td>').append('<a class="edit delete_click">Delete</a>').appendTo(row);
																												$('#savedSections:last').append(row);
																												
                                                                                                              	
																												$('.edit_click').unbind('click').bind("click", function(){
																												edit(this);
																												});
																									
																												$(".delete_click").unbind('click').bind("click", function(){
																												deleterow(this);
																												});
																									}
																									
																												//addRowColor("savedSections");
																				
																							}
																							
																							
																							
																							
																							
																							if(!data[4]==0)
																								{
																									$('#tab2').css('display','block');
																									var employeeArrayLength=data[4];
																									var employeeColumnLength=data[5];
																									
																							
																								    for(var i=0;i<employeeArrayLength;i++)
																									 {
																										
																										var row = $('<tr></tr>')
																										
																										for(var j=0;j<employeeColumnLength;j++)
																											{
																												
																												if(j==0||j==1||j==5 || j==6 || j==7 || j==8)
																												{
																													
																													 $('<td class="hideStyle">').text(data[9][i][j]).appendTo(row); 
																													 
																												}
																												
																												else if(j==2)
																												{
																																			//To concatenate Title and name
																													$('<td>').text(data[9][i][j]+data[9][i][j+1]).appendTo(row); 
																													
																													 
																												}
																												else if(j==3||j==12)
																												{
																												}
																												
																												else if(j==4)
																												{
																													 $('<td class="hideStyle">').text(data[9][i][j]).appendTo(row);
																													 $('<td>').text(data[9][i][j]+", "+data[9][i][j+1]+" - "+data[9][i][j+2]+", "+data[9][i][j+3]).appendTo(row).addClass('caddress'); 
																												}
																												
																																																																																	
																												else
																												 
																												 $('<td>').text(data[9][i][j]).appendTo(row).addClass('caddress'); 
																												
																											}
																										 
																										 
																										 		
																												$('<td>').append('<a class="edit edit_click">Edit</a>').appendTo(row);
																												
																												$('<td>').append(data[9][i][12]).appendTo(row);
																													
																												if(data[9][i][12]=="inactive")
																												{
																												row.css('color','red');
																												}
																												
																													$('#savedEmployees:last').append(row);
																												
																									
                                                                                                              	
																												$('.edit_click').unbind('click').bind("click", function(){
																												edit(this);
																												});
																									
																												
																									}
																									
																												//addRowColor("savedEmployees");
																					
																				
																							}
																							
																							
																							
																			if(data[0]==0 && data[2]==0 && data[4]==0)
																			{
																				$('#tab2').css('display','none');
																			}
																																					
																		    $('#loader').fadeOut();
																	},
												error		: 	function (jqXHR, status, err) 
																	{
																		  alert(err);
																		  $('#createAdminBtn').css('background-image','').removeAttr('disabled');//button disabled for preventing multiple fomr submiting.
																	  	  $(".cancel").trigger('click');
																	},
										});  //####### End of ajax #####   
									
							
					 
						
				
			}));
		  
});
		   
		   
			
var rownum="";		
function edit(rows)
	{
		var bodyid="#"+$(rows).closest('tbody').attr('id');
		
		rownum=$(rows).closest('tr').index();
		//alert(rownum);
		
		if(bodyid=="#savedAdmins")
		{
			$('#adminId').val($(''+bodyid+' tr:eq('+rownum+') td:eq(0)').text())
			$("#admintitle").val($(''+bodyid+' tr:eq('+rownum+') td:eq(2)').text().substring(0,3));
			$("#adminname").val($(''+bodyid+' tr:eq('+rownum+') td:eq(2)').text().substring(3));
			$("#adminmobile").val($(''+bodyid+' tr:eq('+rownum+') td:eq(3)').text());	
			$("#adminemail").val($(''+bodyid+' tr:eq('+rownum+') td:eq(4)').text());
			
			if($(''+bodyid+' tr:eq('+rownum+') td:eq(6)').text()=="inactive")
			{
				$('#adminInactive').prop('checked', true);
			}
			else
			{
				$('#adminInactive').prop('checked', false);
			}
				
			$("#createAdminBtn").html("Update").val('updateAdmin');
			$('#adminStatus').removeClass('hideStyle');
			$("#admintrigger").trigger('click');
			
			addRowColor("savedAdmins");
				
		}
		else if(bodyid=="#savedSections")
		{
			if($(''+bodyid+' tr:eq('+rownum+') td:eq(8)').text()=="same"){
			$('input[name="copyaddress"][value="same"]').attr('checked', 'checked').trigger('click');
			}
			else{$('input[name="copyaddress"][value="diff"]').attr('checked', 'checked').trigger('click');}
			$('#sectionId').val($(''+bodyid+' tr:eq('+rownum+') td:eq(0)').text())
			$('#sectionname').val($(''+bodyid+' tr:eq('+rownum+') td:eq(2)').text());
			$('#sectionaddress').val($(''+bodyid+' tr:eq('+rownum+') td:eq(3)').text());
			$('#sectioncity').val($(''+bodyid+' tr:eq('+rownum+') td:eq(4)').text());
			$('#sectionstate').val($(''+bodyid+' tr:eq('+rownum+') td:eq(5)').text());
			$('#sectionpincode').val($(''+bodyid+' tr:eq('+rownum+') td:eq(6)').text());
			$('#sectionphone').val($(''+bodyid+' tr:eq('+rownum+') td:eq(7)').text());
			$('#createSectionBtn').html("Update").val('updateSection');
			$('#sectiontrigger').trigger('click');
			addRowColor("savedSections");
			//$('').val($(''+tbody+' tr:eq('+rownum+') td:eq()').text());
		}
				
		else if(bodyid=="#savedEmployees")
		{
			$('#employeeId').val($(''+bodyid+' tr:eq('+rownum+') td:eq(0)').text())
			$('#empTitle').val($(''+bodyid+' tr:eq('+rownum+') td:eq(2)').text().substring(0,3));
			$('#empName').val($(''+bodyid+' tr:eq('+rownum+') td:eq(2)').text().substring(3));
			$('#empAddress').val($(''+bodyid+' tr:eq('+rownum+') td:eq(3)').text());
			$('#empCity').val($(''+bodyid+' tr:eq('+rownum+') td:eq(5)').text());
			$('#empPincode').val($(''+bodyid+' tr:eq('+rownum+') td:eq(6)').text());
			$('#empState').val($(''+bodyid+' tr:eq('+rownum+') td:eq(7)').text());
			$('#empPhone').val($(''+bodyid+' tr:eq('+rownum+') td:eq(8)').text());
			$('#empMobile').val($(''+bodyid+' tr:eq('+rownum+') td:eq(9)').text());
			$('#empAltMobile').val($(''+bodyid+' tr:eq('+rownum+') td:eq(10)').text());
			$('#empEmail').val($(''+bodyid+' tr:eq('+rownum+') td:eq(11)').text());
			$('#createEmployeeBtn').html("Update").val('updateEmployee');
			
			
			if($(''+bodyid+' tr:eq('+rownum+') td:eq(13)').text()=="inactive")
			{
				$('#employeeInactive').prop('checked', true);
			}
			else
			{
				$('#employeeInactive').prop('checked', false);
			}
			$('#employeeStatus').removeClass('hideStyle');
			
			$('#empAddress_trigger').trigger('click');
			addRowColor("savedEmployees");
		}
		else if(bodyid=="#savedClients")
		{
			
			$('#clientId1,#clientid').val($(''+bodyid+' tr:eq('+rownum+') td:eq(0)').text());
		}
	}	
		
		
			
	function deleterow(rows)
	{
		var x=confirm("Do you want to delete? ");
		if( x==true)
			{
				$(rows).closest('tr').remove();
				
			}
	}
	
/*	function addRowColor(rows){
		var tableBodyId="#"+rows;
		for(var i=0;i<$(''+tableBodyId+' tr').length;i++)
			{
				$(''+tableBodyId+' tr:even').css('background-color','#B8E8FA');
				$(''+tableBodyId+' tr:odd').css('background-color','#FFC');
				
			}
	}*/
	
		


	   
	function copyaddressdetails()
	{
		
		$("#sectioninformation").css('display','');
		$('#sectioninformation input').attr('readonly',true);
		$("#sectionaddress").val($("#c_address").val());
		$("#sectioncity").val($("#c_city").val());
		$("#sectionpincode").val($("#c_pincode").val());
		$("#sectionstate").val($("#c_state").val());
		$("#sectionphone").val($("#c_contact").val());
		
	}
	function newaddress()
	{
		
		$("#sectioninformation").css('display','');
		$('#sectioninformation input').removeAttr('readonly');
		$("#sectionaddress, #sectioncity, #sectionpincode, #sectionstate ,#sectionphone").val('');
		
		
	}
	
	
	function isClientSaved()
  {
	  
	if($('#clientid').length==0)
	{
		$("#lean_overlay").trigger("click");
				alert('Please save the client first');
				return false;
				
			}
			else
			{
				return true;
				
			}
 }
	$('#admintrigger,#sectiontrigger,#empAddress_trigger').leanModal({top : 100, overlay : 0.6, closeButton: ".modal_close" });
	
	
	
	
	$(".cancel").click(function(){
		$("#lean_overlay").trigger("click");
	});
	
	function clear(){
		$('.popupContainerStyle input[type="text"],input[type="email"]').val('').removeClass('error success');
		$('.popupContainerStyle select').val('').removeClass('error success');
		$("input[name='copyaddress']").removeAttr('checked');
		$("#sectioninformation").css('display','none');
		$("#createAdminBtn").val("createAdmin").html('Save');
		$("#createSectionBtn").val("createSection").html('Save');	
		$('#createEmployeeBtn').val('createEmployee').html('Save');
		
		$('#adminStatus,#employeeStatus').addClass('hideStyle');
		$('#adminInactive,#employeeInactive').prop('checked', false);
				
	}

</script> 
 <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. --> 
 
 <!-- InstanceEndEditable -->

  
</body>
<!-- InstanceEnd --></html>
