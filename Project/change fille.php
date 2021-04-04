<?php 
 include 'connect.php';



$sql="SELECT * FROM product ";
$req=mysqli_query($con,$query);
// $result = $con->que:ry($sql);


echo "<tr>";
echo"<th>"."Code"."</th>";
echo"<th>"."product"."</th>";
echo"<th>"."price"."</th>";
echo"<th>"."update"."</th>";
echo"<th>"."delete"."</th>";

echo"</tr>";


while ($row = mysqli_fetch_array($req))
     
{  
    // while($row = $result->fetch_assoc()) {

// if ($row['Code']==$_GET['Code']){
//     echo '<form  action = "update.php" method = "POST">' ; 
//     echo '<td> <input type = "number" class = "form-control" name = "Code" value = "' . $row ['Code']. '" disabled > </td>' ; 
//     echo '<td> <input type = "texte" class = "form-control" name = "name" value = "' . $row ['Namepr']. '"> </td>' ; 
//     echo '<td> <input type = "number" class = "form-control" name = "Prise" value = "' . $row ['Prise']. '"> </td>' ; 
//     echo '<td> <button type = "submit" name="Update" > Enregistrer </button> </td>' ; 
   
//     echo '<input type = "hidden" name = "id" value = "' . $row ['Code']. '">' ; 

// }   
// else{


echo "<tr>";
echo "<td>".$row["Code"]; "</td>";
echo "<td>".$row["Namepr"]; "</td>";
echo "<td>".$row["Prise"]; "</td>";
echo  '<td>  <button class="btn" type="submit"  > <a href="update.php?Code='. $row['Code'].'" > Update </a> </button></ td > ' ; 
echo  '<td>  <button class="btn" type="submit"  > <a href="delete.php?Code='. $row['Code'].'" > Delete </a> </button></ td > ' ; 
echo "</tr>";

// } 


$idp=isset($_POST['idp'])?$_POST['idp']:"";
  $nom=isset($_POST['namep'])?$_POST['namep']:"";
  $price=isset($_POST['pricep'])?$_POST['pricep']:"";
  $idcategory=isset($_POST['idcategory'])?$_POST['idcategory']:1;
  $nomPhoto=isset($_FILES['img']['name'])?$_FILES['img']['name']:"";
  $imageTemp=$_FILES['img']['tmp_name'];
  move_uploaded_file($imageTemp,"../img/".$nomPhoto);

  $requete="INSERT INTO products(idp,namep,pricep,image,idcategory) values(?,?,?,?,?)";
  $params=array($idp,$nom,$price,$nomPhoto,$idcategory);
  $resultat=$con->prepare($requete);
  $resultat->execute($params);

        header("location:products.php");

}










// if (isset($_GET['modifier'])) {
// 	$id = $_GET['Code'];
// 	$name = $_GET['name'];
// 	$prix = $_GET['Prise'];

// 	$res=mysqli_query($con, "UPDATE product SET Namepr='$name', Prise='$prix' WHERE Code=$id");
	
//     header('location: Dachbourd.php');
//     }
//     else{
//         echo "erreur";
//     }
    
// $sql = "UPDATE product SET Namepr='$name', Prise='$prix' WHERE Code=$id";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);


$idp=isset($_POST['idp'])?$_POST['idp']:"";
  $nom=isset($_POST['namep'])?$_POST['namep']:"";
  $price=isset($_POST['pricep'])?$_POST['pricep']:"";
  $idcategory=isset($_POST['idcategory'])?$_POST['idcategory']:1;



     $nomPhoto=isset($_FILES['img']['name'])?$_FILES['img']['name']:"";
     $imageTemp=$_FILES['img']['tmp_name'];
     move_uploaded_file($imageTemp,"../img/".$nomPhoto);

    $requete="INSERT INTO products(idp,namep,pricep,image,idcategory) values(?,?,?,?,?)";
    $params=array($idp,$nom,$price,$nomPhoto,$idcategory);
   $resultat=$con->prepare($requete);
    $resultat->execute($params);

        header("location:products.php");




        <form action="insertproduct.php" method="POST"  class="overl__container"  enctype="multipart/form-data">
            Id : <input type="text" name="idp" id="idp">
            Name : <input type="text" name="namep" id="namep">
            Price : <input type="text" name="pricep" id="price">
            Image : <input type="file" name="img" id="img">
            Idcategory : <input type="text" name="idcategory" id="category">
            <input type="submit" value="Add">
       </form>





?>


