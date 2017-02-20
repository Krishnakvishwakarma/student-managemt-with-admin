<?php 
include("../db/config.php");
//if($con){echo "Connection succesfull";}


if(empty($_SESSION['user'])){
echo "<script>window location='index.php'</script>";

}


if(isset($_REQUEST['id'])){

$id=$_REQUEST['id'];
echo $id;
$query = "DELETE FROM studnt WHERE id = '$id'";
$sql = mysqli_query($con,$query);
if($sql){
echo "<script>window.location='all-record.php'</script>";
}else{
echo "wrong";
}
?>