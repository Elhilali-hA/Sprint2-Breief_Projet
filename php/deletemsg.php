<?php
$conn = mysqli_connect("localhost","root", "", "food");
$code = isset($_GET["id"])?$_GET["id"]:0;
$query="DELETE FROM inbox WHERE id=$code";
$req=mysqli_query($conn,$query);
header("Location:inbox.php");