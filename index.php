<?php 
include("db/config.php");
if(!$con){echo "wrong";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Info</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #230E62;
	font-weight: bold;
}
.style3 {
	color: #000066;
	font-weight: bold;
}
.style4 {color: #FF0000}
-->
</style>
</head><body>
<h1 align="center" color="pink">Student Info</h1>
<div class="result"><form action="" name="form" method="post" >
  <div align="center">
    <h2>
      <?php 
if(isset($err)){echo $err;}
if(isset($result)){echo $result;}

?>
      <span class="style3">    Enter your Rollno:</span>
        <input type="text" name="roll" required/>
        <input type="submit" name="submit" value="search" required/>
      </h2>
  </div>
</form> 
</div>

<?php 
if(isset($_POST['submit'])){
	if(empty($_POST['roll'])){
echo "Ener valid Roll Number";
	}else{
	$query = "select * from student where roll_no='$_POST[roll]'";
	$sql = mysqli_query($con,$query);
	if(mysqli_num_rows($sql)>0){
		
	$row = mysqli_fetch_assoc($sql);
	?>
	
<table width="388" height="276" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#00FFFF">
  <tr>
    <td width="128" height="87"><div align="center"><img src="images/logo.png" width="117" height="80" alt="chirayu" /></div></td>
    <td colspan="2"><div align="center" class="style1">Chirayu Medical college &amp; Hospital</div></td>
  </tr>
  <tr>
    <td height="40" colspan="2"><span class="style4">Name of Student:</span></td>
    <td width="232"><?php echo $row['name']; ?></td>
  </tr>
  <tr>
    <td height="33" colspan="2"><span class="style4">Roll Number:</span></td>
    <td><?php echo $row['roll_no']; ?></td>
  </tr>
  <tr>
    <td height="40" colspan="2"><span class="style4">Course:</span></td>
    <td><?php echo $row['course']; ?></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><span class="style4">Obtend /Total Marks:</span></td>
    <td><?php echo $row['opt_mark']."/".$row['total_no']; ?></td>
  </tr>
  <tr>
    <td height="30" colspan="2"><span class="style4">Percentage:</span></td>
    <td><?php echo $row['percentage']; ?></td>
  </tr>
  <tr>
    <td colspan="2"><span class="style4">Grede:</span></td>
    <td><?php echo $row['grade']; ?></td>
  </tr>
</table>

    
    
	
	<?php
	}else{
echo "<p>Result Not Found</p>";
	
	}
	
	}

}



?>

</body>
</html>