<?php
$conn = mysqli_connect("localhost","root", "", "food") or die('Unable To connect');

if(isset($_POST["send"])){

    $name = isset($_POST["fullname"])?$_POST["fullname"]:"";
    $email = isset($_POST["email"])?$_POST["email"]:"";
    $phone = isset($_POST["phone"])?$_POST["phone"]:"";
    $mess = isset($_POST["message"])?$_POST["message"]:"";

    if(empty($name) || empty($mess) || empty($email))
{
         echo "vide vider";
    }
    $sql="INSERT INTO inbox (fullName, Email, message, phone) VALUES ('$name', '$email', '$mess', '$phone')";
 if(mysqli_query($conn,$sql))
 {
         
             echo "message send";
         }
         else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
         }
        
 
}