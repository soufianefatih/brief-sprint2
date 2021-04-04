<?php
include "connect.php";


/////////////////////////////////add product////////////////
if(isset($_POST['save'])){
 $name     = $_POST['name'];
 $price    = $_POST['price'];
 $nomphoto=isset($_FILES['my_image']['name'])?$_FILES['my_image']['name']:"";
 $imageTemp=$_FILES['my_image']['tmp_name'];
 move_uploaded_file($imageTemp,"img/".$nomphoto);


 
 $Query = mysqli_query($con, "INSERT INTO product (Name_product,Price,Image) VALUES ('$name','$price','$nomphoto')");


}


?>
    <!--/////////////// count nbr producr //////////////////-->
<?php
$reqcount="SELECT count(*) nbproduct from product";
$resultatCount=$con->query($reqcount);
$affiche=mysqli_fetch_array($resultatCount);

?>
<!-- ////////////////count nbr admin/////////////////-->
<?php
$reqcount1="SELECT count(*) nbpradmin from admin";
$resultatCount1=$con->query($reqcount1);
$affiche1=mysqli_fetch_array($resultatCount1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dachbourd</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<div class="dachbourd">
 <div class="dachbourd__adminuser">
     <div class="dachbourd__adminuser__logoadminuser">
     <img src="images/man-300x300.png" alt="">
   

     <!-- ///////////session////////////////// -->
  
     <?php
    session_start();

    if(isset($_SESSION['User']))
    {     
        echo '<h5 class="well"> Welcome ' . $_SESSION['User'].'<br/></h5>';
        
    }
    else
    {
        header("location:login.php");
    }

?> 
  </div>
  <div class="dachbourd__adminuser__href">
                <a class="a-href" href="home.php">HOME</a>
                <a class="a-href" href="menu.php" >MENU</a>
                <?php
    

    if(isset($_SESSION['User']))
    {     
          echo '<a class="logout" href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:login.php");
    }

?>
               
            </div>
            
 </div>

 
 <div class="dachbourd__count">

 <div class="countproduct">
         <!-- affichage nombre product -->
     
      <h3>Product</h3>
      <h4><?php echo "Nbr= ".$affiche['nbproduct'] ?></h4>
           
            
  </div>
  <div class="countproduct">
         
          <!-- affichage nombre admin -->

      <h3> admin</h3>
      <h4><?php echo "Nbr= ".$affiche1['nbpradmin'] ?></h4>
           
            
  </div>



 </div>


  <div class="dachbourd__tableau">
      <!-- /////////form add //////////////// -->
  <div class="popapp"    id="myModal" >
   <span class="close"></span>

<form method="POST" action=""  enctype="multipart/form-data" >
		
   
          
             <div class="input-group">
               <h4>Name_product</h4>
                 <input  id="ajoute" type="text" name="name" value="" required=""  placeholder="enter product name">
             </div>
             <div class="input-ajoute">
                 <h4>Price</h4>
                 <input  id="ajoute" type="text" name="price" value="" required=""  placeholder="enter the price">
             </div>
             <div class="input-group">
               
                 <input id="btnimg" type="file" name="my_image" value="" required="">
             </div>
             <div class="input-groupb">
                 <button class="btn" type="submit" name="save" >add</button>
                
             </div>
         </form>

</div>
<div class="input-popp">
                 <button  id="myBtn" type="submit" name="popp" >add product</button>
                
             </div>

             <div class="tbldach">
<table id="customers" >
 <thead>
  <tr>
   <th>name</th>
   <th>Prise</th>
   <th>Image</th>
   <th>Update</th>
   <th>Delete</th>
  </tr>
 </thead>
 <tbody>
  <?php
//  affichage tableau//////////////////////////
$Show = mysqli_query($con, "SELECT * FROM product");
while($r = mysqli_fetch_array($Show)): ?>
    <tr>
     <td><?php echo $r['Name_product']; ?></td>
     <td><?php echo $r['Price']; ?></td>
     <td> <img src="img/<?php echo $r['Image']; ?>" alt="" width="150px" height="60px">  </td>
     <td> <button class="modifier"><a href="update.php?update_id=<?php echo $r['Code']; ?>" >Update</a> </button> </td>

     <td> <input type="button" onclick="confirmer(<?php echo $r['Code']; ?>)" value='Delete'> </td>


    </tr>
    <?php endwhile; ?>
 </tbody>
 </table>

</div>
     
  </div>
</div>









 

<script src="insertpopup.js"></script> 
</body>

</html>