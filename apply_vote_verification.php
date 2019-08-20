<?php 
session_start();
$uname=$_SESSION['t1'];
$election_id=$_POST['t3'];

echo $uname;

echo $election_id;
$ward=$_POST['wno'];
$constituency=$_POST['t2'];
$contact=$_SESSION['t4'];


$_SESSION['t3']=$election_id;
$_SESSION['wno']=$ward;
$_SESSION['t2']=$constituency;

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$ssa=mysql_query("select * from voter_info where ward_no='$ward' and constituency='$constituency'");
$ssb=mysql_fetch_array($ssa);

$w=$ssb['ward_no'];

$c=$ssb['constituency'];

echo $w;

echo $c;

//and
//echo $ssb['constituency'];

if(!empty($ssb))
{


   if($uname==$election_id)
   {

		$vote_code=rand();

		$ss="insert into vote_verify(vcode) values ('$vote_code')";

		mysql_query($ss);
		
		echo "true1";


      	?>

		<script>
			alert("YOUR VERIFICATION CODE IS <?php echo $vote_code;?>");
			document.location="voter_verify.php";
		</script>
		<?php
  	}
	
	else
	{
	  //echo "SORRY YOU ARE NOT THE LOGGED IN USER";
	?>
    <script>
			alert("SORRY YOU ARE NOT THE LOGGED IN USER");
			document.location="apply_vote_user.php";
		</script>
    <?php
    
	}
 }	
 
 
  else 
  
  //echo "PLEASE SELECT YOUR WARD  AND CONSTIUENCY";

     ?>
		<script>
			alert("PLEASE SELECT YOUR WARD  AND CONSTIUENCY");
			document.location="apply_vote_user.php";
			</script>

   