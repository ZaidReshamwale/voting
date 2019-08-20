<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
.style2 {
	font-size: 18px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>

<body>
  <form action="" method="post">
  <?php
      
  $adhar=$_GET['aadhar_no'];
  $pname=$_GET['pname'];
  $eid=$_GET['eid'];
  $name=$_GET['name'];
  $ward=$_GET['ward'];
  
  
  $con=mysql_connect("localhost","root","");
  mysql_select_db("online_voting",$con);
  
  
$mm="select * from apply_voting where eid='$eid'";
$mr=mysql_query($mm);

$krw=mysql_fetch_array($mr);

if(empty($krw))
{


  $sql="select * from candidate_info where aadhar_no='$adhar' ";
  $res=mysql_query($sql);
  
  $amr=mysql_fetch_array($res);

  ?>

<div align="center">
  <table width="485" border="0">
    <tr>
      <td width="475" height="40" bgcolor="#00FF00"><div align="center"><span class="style1">THANK YOU FOR VOTING </span></div></td>
    </tr>
    <tr>
    
      <td height="61"><span class="style2"><center>
        <span class="style2"><br><br><br>YOU HAVE VOTED FOR THE BELOW CANDIDATE:</span></td>
    </tr>
  </table>
  <table width="483" height="226" border="0">
    
    <tr>
      <td width="242"><strong><center>CANDIDATE NAME</td>
      <td width="225"><div align="center">
          <label><?php echo $amr['name'] ?></label>
      </td>
    </tr>
    <tr>
      <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARTY NAME</strong></td>
      <td><div align="center">
       
        <label><?php echo $amr['party_name'] ?></label></div></td>
    </tr>
    <tr>
      <td height="70">
          
          <td>
         <a href="success_vote.php?aadhar_no=<?php echo $adhar;?>&pname=<?php echo $pname;?>&eid=<?php echo $eid;?>&name=<?php echo $name;?>&ward=<?php echo $ward;?>" class="style2">CONFIRM</a>
        
        
      <td><div align="center">
                <a href="javascript:window.history.go(-1)">REVOTING</a>
        
      </div></td>
    </tr>
    </td></form>
    <?php
	}
	else
	{
	 
	?>
    <script>
	alert ("SORRY U HAVE ALREADY VOTED");
	document.location="voter_home.php";
    </script>
    <?php
	}
	?>
</body>
</html>
