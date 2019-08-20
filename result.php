<!doctype html>
<html lang="en">
<head>
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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	  	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   Online Voting
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                   <a href="ward_details_user.php?id=<?php echo $uname;?>">
                        <i class="pe-7s-graph"></i>
                        <p>Ward Details</p>
                    </a>
                </li>
                <li>
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
                    <br>SLogans
                </div>
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
                               <h4 style="color: #FFFFFF; font-weight:bold;background-color:#FFCC00; text-align:center;"> <marquee>RESULT</marquee></h4>
                                <hr>
                          </div>
                          <?php
	$ward=$_POST['t1'];
	
	$x="BJP";
	$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

	
	
	$pp=mysql_query("select count(*) from apply_voting where ward_no='$ward' and party_name='$x'");
    $rw=mysql_fetch_array($pp);
    //echo $rw['result'];
    
	$ap1="CONGRESS";  

	$rs1=mysql_query("select count(*) from apply_voting where ward_no='$ward' and party_name='$ap1'");

	$rw1=mysql_fetch_array($rs1);
 
    $ap2="JDS";
    $rs2=mysql_query("select count(*) from apply_voting where ward_no='$ward' and party_name='$ap2'");

	$rw2=mysql_fetch_array($rs2);


	$BJP=$rw[0];
	$CONGRESS=$rw1[0];
	$JDS=$rw2[0];
	$msg="";

	if($BJP>$CONGRESS &&$BJP>$JDS)
	{
  		$msg="BJP";
 	}
 	
	if($CONGRESS>$BJP && $CONGRESS>$JDS)
 	{
 		$msg="CONGRESS";
 	}
 
    if($JDS>$BJP && $JDS>CONGRESS)
    {
 		$msg="JDS";
  	}
	
	if($BJP==$CONGRESS && $JDS==$BJP && $CONGRESS==$JDS )
	{
	
	  echo "<br>The total count of BJP is".$BJP;
	 echo "<br>The total count of CONGRESS is".$CONGRESS;
	 echo "<br>The total count of JDS is".$JDS;
	}

	
 
 	echo "<h2 style=color:blue><br>The winning party is ".$msg; 
	echo"</h2>";
 echo "<br>";
 	echo "<h3 style=color:red;font-weight:bold>The total count of BJP is $BJP </h3> ";
	echo "<br>";
	echo "<h3 style=color:red;font-weight:bold>The total count of CONGRESS is $CONGRESS </h3>";
	echo "<br>";
	echo "<h3 style=color:red;font-weight:bold>The total count of JDS is $JDS </h3>";
 
 ?>
 <hr>
                            <div class="content table-responsive table-full-width">
                 
                         

                        </div>
                    </div>


                    </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
 <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>                    </ul>
                </nav>
                 <div class="text-center">
  <div class="copyright">
	            <div align="center">&copy;<strong>ONLINE VOTING Theme</strong>. All Rights Reserved.                </div>
	            <div class="credits">
                    
                <span class="style1">Online Voting System By CS DEPT, K.H.K.I.E, Dharwad, Karnataka, INDIA.</span></div>
  </div>
  </div>									
                
                
                
                
                
                
                
                
                
                
                
                
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
