<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="signup/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="signup/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.ico">
    <link href="signup/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="signup/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="signup/css/main.css" rel="stylesheet" media="all">

</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3" >
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Username" name="username">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pass">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="conpassword">
                        </div>
                        <div class="p-t-10">
                            <input class="btn btn--pill btn--green" type="submit" name="submit" value ="Sign Up">
                        </div>
                        <div class="p-t-10">
                            <a href = 'login.php'><button class="btn btn--pill btn--green" type="submit" style="width: 260px">Log In<a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    include ('config.php');
    session_start();

    if (isset($_POST['submit'])) {
	// receive all input values from the form
	    $Username = $_POST[username];
        $Password = $_POST[pass];
        $ConPassword = $_POST[conpassword];

    if ($Password == $ConPassword){
        $sel = "INSERT INTO admin_tbl (username, pass) 
        VALUES ('$Username','$Password')";

        mysqli_query($db, $sel);
        echo("You have successfully signed up");
		header('location: login.php');
        }
    else{
        echo("Passwords do not match");
   }
    }
    ?>
    <script src="signup/vendor/jquery/jquery.min.js"></script>

    <script src="signup/vendor/select2/select2.min.js"></script>
    <script src="signup/vendor/datepicker/moment.min.js"></script>
    <script src="signup/vendor/datepicker/daterangepicker.js"></script>

    <script src="signup/js/global.js"></script>

</body>

</html>