<?php

  $conn = mysqli_connect("localhost","root", "", "food");
  session_start();
  
  
  if(isset($_POST["login"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    if(empty($_POST['name']) || empty($_POST['password']))
    {
         header("location:login.php?vide= enter username/pass");
    }
    else
    {
     $query= "select * from admin where pseudo='$name' and Password='$password'";
         $result=mysqli_query($conn,$query);

         if(mysqli_fetch_assoc($result))
         {
             $_SESSION['User']=$name;
             header("location:profile.php");
         }
         else
         {
             header("location:login.php?incorrect= Please Enter Correct User Name and Password ");
         }
    }
 }
   


?>