<?php 
include("../db/config.php");
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];

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
	color: #663300
}
-->
</style>
</head>
<body>
<header>
<div class="contener" >
  <div align="left"><a href="dashboard.php"><img src="../images/logo.png" class="logo"> </a></div>
</div>
<table width="1046" height="965" border="0" cellpadding="1" cellspacing="1" hight="1000">
  <tr valign="top">
    <td width="250" height="963"><div class="left_menue">
      <div class="mhead">
        <div align="center" class="style2">Dashboard</div>
      </div>
      <div class="nev">
        <ul>
          <li><a href="add-record.php">Add Recourd</a></li>
          <li><a href="#">All Recourd</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
        <p>&nbsp;</p>
      </div>
    </div></td>
    <form method="post" action="">
    <td width="792"><h1 align="center" class="style3">All Records</h1>
      <table width="785" border="1" cellspacing="1" cellpadding="1">
        <tr>
          <th scope="col">Sl No.</th>
          <th scope="col">Name:</th>
          <th scope="col">Roll No:</th>
          <th scope="col">Course:</th>
          <th scope="col">Marks:</th>
          <th scope="col">Percentage:</th>
          <th scope="col">Grade:</th>
          <th scope="col">Action:</th>
        </tr>
        <?php 
		$query = "select * from student where id='$id'";
		$sql = mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
		$i=1;
		while($row = mysqli_fetch_assoc($sql)){
		?>
        <tr>
          <td> <?php echo $i++; ?></td>
          <td><a href="#"><?php echo $row['name']; ?></a></td>
          <td><?php echo $row['roll_no']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['opt_mark']."/".$row['total_no']; ?></td>
          <td><?php echo $row['percentage']; ?></td>
          <td><?php echo $row['grade']; ?></td>
          <td>
          <a href="edit.php?id=<?php $row['id']; ?>">Edit</a>| <a href="delete.php?id=<?php $row['id']; ?>">Delete</a>
          </td>
        </tr>
        <?php 
		
			}
		
		}else{
		
		$num_r = "Record not found";
		}
		
		?>
        
      </table>
      </form>
      <?php 
	  if(isset($num_r)){echo $num_r;}
	  
	  ?>
      <p align="left" class="style3">&nbsp;</p></td>
  </tr>
</table>
</header>
</body>
</html>