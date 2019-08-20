<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CHANGE PASSWORD</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css1/style.css">

  
      <style type="text/css">
<!--
.style1 {color: #FF9900}
-->
      </style>
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1 class="style1">&nbsp;</h1>
  
<div class="form">
  <img src="img/pass_change.jpg" height="120" width="240"/>
  <form class="register-form" >
    <input type="text" placeholder="name" />
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" method="post" action="changepass_con.php">
     <input type="text" placeholder="election-id" name="t1" required pattern="[A-Za-z0-9]+" title="enter alphanumeric only"/>
     <input type="password" placeholder=" old password" name="t2" required pattern="[0-9]+" title="enter numeric only"/>
     <input type="text" placeholder="new password" name="t3" required pattern="[A-Za-z0-9]+" title="enter any numeric or alpanumeric"/>
     <input type="text" placeholder="confirm password" name="t4" required pattern="[A-Za-z0-9]+" title="enter numeric or alphanumeric "/>
    <button>Change password</button>
    
  </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
