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
.style2 {
	color: #0000FF;
	font-weight: bold;
}
.style4 {
	color: #000000;
	font-weight: bold;
}
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
                <a href="ec_home.php" class="simple-text">
                   Online Voting
                </a>
            </div>

            <ul class="nav">
                 <li>
                   <a href="add_voter.html">
                        <i class="pe-7s-user"></i>
                        <p>Add Voter Info</p>
                    </a>
                </li>
                <li>
                    <a href="candidate_info.html">
                        <i class="pe-7s-user"></i>
                        <p>Add Candidate Info</p>
                    </a>
                </li>
                <li>
                    <a href="add_ward.html">
                        <i class="pe-7s-graph"></i>
                        <p>Add Ward Info</p>
                    </a>
                </li>
                <li class="active">
                    <a href="poll_menu_admin.html">
                        <i class="pe-7s-note2"></i>
                        <p>Add Poll Info</p>
                    </a>
                </li>
                <li>
                    <a href="check_result.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Result</p>
                    </a>
                </li>
                <li>
                    <a href="changepass.php">
                        <i class="pe-7s-key"></i>
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
                    <br><marquee scrollamount="3" onMouseOut="start()" onMouseOver="stop()" bgcolor="#FF0000">
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
                        <li class="style4">
                           <a href="ec_home.php">
                              Home                            </a>                        </li>
                        
<li class="style4">
                            <a href="index.html">
                                Log out                            </a>                        </li>
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
                            
                            <?php
							$con=mysql_connect("localhost","root","");
							mysql_select_db("online_voting",$con);
											
										$ss="select * from poll_info";
									     $rs=mysql_query($ss);

  							            $rw=mysql_fetch_array($rs);
									
							?>
                              <div align="center">
                                <p align="justify">: <strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>
                                <table width="286" border="1">
                                  <tr>
                                    <td width="174"><strong>POLLING DATE</strong></td>
                                    <td width="96"><?php echo $rw['poll_date'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>POLLING TIME</strong></td>
                                    <td><?php echo $rw['poll_time'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>COUNTING DATE</strong></td>
                                    <td><?php echo $rw['count_date'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>COUNTING TIME</strong></td>
                                    <td><?php echo $rw['count_time'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>RESULT DATE</strong></td>
                                    <td><?php echo $rw['result_date'];?></td>
                                  </tr>
                                  <tr>
                                    <td><strong>RESULT TIME</strong></td>
                                    <td><?php echo $rw['result_time'];?></td>
                                  </tr>
                                </table>
                                <p align="justify">&nbsp;</p>
                                <p align="justify"></p>
                              </div>
                            </form>

                          </div>
                        </div>
                    </div>


                    </div>
            </div>
        <br><br><br><br><br><br><br><br>

        <div class="text-center">
  <div class="copyright style1">
	            <div align="center" class="style2"><strong>&copy;ONLINE VOTING Theme. All Rights Reserved. </strong></div>
	            <div class="credits style2">
                    
                  Online Voting System By CS DEPT, K.H.K.I.E, Dharwad, Karnataka, INDIA.</div>            
  </div>
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
