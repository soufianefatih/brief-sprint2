<?php 
include 'connect.php';
// if(isset($_GET['delete_id'])){
//  $id = $_GET['delete_id'];
//  $query = mysqli_query($con, "DELETE FROM product WHERE Code = '$id'");
//  if($query){
//   header("location:Dachbourd.php");
//  }else{
//   echo "<script>alert('Sorry delete query not work!')</script>";
//  }
// }



// include "connect.php";
$select="DElETE FROM product where Code='".$_GET['del_id']."'";
$query = mysqli_query($con, $select);
header("Location:Dachbourd.php");

 ?>