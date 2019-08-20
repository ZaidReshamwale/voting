
<?php
$file_exts = array("jpg", "bmp", "pjpeg", "gif", "png","pdf");
	
	$upload_exts = end(explode(".", $_FILES["file"]["name"]));
	

	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "application/pdf")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))	&& ($_FILES["file"]["size"] < 2000000)
	&& in_array($upload_exts, $file_exts))
	{
	  if ($_FILES["file"]["error"] > 0)
	  {
	   echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  }
	else
	{
	//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	//echo "Type: " . $_FILES["file"]["type"] . "<br>";
	//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
	// Enter your path to upload file here
	if (file_exists("C:/wamp/www/VOTING/upload/" .
	$_FILES["file"]["name"]))
	{
	   echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
	    " already exists. "."</div>";
	}
	
	else	
	
	{	
	
	move_uploaded_file($_FILES["file"]["tmp_name"],	"C:/wamp/www/VOTING/upload/" . $_FILES["file"]["name"]);	
	//echo "<div class='sucess'>"."Stored in: " ."C:/wamp/www/VOTING/upload/" . $_FILES["file"]["name"]."</div>";
}	}	}	

else	
{	
echo "<div class='error'>Invalid file</div>";	
}


$name=$_POST['t1'];
$dob=$_POST['t3'];
$gender=$_POST['r1'];
$address=$_POST['t4'];
$qualification=$_POST['t5'];
$constituency=$_POST['t9'];
$ward_no=$_POST['t10'];
$email_id=$_POST['t2'];
$adharno=$_POST['t12'];
$election_id=$_POST['t6'];
$contact=$_POST['t7'];
$photo=$_FILES['file']['name'];

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

$sql="select * from voter_info where aadhar_no='$adharno' and election_id='$election_id' ";
$rs=mysql_query($sql);
$a=mysql_fetch_array($rs);
if(empty($a))
{
mysql_query("insert into voter_info values('$name','$dob','$gender','$address','$qualification','$constituency','$ward_no','$email_id','$adharno','$election_id','$contact','$photo')");
   
   
?>
<script>
alert("VOTER REGESTERED SUCCESSFULLY ");
document.location="add_voter.html";
</script>

<?php
}
else
{

?>
<script>
alert("VOTER ALREADY REGESTERED");
document.location="ec_home.php";
</script>

<?php
}
?>




