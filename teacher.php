<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="code/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="code/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="code/css/theme.css" rel="stylesheet">
    <link type="text/css" href="code/images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
	<link type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel='stylesheet'>
</head>
<body>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Evalu8 </a>
                            <div class="nav-collapse collapse navbar-inverse-collapse">
                                <ul class="nav pull-right">
                                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="images/icons/favicon.ico" class="nav-avatar" />
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Your Profile</a></li>
                                            <li><a href="#">Edit Profile</a></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li class="divider"></li>
                                            <li><a href="index.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                </div>
            </div>
    </div>
    <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="dashboard.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="addstudent.php"><i class="menu-icon icon-paste"></i>Add Students </a>
                                </li>
                                <li><a href="info.php"><i class="menu-icon icon-book"></i>View Students</a></li>
                                <li><a href="schedule.php"><i class="menu-icon icon-tasks"></i>A level Schedules</a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="overall.php"><i class="menu-icon icon-bar-chart"></i> Overall Evaluations </a></li>
                                <li><a href="eval.php"><i class="menu-icon icon-bar-chart"></i>Evaluation by Form </a></li>
                                <li><a href="teacher.php"><i class="menu-icon icon-paste"></i>Add Teachers</a></li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="index.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <div class="span9">
					<div class="content">
                                <div class="control-group">
									<div class="controls">
                                        
										<a href="students.php"><button type="submit" class="btn btn-large" name="back">Back</button></a>
                                    </div>
                                </div>
						<div class="module">
							<div class="module-head">
								<h3>Teachers</h3>
							</div>
							<div class="module-body">
								<table class="table">
								  <thead>
									<tr>
									  <th>ID</th>
                                      <th>Teacher Name</th>
                                      <th>Subject/Class</th>
									</tr>
                                  </thead>
                                  <tbody>
                                        <?php 
                                            include ('config.php');
                                            // session_start();
                                            $sel = 'SELECT * FROM teacher';

                                            if ($result = mysqli_query($db, $sel)){
                                                while($rows = mysqli_fetch_assoc($result)) {  
                                         ?>   
                                        <tr>
                                            <td><?php echo $rows['id']?></td>
                                            <td><?php echo $rows['name']?></td>
                                            <td><?php echo $rows['subject']?></td>
                                        </tr>
                                        <?php
                                                }
                                            }

                                            else { echo "0 results"; }
                                        ?>
                                  </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="control-group">
									<div class="controls">
									<form method="POST"><button type="submit" class="btn btn-large" name="teach" onclick="openForm()" style="border: solid 1px black;">Add Teacher</button></form>
                                    
                                    </div>
                        </div>

                        <?php 
                         if(isset($_POST['teach'])){
                        ?>

                        <div class="form-popup" id="myForm">
                            <form method="POST" class="form-container">
                                <h1>Add Subject on Timetable</h1>

                                <div class="control-group">
									<label class="control-label" for="basicinput">Teacher ID</label>
										<div class="controls">
                                            
										<input type="text" id="basicinput" placeholder="eg. 001257" class="span2" name="id">
											
									</div>
                                </div>
                                <div class="control-group">
									<label class="control-label" for="basicinput">Teacher Name</label>
										<div class="controls">
                                            
										<input type="text" id="basicinput" placeholder="eg. P. Masvikeni" class="span4" name="name">
											
									</div>
                                </div>
                                <div class="control-group">
									<label class="control-label" for="basicinput">Subject/Class Name</label>
										<div class="controls">
                                            
										<input type="text" id="basicinput" placeholder="eg. Geo/2 North" class="span4" name="sub">
											
									</div>
                                </div>
                               
                                <br>
                                <button type="submit" class="btn btn-large" name="add" style="background-color: green; color: white;">Add New Teacher</button>
                                <br>
                                <button type="submit" class="btn btn-large" name="close" onclick="closeForm()" style="background-color: red; color: white;">Close</button>
                            </form>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
				    </div>
			    </div>
		    </div>
    </div>
    <div class="footer">
		<!-- <div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div> -->
    </div>

    <?php 
         if(isset($_POST['add'])){

            $Sub = $_POST['sub'];
            $Id = $_POST['id'];
            $Name = $_POST['name'];

            $sel = "INSERT INTO teacher(id, name, subject) VALUES ('$Id', '$Name', '$Sub')";

            mysqli_query($db, $sel);
            header('location: teacher.php');
         }
         
    ?>
    
    <script src="code/scripts/jquery-1.9.1.min.js"></script>
	<script src="code/scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="code/bootstrap/js/bootstrap.min.js"></script>
	<script src="code/scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
</html>