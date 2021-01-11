<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Evalu8</title>
	<link type="text/css" href="code/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="code/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="code/css/theme.css" rel="stylesheet">
    <link type="text/css" href="code/images/icons/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
    <link type="text/css" rel="stylesheet" href="ttable/timetablejs.css">
    <link type="text/css" rel="stylesheet" href="ttable/timetable.css">
	<link type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel='stylesheet'>
</head>
<body>
<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Evalu8 </a>
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
                                <h3>
                                   A level Schedules</h3>
                            </div>
                            <!-- <div class="module-body">
                            <div class="charts-single-pro shadow-reset nt-mg-b-30"> -->
                                
                                
                            <!-- </div>
                            </div> -->
                        </div>
                        <div class="timetable"></div>

                        <div class="control-group">
									<div class="controls">
									<form method="POST"><button type="submit" class="btn btn-large" name="topic" onclick="openForm()" style="border: solid 1px black;">Add Topic</button></form>
                                    
                                    </div>
                        </div>

                        <?php 
                         if(isset($_POST['topic'])){
                        ?>

                        <div class="form-popup" id="myForm">
                            <form method="POST" class="form-container">
                                <h1>Add Subject on Timetable</h1>

                                <div class="control-group">
									<label class="control-label" for="basicinput">Subject Name</label>
										<div class="controls">
                                            
										<input type="text" id="basicinput" placeholder="eg. Geo" class="span8" name="sub">
											
									</div>
                                </div>
                                <div class="control-group">
									<label class="control-label" for="basicinput">Day</label>
										<div class="controls">
                                            
										<select tabindex="1" data-placeholder="Select here.." class="span8" name="day">
                                            <option value="">Select here...</option>
                                            <option value="Monday">Monday</option>
											<option value="Tuesday">Tuesday</option>
											<option value="Wednesday">Wednesday</option>
											<option value="Thursday">Thursday</option>
											<option value="Friday">Friday</option>
										</select>
											
									</div>
                                </div>

                                <div class="control-group">
									<label class="control-label">Start Hour</label>
										<div class="controls">
                                            <label class="checkbox inline" >
													<input type="checkbox" name='check[]' value="8">8 am
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox"  name='check[]' value="9">9 am
                                            </label>
                                            <label class="checkbox inline" >
													<input type="checkbox" name='check[]' value="10">10 am
                                            </label>
                                            <label class="checkbox inline" >
													<input type="checkbox" name='check[]' value="11">11 am
                                            </label>
                                            <label class="checkbox inline" >
													<input type="checkbox" name='check[]' value="12">12 pm
                                            </label>
                                            <label class="checkbox inline" >
													<input type="checkbox" name='check[]' value="13">1 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='check[]' value="14">2 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='check[]' value="15">3 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='check[]' value="16">4 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='check[]' value="17">5 pm
                                            </label>
                                        </div>
                                </div>

                                <div class="control-group">
									<label class="control-label">Start Minutes</label>
										<div class="controls">
                                            <label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">00 mins
                                            </label>
                                            <label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">30 mins
                                            </label>
                                        </div>
                                </div>

                                <div class="control-group">
									<label class="control-label">End Hour</label>
										<div class="controls">
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="8">8 am
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="9">9 am
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="10">10 am
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="11">11 am
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="12">12 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="13">1 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="14">2 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="15">3 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="16">4 pm
                                            </label>
                                            <label class="checkbox inline">
													<input type="checkbox" name='scheck[]' value="17">5 pm
                                            </label>
                                        </div>
                                </div>

                                <div class="control-group">
									<label class="control-label">End Minutes</label>
										<div class="controls">
                                            <label class="radio inline">
													<input type="radio" name="optionsRadios1" id="optionsRadios1" value="option3">00 mins
                                            </label>
                                            <label class="radio inline">
													<input type="radio" name="optionsRadios1" id="optionsRadios2" value="option4">30 mins
                                            </label>
                                        </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-large" name="add" style="background-color: green; color: white;">Reserve Timeslot</button>
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
     include ('config.php');
         if(isset($_POST['add'])){

            $Sub = $_POST['sub'];
            $Day = $_POST['day'];
            $Check = $_POST['check'];
            $Option = $_POST['optionsRadios'];
            $Option2 = $_POST['optionsRadios1'];
            $Scheck = $_POST['scheck'];

            foreach ($Check as $hour){
                $Hour = $hour;
            }

            foreach ($Scheck as $shour){
                $Sechr = $shour;
            }

            if($Option=='option1'){
                $Min = '00';
            }
            else{
                $Min = '30';
            }
            if($Option2=='option3'){
                $Secmin = '00';
            }
            else{
                $Secmin = '30';
            }

           
            $sel = "INSERT INTO ttable(sub, day, hour, min, sechr, secmin) VALUES ('$Sub', '$Day', '$Hour', '$Min','$Sechr', '$Secmin')";

            mysqli_query($db, $sel);
            
         }
    ?>
    <!-- <script src="js/MindFusion.Scheduling.js" type="text/javascript"></script>
    <script src="js/schedule.js" type="text/javascript"></script> -->
    <script src="ttable/timetable.js" type="text/javascript"></script>
    <script>
        var timetable = new Timetable();
        timetable.setScope(8, 17); // optional, only whole hours between 0 and 23
        timetable.useTwelveHour(); //optional, displays hours in 12 hour format (1:00PM)

        timetable.addLocations(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']);
        
        //Add your events using addEvent(name, location, startDate, endDate[, options])
        <?php $que = "SELECT * FROM ttable";
            if ($result = mysqli_query($db, $que)){
                while($rows = mysqli_fetch_assoc($result)) { 
                    $day = $rows['day'];
                    $sub = $rows['sub'];
                    $hour = $rows['hour'];
                    $min = $rows['min'];
                    $sechr = $rows['sechr'];
                    $secmin = $rows['secmin'];
        ?>   
        timetable.addEvent('<?php echo($sub); ?>', '<?php echo($day);?>', new Date(2015,7,17,<?php echo($hour);?>, <?php echo($min); ?>), new Date(2015,7,17,<?php echo($sechr);?>, <?php echo($secmin
        ); ?>))
        //timetable.addEvent('Math', 'Monday', new Date(2015,7,17,9,15), new Date(2015,7,17,9,40));
        <?php
                }
            }
        ?>
        var renderer = new Timetable.Renderer(timetable);
        renderer.draw('.timetable'); // any css selector

    </script>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            }

        function closeForm() {
            document.getElementById("myForm").style.display = "hidden";
            }
    </script>
    <script>
        var schedule = new Timetable();
        schedule.setScope(8, 17); // optional, only whole hours between 0 and 23
        schedule.useTwelveHour(); //optional, displays hours in 12 hour format (1:00PM)

        schedule.addLocations(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday']);
        
        //Add your events using addEvent(name, location, startDate, endDate[, options])
        <?php $que = "SELECT * FROM otable";
            if ($result = mysqli_query($db, $que)){
                while($rows = mysqli_fetch_assoc($result)) {  
                    $Day = $rows['day'];
                    $Sub = $rows['sub'];
                    $Hour = $rows['hour'];
                    $Min = $rows['min'];
                    $Sechr = $rows['sechr'];
                    $Secmin = $rows['secmin'];
        ?>   
        schedule.addEvent('<?php echo($Sub); ?>', '<?php echo($Day);?>', new Date(2015,7,17,<?php echo($Hour);?>, <?php echo($Min); ?>), new Date(2015,7,17,<?php echo($Sechr);?>, <?php echo($Secmin); ?>))
        //timetable.addEvent('Math', 'Monday', new Date(2015,7,17,9,15), new Date(2015,7,17,9,40));
        <?php
                }
            }
        ?>
        var render = new Timetable.Renderer(schedule);
        render.draw('.schedule'); // any css selector
    </script>
    </body>
    </html>