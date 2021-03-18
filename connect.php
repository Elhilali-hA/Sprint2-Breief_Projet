<?php

  $conn = mysqli_connect("localhost","root", "", "food");
  if(isset($_POST["login"])){
    $name=$_POST["name"];
    $password=$_POST["password"];
    $query= "select * from admin where Name='$name' and password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        header('location:home.php');

    }else{
        echo"login not success";
    }
}

?>