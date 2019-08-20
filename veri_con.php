<?php
session_start();

$contact=$_SESSION['t4'];
$election_id=$_SESSION['t5'];


$vcod=$_POST['t1'];

$pass=rand();

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$sql=mysql_query("select * from verification where vcode='$vcod' ");
$a=mysql_fetch_array($sql);


if(empty($a))
{
  
?>
 <script>
alert("INVALID VERIFICATION CODE");
document.location="veri.php";
</script>
<?php
}
else
{
  
 
    
 $ab=mysql_query ("select * from login where username='$election_id' ");
 $ac=mysql_fetch_array($ab);
 
 if(empty($ac))
 {
 mysql_query("insert into login values('$election_id','$pass','VOTER')");
 
 
/*$ch = curl_init();
$user="rahulshhangal@gmail.com:73192496";
$receipientno=$contact; 
$senderID="TEST SMS"; 
$msgtxt="YOUR USERNAME IS ".$uname." AND PASSWORD IS ".$pass; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);
*/



?>
<script>
alert("CODE VERIFIED SUCCESSFULLY YOUR USERNAME ($uname) AND PASSWORD ($pass) IS SENT TO YOUR MOBILE");
document.location="login.html";
</script>
 <?php
 }

else if(!empty($ac))
{
 ?>
 <script>
alert("ALREADY REGISTERED");
document.location="login.html";
</script>

<?php
  
} 

}

?> 
 


 