<!doctype html>
<html lang="en">
<head>
<script>
window.history.forward();


</script>

<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>POLL DETAILS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style type="text/css">
<!--
.style1 {color: #0000FF}
-->
    </style>
</head>
<body>
<?php
session_start();

$uname=$_SESSION['t1'];



?>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


<div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.html" class="simple-text">
                   Online Voting
                </a>
            </div>
<?php
$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$rh=mysql_query("select * from voter_info where election_id='$uname'");
$rs=mysql_fetch_array($rh);



?>
            <ul class="nav">
                <li>
                    <a href="ward_details_user.php?id=<?php echo $rs['ward_no'];?>">
                        <i class="pe-7s-graph"></i>
                        <p>Ward Details</p>
                    </a>
                </li>
                <li>
                <li class="active">
                    <a href="poll_details.php">
                        <i class="pe-7s-user"></i>
                        <p>Poll Details</p>
                    </a>
                </li>
                <li>
                    <a href="candidate_info_view1.php">
                        <i class="pe-7s-note2"></i>
                        <p>Check Candidate Info</p>
                    </a>
                </li>
                <li>
                    <a href="apply_vote_user.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Apply Vote</p>
                    </a>
                </li>
                <li>
                    <a href="check_result_voter.php">
                        <i class="pe-7s-science"></i>
                        <p>Check Result</p>
                    </a>
                </li>
                <li>
                    <a href="changepass.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Change Password</p>
                    </a>
                </li>
               
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <marquee scrollamount="3" onMouseOut="start()" onMouseOver="stop()" bgcolor="#FF0000">
BE BRIGHT VOTE FOR RIGHT >>
 HAVE A VISION? MAKE A BRIGHT DECISION >>
 YOUR VOTE YOUR FUTURE >>
 YOU VOTE BECAUSE IT IS RIGHT AND RESPONSIBILITY >>
 SHAPE TOMORROW BY VOTING TODAY >>
 IF YOU DON'T VOTE YOU LOSE RIGHT A COMPLIANT >>
 VOTE FOR BETTER WORLD >> 
 DON'T BE QUITTER BE A VOTER >>
 MAN WITHOUT A VOTE IS MAN WITHOUT A PROTECTION >>
 YOUR VOTE YOUR VOICE >>
 VOTE FOR ONE THAT MAKE YOU PROUD >>
 THE BALLOT IS STRONGER THAN BULLET >>
 BE BRIGHT VOTE FOR WHAT IS RIGHT >>
</marquee></div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="voter_home.php">
                              Home
                            </a>
                        </li>
                        
                        <li>
                            <a href="index.html">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title style1"><strong style="color:#0033FF;">POLL INFORMATION</strong></h4>
                              <p class="category">&nbsp;</p>
                          </div>
                            <div class="content table-responsive table-full-width">
                            <form method="post" action="ward_details.php">
                              <div align="center">
                                <p align="justify"><strong>POLLING DATE</strong>: <strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25/4/17</strong></p>
                                <p align="justify"><strong>POLLING TIME: 6AM TO 6PM</strong></p>
                                <p align="justify"><strong>COUNTING DATE: 25/4/17</strong></p>
                                <p align="justify"><strong>RESULT ANNOUNCEMENT TIME: 7PM</strong></p>
                                <p align="justify"></p>
                              </div>
                            </form>

                          </div>
                        </div>
                    </div>


                    </div>
            </div>
        <br><br><br><br><br><br><br><br>

        <footer class="footer">
               <p align="center" class="copyright pull-right"><center>
                 <strong>&copy;</strong><span class="style1 style1"><strong>ONLINE VOTING Theme. All Rights Reserved.<br>
                Online Voting System By CS DEPT, K.H.K.I.E, Dharwad, Karnataka, INDIA.</strong> </span></p>
  </div>
        </footer>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