///////////////////////////////////////////////////////////////////////////////////
<div class="popapp"    id="myModal" >
<span class="close">&times;</span>

<form method="POST" action=""  enctype="multipart/form-data" >
		
   
        <div class="input-group">
                 <!-- <label>Name : </label> -->
                 <input type="text" name="Code" value="" disabled >
             </div>        
             <div class="input-group">
                 <!-- <label>Name</label> -->
                 <input type="text" name="name" value="" required="">
             </div>
             <div class="input-group">
                 <!-- <label>Address</label> -->
                 <input type="text" name="price" value="" required="">
             </div>
             <div class="input-group">
                 <!-- <label>Address</label> -->
                 <input type="file" name="my_image" value="">
             </div>
             <div class="input-group">
                 <button class="btn" type="submit" name="save" >edit</button>
                
             </div>
         </form>

</div>
<div class="input-popp">
                 <button class="btn" id="myBtn" type="submit" name="popp" >ajouter</button>
                
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
$Show = mysqli_query($con, "SELECT * FROM product");
while($r = mysqli_fetch_array($Show)): ?>
    <tr>
     <td><?php echo $r['Namepr']; ?></td>
     <td><?php echo $r['Prise']; ?></td>
     <td> <img src="img/<?php echo $r['Image']; ?>" alt="" width="150px" height="60px">  </td>
     <td> <button><a href="update.php?update_id=<?php echo $r['Code']; ?>" >Update</a> </button> </td>
     <!-- <td><a href="delete.php?delete_id=<?php echo $r['Code']; ?>" >Delete</a></td> -->


     <td> <input type="button" onclick="confirmer(<?php echo $r['Code']; ?>)" value='Delete'> </td>


    </tr>
    <?php endwhile; ?>
 </tbody>
 </table>

</div>





//////////////////////////////////////////////////////////////////////login page


<div class="dachbourd__adminuser">
      <div class="dachbourd__adminuser__profileadmine">
      <img src="images/unauthorized-person.png" alt="">
      </div>
      <!-- session -->
      <?php
    session_start();

    if(isset($_SESSION['User']))
    {     
          echo '<a class="logout" href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:login.php");
    }

?>
   <div class="btnhome">
   <button class="btn" type="submit" ><a class="a" href="home.php">Home</a></button>
   <button class="btn" type="submit"  ><a class="a"  href="menu.php">Menue</a></button>

     </div>
  </div>
  <div class="dachbourd__hellobackground">
      <di class="titredach">

      <!-- <h1>Dachboard</h1> -->
      <div class="count">
          <div class="countdisplay">
      <img src="images/project.png" alt="">
      <h3>Product</h3>
      <h4><?php echo "Nbr= ".$affiche['nbproduct'] ?></h4>
            </div> 
            
  </div>
  <div class="count">
          <div class="countdisplay">
      <img src="images/project.png" alt="">
      <h3> admins</h3>
      <h4><?php echo "Nbr= ".$affiche1['nbpradmin'] ?></h4>
            </div> 
            
  </div>
      </di>
  </div>









  &__hellobackground { grid-area: hellobackground; 
    
   
    color: white;
      text-align: center;
      .titredach{
        height: 100%;
        margin-top: 30px;

        
        h1{
          color: black;
          font-size: 30px;
          margin-bottom: 20px;
        }
    

             .count{
               color:black;
               display: flex;
              justify-content: center;
               img{
                 width: 15%;
                 margin-top: 13px;

               }
               .countdisplay{
                background-color: #949499;
                height: 194px;
                border-radius: 38px;
               }
             }

      }
  
    
    
    }







    &__profileadmine{
        img{
          width: 50%;
        }
        display: flex;
        justify-content: center;
      }

      &__well{
        color: white;
        background-color: #747474;
       padding: 20px;
       text-align: center;
      }
      &__well:hover{
        background-color: #FD8802;
        cursor: pointer;
      }
    
      .logout{
        background-color: #80776b;
        padding: 12px;
        display: block;
        text-align: center;
        text-decoration: none;
        color: white;
        // margin-bottom: 10px;
       
      }
      .logout:hover{
        background-color: #FD8802;

      }
      .btnhome{
        text-align: center;
        display: flex;
        justify-content: space-around;
        a{
          color: white;
          text-decoration: none;
        }
       
        .btn{
          border: none;
          background-color: #615d56;
          padding: 15px;
          width: 50%;
          cursor: pointer;
          outline: none;
        
         
         
        }
        .btn:hover{
          background-color: #FD8802;

        }
      }
      a{
        text-decoration: none;
        color: white;
      }