<?php
$constituency=$_POST['t1'];
$ward_no=$_POST['t2'];
$zone_name=$_POST['t3'];
$ward_add=$_POST['t4'];
$male_pop=$_POST['t5'];
$female_pop=$_POST['t6'];
$total_pop=$_POST['t7'];

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

$sql="select * from ward_details ";
$rs=mysql_query($sql);
$a=mysql_fetch_array($rs);
if(($constituency==$a['constituency'] )&& ($ward_no==$a['ward_no']))
{
	?>
<script>
alert("WARD ALREADY REGISTERED");
document.location="add_ward.html";
</script>
<?php
}
else
{
mysql_query("insert into ward_details values('$constituency','$ward_no','$zone_name','$ward_add','$male_pop','$female_pop','$total_pop')");
?>
<script>
alert(" NEW WARD REGISTERED SUCCESSFULLY");
document.location="ec_home.php";
</script>
<?php
}
?>



