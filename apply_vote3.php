<?php

session_start();
$status=$_GET['status'];
$eeid=$_GET['eeid'];
$_SESSION['status']=$status;
$_SESSION['eeid']=$eeid;


$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

$ss="select * from apply_voting where eid='$eeid' and party_name='Nota'";
$rs=mysql_query($ss);

$rw=mysql_fetch_array($rs);

if(empty($rw))
{

//mysql_query("insert into apply_voting (party_name) values ('$status')");




?>
<script>
var n=confirm("Are sure want to Apply Nota");

if(n==true)
{

   document.location="apply_vote4.php";
}

else
{

  window.history.go(-1);

}

</script>

<?php
}

else
{
?>

<script>
alert("SORRY U HAVE ALREADY APPLIED NOTA");
document.location="voter_home.php";
</script>
<?php
}
?>