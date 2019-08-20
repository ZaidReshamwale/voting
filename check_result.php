<!doctype html>
<html lang="en">
<head>
<script>
window.history.forward();


</script>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>RESULT</title>

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
	color: #990000;
	font-weight: bold;
}
-->
    </style>
</head>
<body>

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
                        <i class="pe-7s-graph"></i>
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
                        <i class="pe-7s-note2"></i>
                        <p>Add Ward Info</p>
                    </a>
                </li>
                <li>
                    <a href="poll_menu_admin.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Add Poll Info</p>
                    </a>
                </li>
                <li class="active">
                    <a href="check_result.php">
                        <i class="pe-7s-science"></i>
                        <p>Result</p>
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
<strong>BE BRIGHT VOTE FOR RIGHT >>
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
</strong></marquee>
               
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="ec_home.php">
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
                                <h4 class="title style1"><strong style="color:#0033FF;">Check Result</strong></h4>
                              <p class="category">&nbsp;</p>
                          </div>
                            <div class="content table-responsive table-full-width">
                            <form method="post" action="result_admin.php">
                              <div align="center">
                             <?php
							
                            $con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$res=mysql_query("select * from ward_details");


?>

                           <table width="368" height="140">
      <tr>
        <td width="160" height="50"><strong>WARD NO</strong></td>
        <td width="196">
          <select name="t1" id="select">
          <?php
		  while($row=mysql_fetch_array($res))
		  {
		  
		  ?>
          <option value="<?php echo $row['ward_no'];?>"> <?php echo $row['ward_no'];?>  </option>
          <?php
		  }
		  ?>
          </select>          </td>
          </tr>
          <tr>
          <td align="center" colspan="5"><input type="submit"></td>
          </tr>
          </table>
        </form>

                          </div>
                        </div>
                    </div>


                    </div>
            </div>
        </div>
<br><br><br><br><br><br><br><br><br>
        <div class="text-center">
  <div class="copyright style1">
	            <div align="center" class="style2">&copy;ONLINE VOTING Theme. All Rights Reserved.                </div>
	            <div class="credits style2">
                    
                  <strong>Online Voting System By CS DEPT, K.H.K.I.E, Dharwad, Karnataka, INDIA.</strong></div>            
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
