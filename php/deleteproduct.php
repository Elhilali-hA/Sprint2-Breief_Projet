<?php
$conn = mysqli_connect("localhost","root", "", "food");
$code = isset($_GET["Code"])?$_GET["Code"]:0;
$query="DELETE FROM products WHERE Code=$code";
$req=mysqli_query($conn,$query);
header("Location:product.php");
