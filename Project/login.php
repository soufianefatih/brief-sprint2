<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
	<link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>
<body>
<header>
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
<section class="form">
<div class="form__form1">

<div class="profilelogo"></div>
<h1>Log in</h1>
    <form action="loginconect.php" method="POST">   
    
<input id="inputbtn"  type="text" name="name" placeholder="Username">
<input id="inputbtn"    type="password" name="password" placeholder="Pasword">
<input  id="inputsubmit"   type="submit" value="LOGIN" name="save">

</form>
                      <!-- //////confirmatin login ////////////-->
                
                
                <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>





<div class="bottom-text">
    <input type="checkbox" name="remember" checked="checked"> Remember me
    <a href="#">Forget Password ?</a>

</div>






</div> 

</section>


   <script src="toggle.js"></script> 
</body>
</html>






