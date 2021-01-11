<!DOCTYPE html>
<html lang="en">
<head>
   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
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
                                            <li><a href="#">Logout</a></li>
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
                            <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="addstudent.php" class="btn-box small span4"><i class="icon-edit"></i><b>Add Students</b>
                                                </a><a href="students.php" class="btn-box small span4"><i class="icon-group"></i><b>Students</b>
                                                </a><a href="overall.php" class="btn-box small span4"><i class="icon-exchange"></i><b>Overall Evaluation</b>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div> -->
                                    </div>
                            </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <!-- <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div> -->
        </div>
        <script src="code/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="code/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="code/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="code/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="code/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="code/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="code/scripts/common.js" type="text/javascript"></script>
      
</body>
</html>