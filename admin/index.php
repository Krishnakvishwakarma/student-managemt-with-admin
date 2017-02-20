<?php 
include("../db/config.php");
//if(!$con){echo"faild";}else {echo"connect to datbase";}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin login</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {
	color: #0000FF
}
.style3 {
	color: #003399;
	font-weight: bold;
}
-->
</style>
</head><body>
<h1 align="center" class="style2">Administrator Login</h1>
<?php
if(isset($_POST['btn']))
			{
			$query = "select * from admin where name='$_POST[name]' AND password='$_POST[password]'";
			
			$sql= mysqli_query($con, $query);
			if(mysqli_num_rows($sql)>0){
			$row = mysqli_fetch_assoc($sql);
			$_SESSION['user']=$row['name'];
			echo "<script>window.location='dashboard.php'</script>";
			
			
			
						}else{
						
		$err="<p class='err'> Incorect user name and password</p>";
						
						}
			
			}



?>
<form method="post" action="">
<table width="319" height="155" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000066" bgcolor="#CCCCCC">
  <tr>
    <td colspan="2"><div align="center" class="style1">Login Admin Users</div>
    <?php 
	if(isset($_POST['btn'])){
			if(isset($err)){echo $err;}
			//echo "krishna vishwakarma";
	
	}else{
	
	echo "Fill the requird fidld";
	}
	?>    </td>
  </tr>
  <tr>
    <td width="152">User Name:</td>
    <td width="154"><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td>Password :</td>
    <td><input type="password" name="password" id="password"></td>
  </tr>
  <tr>
    <td><div align="center">
      <input name="btn" type="submit" value="submit">
    </div></td>
    <td><div align="center">
      <input name="reset" type="reset" value="Reset" />
    </div></td>
  </tr>
</table>
<div align="center"></div>
<h1 align="center" class="style3"> <a href="signup.php">Click Hear For Signup</a></h1>
</form>

</body>
</html>
