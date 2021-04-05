<?php

session_start();
$conn = mysqli_connect("localhost","root", "", "restaurant") or die('Unable To connect');
$code = $_SESSION["User"];


$currentpassword = isset($_POST["currentpassword"])?$_POST["currentpassword"]:"";
$newpass = isset($_POST["newpassword"])?$_POST["newpassword"]:"";
$confirmp = isset($_POST["confirmpassword"])?$_POST["confirmpassword"]:"";

$result = mysqli_query($conn,"SELECT * from admin WHERE pseudo='" . $code . "'");
$row=mysqli_fetch_array($result);

$p=$currentpassword == $row["password"] && $newpass == $confirmp;
$pa=$currentpassword == $row["password"];
$paa =$newpass == $confirmp;

if($pa!==true){
    header("location:profile.php?false= Password is not correct");
    }
     if($paa!==true){
        header("location:profile.php?diff= new/cofirm Password different");
     }

if(($p==true)&($pa==true)&($paa==true))
  
     {
         mysqli_query($conn,"UPDATE admin set password='" . $newpass . "' WHERE pseudo='" . $code . "'");
         
             header("location:profile.php?good= Password Changed Sucessfully");
           
        }  if(($p==true)&($pa!==true)&($paa==true)){
     
            header("location:profile.php?false= Password is not correct");
            

}
if(($p==true)&($pa==true)&($paa!==true)){
    header("location:profile.php?diff= new/cofirm Password different");

}




?>