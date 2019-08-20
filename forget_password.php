<?php

$un=$_POST['t1'];
$eid=$_POST['t2'];
$ano=$_POST['t3'];

 $con=mysql_connect("localhost","root","");
 mysql_select_db("online_voting",$con);
 
 
 $hul=mysql_query("select * from login where username='$un' ");

  $amr=mysql_fetch_array($hul);
  
  
?>

<script>
   alert("YOUR PASSWORD IS: <?php echo $amr['password']; ?> ");
   document.location="login.html";
</script>