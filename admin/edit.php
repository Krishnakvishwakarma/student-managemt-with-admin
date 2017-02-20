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
            <li><a href="logout.php">logout</a>
                </li>
        </ul>
        <p>&nbsp;</p>
      </div>
    </div></td>
    <td width="844">
    <?php

if(isset($_REQUEST['id'])){

$id=$_REQUEST['id'];
echo $id;
$query = "delete * from studnt where='$id'";
$sql = mysqli_query($con,$query);
if($sql){
echo "<script>window.location='all-record.php'; </script>";

}



}else{echo "id not get from previse page";}

	
	?>
    
      <h1 align="center" class="style3">Edite Recorde</h1>
      </td>
  </tr>
</table>

</body>

</html>