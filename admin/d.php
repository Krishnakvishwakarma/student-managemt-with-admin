<?php 
include("../db/config.php");
if(empty($_SESSION['user'])){
echo "<script>window location='index.php'</script>";

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard For Administrator Control</title>

<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {
	font-size: 36px;
	font-weight: bold;
}
.style3 {
	color: #663300;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<header>
<div class="contener" >
  <div align="left"><a href="dashboard.php"><img src="../images/logo.png" class="logo"> </a></div>
</div>
</header>
<table width="1048" height="950" border="0" cellpadding="1" cellspacing="1" hight="1000">
  <tr valign="top">
    <td width="191"><div class="left_menue">
      <div class="mhead">
        <div align="center" class="style2">Dashboard</div>
      </div>
      <div class="nev">
        <ul>
          <a href="add-record.php">
            <li>Add Recourd</li>
            </a> <a href="all-record.php">
              <li>All Recourd</li>
              </a>
        </ul>
        <p>&nbsp;</p>
      </div>
    </div></td>
    <td width="844">
    <?php 
if(isset($_POST['btn'])){
	if(empty($_POST['name'])||empty($_POST['roll_no'])||empty($_POST['course'])||empty($_POST['total_no'])||empty($_POST['opt_mark'])){
	
	$err = "Fill the fields Properlly";
	}else{
	
	$percentage = $_POST['opt_mark']/$_POST['total_no']*100;
			
			if($percentage>=80){
								$grede = "A+";
								}elseif($percentage>=70){
								$grede = "A";
								}elseif($percentage>=60){
								$grede = "B";
								}elseif($percentage>=50){
								$grede = "C";
								}elseif($percentage>=40){
								}else{
								$grede ="Fail";
								}
	$query="insert into student values('','$_POST[name]','$_POST[roll_no]','$_POST[total_no]','$_POST[opt_mark]','$percentage','$grede','$_POST[course]')";
	if(mysqli_query($con,$query)){
	
	$success = "Record has been inserted";
	}
	
	
	
	}


}
?>
      <h1 align="center" class="style3">Add Record</h1>
      <form action="" method="post" name="addrecord">

      <table width="253" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="96">&nbsp;</td>
    <td width="144">
    <?php
    if(isset($_POST['btn'])){
	if(isset($err)){echo "$err";}
	if(isset($success)){echo"$success";}
	}else{
	echo"fill the form";
	}
	?>    </td>
  </tr>
  <tr>
    <td>Student Name:</td>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>Roll Number:</td>
    <td><input type="text" name="roll_no"></td>
  </tr>
  <tr>
    <td>Course:</td>
    <td>
    <select name="course">
    <option>Web designing</option>
        <option>Web Deweloper</option>
            <option>Web Engineering</option>
               <option>Graphic Designing</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Total Marks:</td>
    <td>
    <select name="total_no">
    <option>100</option>
        <option>200</option>
            <option>300</option>
                <option>500</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>Obtend Marks</td>
    <td><input type="text" name="opt_mark"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn" value="add record"></td>
  </tr>
</table>
  </form>  
    </td>
  </tr>
</table>

</body>

</html>