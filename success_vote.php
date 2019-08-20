<?php
  $adhar=$_GET['aadhar_no'];
  $pname=$_GET['pname'];
  $eid=$_GET['eid'];
  $name=$_GET['name'];
  $ward=$_GET['ward'];
  
  

$con=mysql_connect("localhost","root","");
  mysql_select_db("online_voting",$con);

 
  
 $res2=mysql_query("select * from apply_voting  where adhar='$adhar' and ward_no='$ward' and party_name='$pname' and eid='$eid' and candidate_name='$name' ");
 $rsh2=mysql_fetch_array($res2);
 
  
  
if(!empty($rsh2))
{
?>
<script>
alert("ALREADY VOTED");
document.location="voter_home.php";
</script>
<?php

}
else

{

	$sql1="insert into apply_voting values('$ward','$adhar','$name','$pname','voted','$eid')";
	$rsh1=mysql_query($sql1);

?>
<script>
alert("CONGRATULATIONS YOUR VOTE IS CASTED SUCCESSFULLY");
document.location="voter_home.php";
</script>
<?php
}
?>