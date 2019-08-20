<?php

session_start();

$status=$_SESSION['status'];
$eeid=$_SESSION['eeid'];


$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

mysql_query("insert into apply_voting (party_name,eid) values ('$status','$eeid')");




?>
<script>
alert("Apply Nota Successfully");

document.location="voter_home.php";
</script>
