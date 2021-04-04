<?php

include "connect.php";
session_start();
if(!empty($_POST['save'])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    if(empty($_POST['name']) || empty($_POST['password']))
    {
         header("location:login.php?Empty= Please Fill in the Blanks");
    }

    else
    {
     $query= "select * from admin where Name='$name' and Password='$password'";
         $result=mysqli_query($con,$query);

         if(mysqli_fetch_assoc($result))
         {
             $_SESSION['User']=$name;
             header("location:Dachbourd.php");
         }
         else
         {
             header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
         }
    }
 }



// session_start();
//     if(isset($_POST['save']))
//     {
//        if(empty($_POST['name']) || empty($_POST['password']))
//        {
//             header("location:login.php?Empty= Please Fill in the Blanks");
//        }
//        else
//        {
//         $query= "select * from admin where Name='$name' and Password='$password'";
//             $result=mysqli_query($con,$query);

//             if(mysqli_fetch_assoc($result))
//             {
//                 $_SESSION['User']=$_POST['name'];
//                 header("location:dachbourdprofile.php");
//             }
//             else
//             {
//                 header("location:login.php?Invalid= Please Enter Correct User Name and Password ");
//             }
//        }
//     }
//     else
//     {
//         echo 'Not Working Now Guys';
// //     }



?>
