<?php

session_start();
$conn = mysqli_connect("localhost","root", "", "food") or die('Unable To connect');
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
     $mess = "Password is not correct";
     echo $mess;
    }
     if($paa!==true){
        $mes = "new/cofirm Password different ";
        echo $mes;
     }

if(($p==true)&($pa==true)&($paa==true))
  
     {
         mysqli_query($conn,"UPDATE admin set password='" . $newpass . "' WHERE pseudo='" . $code . "'");
         
             $message = "Password Changed Sucessfully";
             echo $message;
           
        }  if(($p==true)&($pa!==true)&($paa==true)){
     
            echo "Password is not correct";

}
if(($p==true)&($pa==true)&($paa!==true)){
    echo "new/cofirm Password different ";

}




?>