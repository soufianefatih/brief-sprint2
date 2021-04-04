<?php 

include "connect.php";
$Show = mysqli_query($con, "SELECT * FROM product");


session_start();
if(!isset($_SESSION['User']))
{
 //  header('location:login.php');
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

</head>
<body>
    <header>
        <div class="navbar">

            <div class="navbar__logo">
                <img src="images/YY FOOD_free-file (2).png" alt="" >
            </div>

                  
            <div class="navbar__nav">
                <a class="a-href" href="home.php">HOME</a>
                <a class="a-href" href="menu.php" >MENU</a>
                <a  class="a-href"href="#about">ABOUT</a>
                <a class="a-href" href="#contact">CONTACT</a>
            </div>
            <?php if(isset($_SESSION["User"]))  { ?>
            <div class="navbar__admin">
                <button id="button1"><a id="abutton" href="Dachbourd.php">Dashboard</a></button>
            </div>
           
           
               


       
        <?php } ?>
        <?php if(!isset($_SESSION["User"]))  { ?>
            <div class="navbar__admin">
                <button id="button1"><a id="abutton" href="login.php">login</a></button>
            </div>


   
        <?php } ?>
      
                   <!-- toggle menu -->
                   <div class="toggle">
                   <i class="fas fa-bars"></i>
                    
                   </div>
                  
    
      </div>
       
        
        
          
     
   
   </header>
        
        <div class="menu">
             <section class="menu__slide">
             <img name="slide" width="100%" height="400px" alt="" >
             <div class="titlemenu">
                <h1> Our menu</h1>
                             
             </div>
                       <!-- <p>
                           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure repellat vel eaque magnam voluptatibus ducimus cupiditate ratione explicabo, rerum praesentium veniam quis est odio corporis ipsum tenetur nam, debitis sapiente.
                       </p> -->
             </section>

             <section class="menu__products order">
          
                <?php
                        while($r = mysqli_fetch_array($Show)): ?>
                         <div class="order__ordermenu">
                           
                             <img src="img/<?php echo $r['Image']; ?>" alt="" > 
                             <br> 
                             <h3>Name : <?php echo $r['Name_product']; ?></h3>  
                            <p>Price : <?php echo $r['Price']." DH"; ?></p>
                            <button id="commande">command now</button>
                     
                        </div>
                <?php endwhile; ?>
            </section>


            <section class= "container__footer">
   <div class="logoftr">
       <div class="logofood">
   <img src="images/YY FOOD_free-file (2).png" alt="" >
   <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Perferendis voluptate fugit</p>
   </div> 
</div>
  <div class="contactus">
      <div class="logofood">
      <h2>Contact us</h2>
                    <div class="pin">
                      <img src="images/pinpin.png" alt="" >
                      <p>Lorem ipsum dolor, sit amet </p>
                    </div>
                    <div class="pin">
                      <img src="images/emaill.png" alt="">
                      <p>Lorem ipsum dolor, sit amet </p>
                     </div>
                    <div class="pin">
                      <img src="images/calll.png" alt="" >
                      <p>+2127563423 // +212512436567</p>
                    </div>
         
      </div>
                  

  </div>
  <div class="opning">
   <div class="logofood">
           <h2>Openinig Now</h2>
           <p>AAAA.......................................AAAAA</p>
           <p>AAAA.......................................AAAAA</p>
           <p>AAAA.......................................AAAAA</p>
           <p>AAAA.......................................AAAAA</p>
           <p>AAAA.......................................AAAAA</p>
       
   </div>
  </div>
  <div class="footer2">
  <div class="copyright">
            <P>Copyright ©2021 </P>
        </div>
             <div class="follow">
                 <p>Follow Us</p>
                 <img src="images/facebook (1).svg" alt="" width="20px">
                 <img src="images/g (1).svg" alt="" width="20px">
                <img src="images/instagram (2).svg" alt="" width="20px">
                <img src="images/twitter (1).svg" alt="" width="20px">
             </div>
             
  </div>
       
       
   </section>
        </div>
  
    
  <script>
   var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = "images/slide1.jpg";
images[1] = "images/slide2.jpg";
images[2] = "images/slide3.jpg";
images[3] = "images/slide4.png";

// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;

   
   </script>





<script src="toggle.js"></script> 
    
</body>
</html>