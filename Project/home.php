<?php
   
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
    <title>Home</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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
   <main class="container">
   <section class= "container__bacghround">
    <!-- <div class="bacghroundslide">
   <img name="slide" width="100%" height="400px" alt="">
  </div> -->
      <div class="left">
         
         <div class="title">
          <h1>Lorem ipsum dolor sit <br> amet consectetur 
                  
                 </h1>
          <p>Lorem ipsum dolor sit amet  
    
          </p>
          <button id="but">Our menu</button>
   </div>  
    </div>
       
   </section>
   <section class= "container__foodlunch">
       <div class="your">
           <div class="title"> 
           <h2>Lorem ipsum dolor sit  amet consectetur  <br>
           sit  amet 
           </h2>
            
           </div>  
    </div>
       <div class="food">
           <div class="lunch">
           <img  src="images/breakfastfood.png" alt="">
            <h3>breakfast</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit 
                 </p>
           </div>   
        </div>
       <div class="food">
        <div class="lunch">
        <img  src="images/food.png" alt="">
            <h3>Lunch</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit 
                 </p>
       </div>
       </div>
       <div class="food">
        <div class="lunch">
        <img  src="images/dinner.png" alt="">
         <div class="line"></div>  
        <h3>Dinner</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit 
                 </p>
       </div>
       </div>
       
   </section>
   <section class= "container__bestservice">
   <div class="your">
   <div class="title"> 
   <h2>Lorem ipsum dolor sit  amet consectetur  <br>
           sit  amet 
           </h2>>
            
           </div> 
       </div>
       <div class="food">
           <div class="best">
               <img src="images/pizza.jpg" alt="">
               <h3>Pizza</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit .
                 </p>
                 <h4>-50%</h4>
                 <button id="btn3">order now</button>

           </div>
       </div>
       <div class="food">
       <div class="best">
       <img src="images/tajine.jpg" alt="">
               <h3>Tajine</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit .
                 </p>
                 <h4>-50%</h4>
                 <button id="btn3">order now</button>
                
       </div>
       </div>
       <div class="food">
       <div class="best">
       <img src="images/Tacos-au-poulet.jpg" alt="">
               <h3>Tacos</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit .
                 </p>
                 <h4>-50%</h4>
                <button id="btn3">order now</button>
       </div>
       </div>
       
       
       
   </section>
   <section class="container__about" id="about">
   <div class="tilteabout">
       <h1>About Us</h1>
       <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde placeat repellat vitae officiis<br> aut officia, ipsum sunt voluptate at dolor porro dolores eaque inventore molestiae sint ratione tempora id distinctio! Lorem ips
           
       </p>
     
   </div>
   
      
  
  <div class="chef1">
  
      <div class="chef">
  <img src="images/chef-cuisinier-moha.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div>
  <div class="chef2">
  <div class="chef">
  <img src="images/45831.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div>
  <div class="chef3">
  <div class="chef">
  <img src="images/56430.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
</div>
  <div class="chef4">
  <div class="chef">
  <img src="images/45811.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div>

   </section>
   <section class="container__contactnous" id="contact">
   <div class="titre">
   <h1>Contact Us</h1>
       <p>Lorem ipsum dolor sit, amet consectetur 
           adipisicing elit. Unde placeat repellat vitae Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
           
       </p>
   </div>
  <div class="message">
      <div class="messag1">

        <div class="name-email">
         <input type="text" class="fille" placeholder="Your Name">
         <input type="texte" class="fille" placeholder="Your Email">
         <input type="texte" class="fille" placeholder="Your Phone">

        </div>  
        <div class="yourmessage">
           <textarea class="fill" cols="" placeholder="Message"></textarea>
           <button class="bouttonb">send</button>

        </div>     

      </div>
  </div>
  
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
                 <img src="images/facebook (1).svg" alt="" >
                 <img src="images/g (1).svg" alt="" >
                <img src="images/instagram (2).svg" alt="" >
                <img src="images/twitter (1).svg" alt="" >
             </div>
             
  </div>
       
       
   </section>
   <!-- <script>
   var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = "images/Essential-Guide.png";
images[1] = "images/healthy-foods.jpg";
images[2] = "images/healthy-eating.jpg";
images[3] = "images/restaurant-in-valkenswaard.jpg";

// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i <script images.length - 1){
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
   
   </script> -->
     </main>
   
   
   
   
   
   
   
   
   
   
   
   <!-- <div class="background">
            <div class="background__dreams">
                <h1 id="title">Your Dreams 
                    <br>
                               Foods in our shop
                </h1>
                <P id="para">GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG</P>
                <button class="button2">Order Now</button>
            </div>
        </div> -->
        

  <!-- <main>
      <div class="title-main"> 
        <div class="title-main__titre">
        <h2>Your Dreams Foods in our shop</h2>
     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, ex.</p>
     <p>Lorem ipsum, dolor sit amet consectetur .</p>
    </div> 
    </div>
    <div class="cards"><div class="grid-container">
        <div class="Food1">
           <img src="images/lunch.png" alt="">
           <div class="border"></div>
           <h2>Food</h2>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Perferendis voluptate fugit quae distinctio placeat 
                labore cum soluta dolorum architecto natus quaerat totam
                perspiciatis veniam mollitia exercitationem adipisci reiciendis
                necessitatibus officiis, odit aliquam.
                Recusandae placeat ipsam vero consequatur, reiciendis sunt?</p>
        </div>
        <div class="Food2">
            <img src="images/soup.png" alt="">
            <h2>Food</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit quae distinctio placeat 
                 labore cum soluta dolorum architecto natus quaerat totam
                 perspiciatis veniam mollitia exercitationem adipisci reiciendis
                 necessitatibus officiis, odit aliquam.
                 Recusandae placeat ipsam vero consequatur, reiciendis sunt?</p>
        </div>
        <div class="Food3">
            <img src="images/tray.png" alt="">
            <h2>Food</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Perferendis voluptate fugit quae distinctio placeat 
                 labore cum soluta dolorum architecto natus quaerat totam
                 perspiciatis veniam mollitia exercitationem adipisci reiciendis
                 necessitatibus officiis, odit aliquam.
                 Recusandae placeat ipsam vero consequatur, reiciendis sunt?</p>
        </div>
      </div></div>
    
    </main>
    <footer>
        <div class="footer1">
           <div class="grid-container1">
                  <div class="Logo">
                    <img src="images/YY FOOD_free-file (2).png" alt="">
                    <h5>Lorem ipsum dolor sit amet consectetur
                    <h5>Lorem ipsum dolor sit amet consectetur  
                    </h5>
                    <h5>Lorem ipsum dolor sit amet consectetur 
                    </h5>
                  </div>
            <div class="contact-us">
                <H1>Contact us</H1>
                    <div class="pin">
                      <img src="images/pin.png" alt="">
                      <p>ttttttttttttttttttttt</p>
                    </div>
                    <div class="pin">
                      <img src="images/pin.png" alt="">
                      <p>ttttttttttttttttttttt</p>
                     </div>
                    <div class="pin">
                      <img src="images/pin.png" alt="">
                      <p>ttttttttttttttttttttt</p>
                    </div>
            </div>
            <div class="open">
                <H1>Openinig Now</H1>
            </div>
          </div>
        </div>
        <div class="footer2">
             <div class="copyright">
            <P>Copyright ©2021 </P>
        </div>
             <div class="footer2__follow">
                 <p>Follow Us</p>
                 <img src="images/facebook (2).png" alt="">
                 <img src="images/g.png" alt="">
                <img src="images/instagram (1).png" alt="">
                <img src="images/twitter.png" alt="">
             </div>
        </div>
        
    </footer> -->
    <!-- <div class="chef1">
      <div class="chef">
  <img src="images/CHEF 2-01.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div>
  <div class="chef2">
  <div class="chef">
  <img src="images/Chef Cooking.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div>
  <div class="chef3">
  <div class="chef">
  <img src="images/Chef Illustration.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
</div>
  <div class="chef4">
  <div class="chef">
  <img src="images/Cooking Chef.jpg" alt="" >
  <h3>chef</h3>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit</p>
 </div>
  </div> -->


   <script src="toggle.js"></script> 

</body>
</html>


<!-- <div class="titre"></div>
  <div class="message1">
      <div class="message">
      <input type="text" class="fille" placeholder="Your Name">
      <input type="texte" class="fille" placeholder="Your Email">
      <input type="texte" class="fille" placeholder="Your Phone">
      </div>
  </div>
  <div class="message2">
  <div class="message">
  <textarea class="fill" placeholder="Message"></textarea>
  <button class="bouttonb">send</button>
  </div>
  </div> -->