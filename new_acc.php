<?php
session_start();
$name=$_POST['t1'];
$gender=$_POST['r1'];
$adhar=$_POST['t3'];
$contact=$_POST['t4'];

$_SESSION['t4']=$contact;
$election_id=$_POST['t5'];

$_SESSION['t5']=$election_id;
$vcode=rand();

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$rh=mysql_query("select * from voter_info where aadhar_no='$adhar' and election_id='$election_id'");
$rs=mysql_fetch_array($rh);

if(!empty($rs))
{


	$con1=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
	mysql_select_db("online_voting",$con1);
	mysql_query("insert into registration values ('$name','$gender','$adhar','$contact','$election_id')");




   /* $ch = curl_init();
$user="rahulshhangal@gmail.com:73192496";
$receipientno=$contact; 
$senderID="TEST SMS"; 
$msgtxt="your verification code is".$vcode; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);*/


	?>

		<script>
			alert("YOUR VERIFICATION CODE has send to your mobile");
			document.location="veri.php";
		</script>
	<?php

		mysql_query("insert into verification values ('$election_id','$vcode') ");
}
else
{
		?>
			<script>
				alert("YOU ARE NOT REGISTERED IN VOTER LIST PLEASE CONTACT AT ELECTION OFFICE ");
				document.location="index.html";
				</script>
		<?php
}
?>