<?php
$conn = mysqli_connect("localhost","root", "", "food");

$code = isset($_POST["Code"])?$_POST["Code"]:0;
$name = isset($_POST["Name"])?$_POST["Name"]:"";
$price = isset($_POST["Price"])?$_POST["Price"]:"";
$image = isset($_POST["image"])?$_POST["image"]:"";
$nomphoto =isset($_FILES['image']['name'])?$_FILES['image']['name']:"";
$imageTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($imageTemp,"../img/".$nomphoto);

$query="UPDATE products SET Name='$name', Price=$price, image='$nomphoto' where Code=$code";
$req=mysqli_query($conn,$query);
     
    header("location:product.php");
?>