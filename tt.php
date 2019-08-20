<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


                          
</head>

<body>
<a href="#" id="link1"> click </a>


<script>

var js_var="heloo";
document.getElementById("link").onclick=function()
{

   window.location="?js_var=" + js_var;
}  

</script>


<?php
if(isset($_GET['js_var']))
{

  $php_var=$_GET['js_var'];
  echo  $php_var;
}

if(isset($_POST['submit']))
{

   $a=$_POST['t12'];
   
  
   //$aa=$_GET['age'];
   
   //echo $aa;
   
   //echo $a;
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

 <input type="text" name="t12" id="t12"  />
 
 
 <input type="submit" name="submit" id="link" />
 
 
 


 </form>
 
  

</body>
</html>
