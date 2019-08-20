<?php

session_start();

$username=$_POST['t1'];
$password=$_POST['t2'];


$_SESSION['t1']=$username;



$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
	mysql_select_db("online_voting",$con);
	
	$sql=mysql_query("select * from login where password='$password' and username='$username'");

	$a=mysql_fetch_array($sql);
if(!empty($a))
{
   $type=$a['type'];
   
   if($type=="VOTER")
   {
   	
?>
<script>
alert("YOU HAVE LOGGED AS VOTER");
document.location="voter_home.php";
</script>
<?php
}
if($type=="admin")
{

?>
<script>
alert("YOU HAVE LOGGED AS ADMIN");
document.location="ec_home.php";
</script>
<?php
}

}
else
{

?>
<script>
alert("INVALID USER NAME OR PASSWORD");
document.location="login.html";
</script>
<?php
}
?>



 	