<?php
session_start();
$election_id=$_SESSION['t3'];
$constituency=$_SESSION['t2'];
$ward_no=$_SESSION['t1'];
$verify_code=$_POST['t11'];
$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$ss=mysql_query("select * from vote_verify where vcode='$verify_code'");
$row=mysql_fetch_array($ss);

if(empty($row))
{
   
    echo "<h1 style=color:red> Invalid Verification Code </h1>";

}

else
{
?>

<script>

alert("Verified");
document.location="apply_vote_user2.php";

</script>

<?php
}

?>
