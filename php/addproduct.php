<?php 
session_start();
include('user.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/breif2/satyl.css/stayl.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
    <title>Addproduct</title>
</head>
<body>
<div class="background">
</div>
<div class="opacityback">
    <div class="opacityback__logo"></div>
   
     
     <div class="opacityback__product">

     <form action="add.php" method="post" enctype="multipart/form-data">  

     <label for="">Code :</label>
       <input type="text" name="Code" placeholder="ID" size="40" style="margin-left: 80px;margin-top:10px">
    </div>

    <div class="opacityback__product">
       <label for="">Product Name :</label>
        <input type="text" name="Name" placeholder="Product name" size="40" style="margin-left: 5px;margin-top:10px">
    </div>

    <div class="opacityback__product">
   <label for="">img location :</label>
   <input type="file" name="image" style="margin-top: 20px;margin-left: 35px;"size="40">
    </div>

    <div class="opacityback__product">
   <label for="">Price :</label>
       <input type="text" name="Price" placeholder="price" size="40" style="margin-left: 65px;margin-top:10px">
    </div>

    <div class="opacityback__button">
     <button id="but" type="submit" style="color: white;" name="Add">Add</button>
    </div>

</form>


</div>
</body>
</html>