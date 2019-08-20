<?php
$uname=$_POST['t1'];
$pass=$_POST['t2'];
$newpass=$_POST['t3'];
$repass=$_POST['t4'];

											$con=mysql_connect("localhost","root","");
												mysql_select_db("online_voting",$con);
											
										$ss="select * from login where username='$uname' and password='$pass'";
									     $rs=mysql_query($ss);

  					$rw=mysql_fetch_array($rs);
					
					if(($rw['username']==$uname)&&($rw['password']==$pass))
					{
							if($newpass==$repass)
							{
											
								mysql_query("update login set password='$newpass'");
								
								?>
								<script>
									alert("PASSWORD CHANGED SUCCESSFULLY")
									document.location="login.html";
								</script>
											
								<?php
							}
							else
							{
								?>
                          		<script>
									alert("NEW PASSWORD DOESNT MATCH")
									document.location="login.html";
								</script>
                                            
                                <?php
							}
						}	
							else
							{
							     ?>
                             	<script>
									 alert("INCORRECT USERNAME OR PASSWORD")
									 document.location="login.html";
								</script>
                                            
								<?php
							}
						?>								
