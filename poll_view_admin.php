<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("online_voting",$con);

$sql="select * from poll_details";
$res=mysql_query($sql);


  while($row=mysql_fetch_array($res))
  {
     
      echo $row['poll_date'];
  
  ?>
  


  <table width="353" border="1">
    <tr>
      <td width="176">VOTING DATE:</td>
      <td width="161"><?php echo $row['poll_date'];?></td>
    </tr>
    <tr>
      <td>VOTING TIME:</td>
      <td><?php echo $row['poll_time'];?></td>
    </tr>
    <tr>
      <td>COUNTING DATE:</td>
      <td><?php echo $row['count_date'];?></td>
    </tr>
    <tr>
      <td>COUNTING TIME:</td>
      <td><?php echo $row['count_time'];?></td>
    </tr>
    <tr>
      <td>RESULT DATE:</td>
      <td><?php echo $row['result_date'];?></td>
    </tr>
    <tr>
      <td>RESULT TIME:</td>
      <td><?php echo $row['result_time'];?></td>
    </tr>
  </table>

  <a href="add_poll.php">CLICK TO EDIT</a>

<?php
}
?>

</form>

</body>
</html>
