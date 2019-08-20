<?php 
$poll_date=$_POST['t1'];
$poll_time=$_POST['t2'];
$count_date=$_POST['t3'];
$count_time=$_POST['t4'];
$result_date=$_POST['t5'];
$result_time=$_POST['t6'];

$con=mysql_connect("localhost","root","") or die("COULD NOT CONNECT");
mysql_select_db("online_voting",$con);
$ss="select * from poll_info";
									     $rs=mysql_query($ss);

  					$rw=mysql_fetch_array($rs);
					
					if(empty($rw))
					{
		            $mm="insert into poll_info values('$poll_date','$poll_time','$count_date','$count_time','$result_date','$result_time')";
		            mysql_query($mm);
		            }
		if(!empty($ss))
		{
mysql_query("update poll_info set poll_date='$poll_date',poll_time='$poll_time',count_date='$count_date',count_time='$count_time',result_date='$result_date',result_time='$result_time'");
}
?>
<script>
	alert("POLL DETAILS ADDED")
									document.location="ec_home.php";
								</script>
								