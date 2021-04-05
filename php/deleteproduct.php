<?php
$conn = mysqli_connect("localhost","root", "", "restaurant");
$code = isset($_GET["Code"])?$_GET["Code"]:0;
$query="DELETE FROM food WHERE Code=$code";
$req=mysqli_query($conn,$query);
header("Location:product.php");
