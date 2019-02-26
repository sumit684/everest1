<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <title>Startmin - Bootstrap Admin Theme</title>
		
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
		
        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">
		
        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
		
        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
		
        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
		
        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
		<?php
			//$emp_id = $_REQUEST['emp_id'];
			//$emp_id="18c4090";
			
             $emp_id = $_REQUEST['emp_id11'];
            $pass = $_REQUEST['pass11'];
                           
            
			include('dbcon.php');
			$qry = "SELECT * FROM `user`where `emp_id`='$emp_id' and `pass`='$pass' ";
			$run = mysqli_query($conn,$qry);
			if(mysqli_num_rows($run)>0)
			{
				$dada = (mysqli_fetch_assoc($run));
				
			}
			else
			echo "<script>alert('Error');</script>"
		?>
        <div id="wrapper">
			
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                     <a class="navbar-brand" href="index.php"><img src='image\logoeverest.png' alt='' width='' height="50" style='margin-top:0px;'></a>
                </div>
				
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				
                
				
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #eff0f2;">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
						</a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
									</div>
								</a>
							</li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
					</li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
						</a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
							</li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
							</li>
                            <li class="divider"></li>
                            <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
                <!-- /.navbar-top-links -->
				
               <br> <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
										</button>
									</span>
								</div>
                                <!-- /input-group -->
							</li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
							</li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.php">Flot Charts</a>
									</li>
                                    <li>
                                        <a href="morris.php">Morris.js Charts</a>
									</li>
								</ul>
                                <!-- /.nav-second-level -->
							</li>
                            <li>
                                <a href="product_plan.php"><i class="fa fa-table fa-fw"></i>Product Plan</a>
							</li>
                            <li>
                                <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
							</li>
                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.php">Panels and Wells</a>
									</li>
                                    <li>
                                        <a href="buttons.php">Buttons</a>
									</li>
                                    <li>
                                        <a href="notifications.php">Notifications</a>
									</li>
                                    <li>
                                        <a href="typography.php">Typography</a>
									</li>
                                    <li>
                                        <a href="icons.php"> Icons</a>
									</li>
                                    <li>
                                        <a href="grid.php">Grid</a>
									</li>
								</ul>
                                <!-- /.nav-second-level -->
							</li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
									</li>
                                    <li>
                                        <a href="#">Second Level Item</a>
									</li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
											</li>
                                            <li>
                                                <a href="#">Third Level Item</a>
											</li>
                                            <li>
                                                <a href="#">Third Level Item</a>
											</li>
                                            <li>
                                                <a href="#">Third Level Item</a>
											</li>
										</ul>
                                        <!-- /.nav-third-level -->
									</li>
								</ul>
                                <!-- /.nav-second-level -->
							</li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.php">Blank Page</a>
									</li>
                                    <li>
                                        <a href="login.php">Login Page</a>
									</li>
								</ul>
                                <!-- /.nav-second-level -->
							</li>
						</ul>
					</div>
                    <!-- /.sidebar-collapse -->
				</div>
                <!-- /.navbar-static-side -->
			</nav>
			
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User Profile</h1>
						</div>
                        <!-- /.col-lg-12 -->
					</div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    User Details
								</div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<tbody>
													
													<tr>
														<th colspan="">Employee Id</th><td colspan=""><?php echo $dada['emp_id']; ?></td>
														<th>Designation</th><td><?php echo $dada['emp_dept']; ?></td>
													</tr>
													<tr>
														<th>Name</th><td><?php echo $dada['emp_name']; ?></td>
														<th >Father/Husband Name</th><td colspan="2"><?php  ?></td>
													</tr>
													<tr>
														<th>Password</th><td><?php echo $dada['pass']; ?></td>
														<th>Privilege</th><td><?php echo $dada['privilege']; ?></td>
													</tr>
													<tr>
														<th>Status</th><td><?php echo $dada['status']; ?></td>
														<th>Phone Number </th><td><?php  ?></td>
													</tr>
													<tr>
														
														
														<th>Email Id</th><td><?php  ?></td>
														<th></th><?php  ?><td></td>
													</tr>
													<tr>
														<th colspan="2">Door No.House / Apartment</th><td colspan="2"><?php  ?></td>
													</tr>
													<tr>
														<th colspan="">City </th><td><?php  ?></td>
														<th colspan="">State</th><td><?php  ?></td>
													</tr>
													<tr>
														<th colspan="2">Pincode</th><td><?php  ?></td>
													</tr>
													
	
													<tr>
														
													</tr>	
													
													<tr>
														<th colspan="4"><center><a href="login.php" style="background-color:green;" class="btn btn-lg btn-info">Sign Out</a></center></th>
													</tr>
													</tbody>
													</table>
												</div>
											</div>
											
								</div>
								
							</div>
							
						</div>
										