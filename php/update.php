<?php
$conn = mysqli_connect("localhost","root", "", "restaurant");

$code = isset($_POST["Code"])?$_POST["Code"]:0;
$name = isset($_POST["Name"])?$_POST["Name"]:"";
$price = isset($_POST["price"])?$_POST["price"]:"";

$image = isset($_POST["image"])?$_POST["image"]:"";
$nomphoto =isset($_FILES['image']['name'])?$_FILES['image']['name']:"";
$imageTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($imageTemp,"../img/".$nomphoto);


if($imageTemp != ""){
move_uploaded_file($imageTemp,"../img/".$nomphoto);
$query="UPDATE food SET Name='$name', price=$price, image='$nomphoto' where Code=$code";
$req = mysqli_query($conn,$query);
     
     if($req){
         header("location:product.php");
        }
    else{
        echo "error";
    }

}
else{
  $query="UPDATE food SET Name='$name', price=$price where Code=$code";
    $req=mysqli_query($conn,$query);
        
    if($req){
        header("location:product.php");
    }
    else{
        echo "error 2";
    }
}




?>