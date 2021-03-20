<?php
$conn = mysqli_connect("localhost","root", "", "food");
if(isset($_POST["Add"])){
  
  $id=$_POST['ID'];
  $product=$_POST['Product'];
  $price=$_POST['price'];

  $query= "Insert into products(Code,Name,Price) value ('$id','$product','$price')";
  $result=mysqli_query($conn,$query);
  if($result){
      echo "coool";
  }else{
      echo "error";
  }
  
}












?>