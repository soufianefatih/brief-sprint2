<?php include "connect.php";
 session_start();
if(isset($_POST['update'])){
  $name       = $_POST['name'];
  $price      = $_POST['price'];
  $id         = $_POST['edit_id'];
  $nomphoto =isset($_FILES['my_image']['name'])?$_FILES['my_image']['name']:"";
 $imageTemp=$_FILES['my_image']['tmp_name'];


if($imageTemp !=""){
  move_uploaded_file($imageTemp,"img/".$nomphoto);

  $query      = mysqli_query($con, "UPDATE product SET Name_product = '$name' , Price = '$price'  , Image = '$nomphoto' WHERE Code = '$id'");
  if ($query) {
    header("location:Dachbourd.php");
  }else{
    echo "<script>alert('Sorry update query not work')</script>";
  }
}else{
  $query      = mysqli_query($con, "UPDATE product SET Name_product = '$name' , Price = '$price'   WHERE Code = '$id'");
  if ($query) {
    header("location:Dachbourd.php");
  }else{
    echo "<script>alert('Sorry update query not work')</script>";
  }
}
}
 
 ?>
<!DOCTYPE html>
<html>

<head>
 <title>Update</title>
 <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
 
</head>
<body>

   <?php
  //  affichage les informations 'input' ////////////////

  if(isset($_GET['update_id'])): ?>
  <?php $id = $_GET['update_id']; ?>
  <?php $query = mysqli_query($con, "SELECT * FROM product WHERE Code = '$id' ");
  $r = mysqli_fetch_array($query);
  $name = $r['Name_product'];
  $price = $r['Price'];
  
  
   ?>
   <div class="updatebacgh">
     <h1>Update product</h1>
   <div class="updatebacgh__updateform">
    <form   method="POST" action="update.php" enctype="multipart/form-data">
        <h4>Name_product</h4>
          <input type="text" name="name" id="updatebtn"   placeholder="" required="" value="<?php echo $name; ?>">
          <h4>Price</h4>
          <input type="text" name="price"  id="updatebtn"  placeholder="" required="" value="<?php echo $price; ?>">
       
        
              
                 <input type="file"   id="updatebtnf" name="my_image" value="">
         

        <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
        
          <input type="submit" name="update" class=" btn-info" value="update">
      
       </form> 
      </div>
    </div>
<?php endif; ?>







</body>

</html>