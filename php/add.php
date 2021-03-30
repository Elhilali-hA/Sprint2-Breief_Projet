<?php
 $conn = mysqli_connect("localhost","root", "", "food");

$code = isset($_POST["Code"])?$_POST["Code"]:0;
$name = isset($_POST["Name"])?$_POST["Name"]:"";
$price = isset($_POST["Price"])?$_POST["Price"]:"";
$image = isset($_POST["image"])?$_POST["image"]:"";
$nomphoto =isset($_FILES['image']['name'])?$_FILES['image']['name']:"";
$imageTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($imageTemp,"../img/".$nomphoto);

$query= "INSERT into products(Code,Name,Price,image) values ('$code','$name','$price','$nomphoto')";
$req=mysqli_query($conn,$query);
     
    header("location:product.php");

?>