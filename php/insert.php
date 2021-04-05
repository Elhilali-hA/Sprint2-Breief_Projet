<?php
$conn = mysqli_connect("localhost","root", "", "restaurant") or die('Unable To connect');

if(isset($_POST["send"])){

    $name = isset($_POST["fullname"])?$_POST["fullname"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $phone = isset($_POST["phone"])?$_POST["phone"]:"";
    $mess = isset($_POST["message"])?$_POST["message"]:"";

    if(empty($name) || empty($mess) || empty($email))
{
    header("location:contact.php?fill= fill * blank");
         
    }
    $sql="INSERT INTO inbox (fullName, Email, message, phone) VALUES ('$name', '$email', '$mess', '$phone')";
 if(mysqli_query($conn,$sql))
 {
    header("location:contact.php?send= message send");
        
         }
         else{
            header("location:contact.php?error= ERROR: Could not able to execute");
            
         }
        
 
}