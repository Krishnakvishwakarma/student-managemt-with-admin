<?php
$con = mysqli_connect("localhost","root","","result");					


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Ragistration</title>
<style>

#p1 {background-color:rgba(255,0,0,0.3);}


</style>
</head>
<body>
<form method="post" action="">

<table width="319" height="155" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#000066" bgcolor="#CCCCCC">
  <tr>
    <td colspan="2"><div align="center" class="style1">Admin Ragistration</div>
   </td>
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
<?php
if(isset($_POST['btn'])){

$query = "insert into admin  values('','$_POST[name]','$_POST[password]')";
$sql= mysqli_query($con, $query);
echo "<script>window.location='index.php'</script>";
}
else{
echo "Insert Data into Text box";}
?>
</form>
</body>

</html>
