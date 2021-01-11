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
	<link type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel='stylesheet'>
    <script src="charts/js/jquery.min.js" type="text/javascript"></script>
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
                        <div class="module" style='width:49%; height: 50%; float: left'>
                            <div class="module-head">
                                <h3>
                                   Form 1 Evaluation</h3>
                            </div>
                            <div class="module-body">
                            <div id="chart-container">
                                
                                 <canvas id="graphCanvas"></canvas>
                            </div>
                            
                            </div>
                        </div>
                        <div class="module" style='width:49%; height: 50%; float: right'>
                            <div class="module-head">
                                <h3>
                                   Form 2 Evaluation</h3>
                            </div>
                            <div class="module-body">
                            <div id="chart-container">
                                
                                 <canvas id="graphsCanvas"></canvas>
                            </div>
                            
                            </div>
                        </div>
                        <div class="module" style='width:49%; height: 50%; float: left'>
                            <div class="module-head">
                                <h3>
                                   Form 3 Evaluation</h3>
                            </div>
                            <div class="module-body">
                            <div id="chart-container">
                                
                                 <canvas id="graphCanvas2"></canvas>
                            </div>
                            
                            </div>
                        </div>
                        <div class="module" style='width:49%; height: 50%; float: right'>
                            <div class="module-head">
                                <h3>
                                   Form 4 Evaluation</h3>
                            </div>
                            <div class="module-body">
                            <div id="chart-container">
                                
                                 <canvas id="graphsCanvas2"></canvas>
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
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div> -->
    </div>

    <script>
        $( document ).ready(function () {
            showGraph();
            showGraphs();
            showGraph2();
            showGraphs2();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    //console.log(data);
                     var point = [];
                    var clas = [];

                    
                    for (var i in data) {
                        //console.log(data[i]);
                        point = point + data[i].points;
                        clas = clas + data[i].class;
                    }

                    
                     console.log(point);
                    var chartdata = {
                        labels: ['1 East','1 North','1 South'],
                        datasets: [
                            {
                                label: 'Evaluation',
                                backgroundColor: '#7455e6',
                                borderColor: '#6543e6',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: point
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }

        function showGraphs()
        {
            {
                $.post("data2.php",
                function (data)
                {
                    //console.log(data);
                     var point = [];
                    var clas = [];

                    
                    for (var i in data) {
                        //console.log(data[i]);
                        point = point + data[i].points;
                        clas = clas + data[i].class;
                    }

                    
                     console.log(point);
                    var chartdata = {
                        labels: ['2 East','2 North','2 South'],
                        datasets: [
                            {
                                label: 'Evaluation',
                                backgroundColor: '#e65ccf',
                                borderColor: '#e32dc5',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: point
                            }
                            
                        ]
                    };

                    var graphTarget = $("#graphsCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }

        function showGraph2()
        {
            {
                $.post("data3.php",
                function (data)
                {
                    //console.log(data);
                     var point = [];
                    var clas = [];

                    
                    for (var i in data) {
                        //console.log(data[i]);
                        point = point + data[i].points;
                        clas = clas + data[i].class;
                    }

                    
                     console.log(point);
                    var chartdata = {
                        labels: ['3 East','3 North','3 South'],
                        datasets: [
                            {
                                label: 'Evaluation',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: point
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas2");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }

        function showGraphs2()
        {
            {
                $.post("data4.php",
                function (data)
                {
                    //console.log(data);
                     var point = [];
                    var clas = [];

                    
                    for (var i in data) {
                        //console.log(data[i]);
                        point = point + data[i].points;
                        clas = clas + data[i].class;
                    }

                    
                     console.log(point);
                    var chartdata = {
                        labels: ['4 East','4 North','4 South'],
                        datasets: [
                            {
                                label: 'Evaluation',
                                backgroundColor: '#b355e6',
                                borderColor: '#b040ed',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: point
                            }
                        ]
                    };

                    var graphTarget = $("#graphsCanvas2");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }
        </script>


    <script src="charts/js/Chart.min.js" type="text/javascript"></script>
    <script src="charts/js/Chart.js"type="text/javascript"></script>
    <script src="charts/js/Chart.bundle.js" type="text/javascript"></script>
    
    <script src="charts/js/samples/utils.js" type="text/javascript"></script>
    <!-- <script src="js/Chart.js"></script>
    <script src="js/line-chart.js"></script>
    <script src="charts/main.js"></script>
    <script src="charts/bootstrap.min.js"></script>
    <script src="charts/jquery-1.11.3.min.js"></script>
    <script src="charts/jquery.sticky.js"></script>
    <script src="charts/jquery.scrollUp.min.js"></script> -->

    </body>
    </html>
