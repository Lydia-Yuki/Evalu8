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
                                        
										<a href="dashboard.php"><button type="submit" class="btn btn-large" name="back">Back</button></a>
                                    </div>
                                </div>

						<div class="module">
                            <div class="module-head">
								<h3>Add Student</h3>
                            </div>
                            <div class="module-body">

									<form class="form-horizontal row-fluid" method="POST">
										<div class="control-group">
											<label class="control-label" for="basicinput">Student ID</label>
											<div class="controls">
                                        
												<input type="text" id="basicinput" placeholder="Enter student ID" class="span8" name="studID">
												<span class="help-inline">10 Characters</span>
											
                                            </div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">First Name</label>
											<div class="controls">
                                            
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8" name="fname">
                                            
											</div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Last Name</label>
											<div class="controls">
                                            
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8" name="lname">
											
											</div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Date of Birth</label>
                                            <div class="controls">
                                            
                                            <input type="date" name="dob">

                                            </div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Address</label>
											<div class="controls">
                                            
												<input type="text" id="basicinput" placeholder="eg. 5 Ternure, Mandara, Harare" class="span8" name="address">
											
											</div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Parent / Guardian</label>
											<div class="controls">
                                            
												<input type="text" id="basicinput" placeholder="eg. I. Moyo" class="span8" name="parents">
												<span class="help-inline">First initial and surname only</span>
											
                                            </div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Contact</label>
											<div class="controls">
                                            
												<input type="text" id="basicinput" placeholder="eg. 0771231234" class="span8" name="contact">
											
                                            </div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label">Gender</label>
											<div class="controls">
                                                
                                                <label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Female
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Male
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Other
                                                </label>
                                                
                                                
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Select Class</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="select">
													<option value="">Select here..</option>
													<option value="1 North">1 North</option>
													<option value="1 East">1 East</option>
													<option value="1 South">1 South</option>
													<option value="2 North">2 North</option>
													<option value="2 East">2 East</option>
                                                    <option value="2 South">2 South</option>
                                                    <option value="3 North">3 North</option>
													<option value="3 East">3 East</option>
                                                    <option value="3 South">3 South</option>
                                                    <option value="4 North">4 North</option>
													<option value="4 East">4 East</option>
													<option value="4 South">4 South</option>
												</select>
											</div>
                                        </div>
                                        <div class="control-group">
											<div class="controls">
                                        
												<button type="submit" class="btn" name="submit">Submit</button>
											
                                            </div>
										</div>
									</form>
							</div>
                        </div>
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
    include ('config.php');
    //session_start();

    if (isset($_POST['submit'])) {
	// receive all input values from the form
	    $Class = $_POST['select'];
        $Option = $_POST['optionsRadios'];
        $Contact = $_POST['contact'];
        $Parent = $_POST['parents'];
        $Address = $_POST['address'];
        $DOB = $_POST['dob'];
        $Lname = $_POST['lname'];
        $Fname = $_POST['fname'];
        $StudID = $_POST['studID'];

        if($Option=='option1'){
            $Gender = 'Female';
        }
        elseif($Option=='option2'){
            $Gender = 'Male';
        }
        else{

            $Gender = 'Other';
        }

        $sel = "INSERT INTO students (stud_id, first_name, last_name, DOB, address, parent, contact, gender, class) 
        VALUES ('$StudID','$Fname', '$Lname', '$DOB', '$Address', '$Parent', '$Contact', '$Gender', '$Class')";

        mysqli_query($db, $sel);
        $que = "INSERT INTO eval (stud_id) VALUES ('$StudID')";
        mysqli_query($db,$que);
		//header('location: students.php');
    }
    ?>

	<script src="code/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="code/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="code/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="code/scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>