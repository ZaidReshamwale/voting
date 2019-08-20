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
	echo "Upload: " . $_FILES["file"]["name"] . "<br>";
	echo "Type: " . $_FILES["file"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
	echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
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
	echo "<div class='sucess'>"."Stored in: " ."C:/wamp/www/VOTING/upload/" . $_FILES["file"]["name"]."</div>";
}	}	}	

else	
{	
echo "<div class='error'>Invalid file</div>";	
}


////////////////////////////////////////////////////////////////////////////////




$file_exts1 = array("jpg", "bmp", "pjpeg", "gif", "png","pdf");
	
	$upload_exts1 = end(explode(".", $_FILES["file2"]["name"]));
	

	if ((($_FILES["file2"]["type"] == "image/gif")
	|| ($_FILES["file2"]["type"] == "image/jpeg")
	|| ($_FILES["file2"]["type"] == "image/png")
	|| ($_FILES["file2"]["type"] == "application/pdf")
	|| ($_FILES["file2"]["type"] == "image/pjpeg"))	&& ($_FILES["file2"]["size"] < 2000000)
	&& in_array($upload_exts1, $file_exts1))
	{
	  if ($_FILES["file2"]["error"] > 0)
	  {
	   echo "Return Code: " . $_FILES["file2"]["error"] . "<br>";
	  }
	else
	{
	echo "Upload: " . $_FILES["file2"]["name"] . "<br>";
	echo "Type: " . $_FILES["file2"]["type"] . "<br>";
	echo "Size: " . ($_FILES["file2"]["size"] / 1024) . " kB<br>";
	echo "Temp file: " . $_FILES["file2"]["tmp_name"] . "<br>";
	// Enter your path to upload file here
	if (file_exists("C:/wamp/www/VOTING/upload/" .
	$_FILES["file2"]["name"]))
	{
	   echo "<div class='error'>"."(".$_FILES["file2"]["name"].")".
	    " already exists. "."</div>";
	}
	
	else	
	
	{	
	
	move_uploaded_file($_FILES["file2"]["tmp_name"],	"C:/wamp/www/VOTING/upload/" . $_FILES["file2"]["name"]);	
	echo "<div class='sucess'>"."Stored in: " ."C:/wamp/www/VOTING/upload/" . $_FILES["file2"]["name"]."</div>";
}	}	}	

else	
{	
echo "<div class='error'>Invalid file</div>";	
}



$name=$_POST['t1'];
$dob=$_POST['t2'];
$age=$_POST['t3'];
$gender=$_POST['r1'];
$address=$_POST['t4'];
$ward_no=$_POST['t5'];
$constituency=$_POST['t6'];
$qualification=$_POST['t7'];
$emailid=$_POST['t8'];
$adharno=$_POST['t9'];
$photo=$_FILES['file']['name'];
$party_symbol=$_FILES['file2']['name'];
$party_name=$_POST['s1'];
$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);

$sql="select * from candidate_info where aadhar_no='$adharno' ";
$rs=mysql_query($sql);
$a=mysql_fetch_array($rs);
if(empty($a))
{

   mysql_query("insert into candidate_info values('$name','$dob','$gender','$address','$qualification','$constituency','$wardno','$emailid','$adharno','$photo','$party_symbol','$party_name')");
   ?>
   <a href="success_vote.php?aadhar_no=<?php echo $adharno;?> "> </a>
  
<script>
alert("CANDIDATE REGESTERED SUCCESSFULLY");
document.location="ec_home.html";
</script>

<?php
}
else
{

?>

<script>
alert("CANDIDATE ALREADY REGESTERED ");
document.location="candidate_info.html";
</script>

<?php
}
?>




