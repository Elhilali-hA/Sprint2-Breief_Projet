<?php
$conn = mysqli_connect("localhost","root", "", "food");
$query="SELECT * FROM products";
$req=mysqli_query($conn,$query);






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
    <title>Document</title>
</head>
<body>
   <?php include 'head-home.php';  ?> 
<div class="all"></div>
    <div class="top">
        <h1>Food-restaurant</h1>
        <div class="search">
        <input type="text" placeholder="Rechercher un plat" size="50">
       <a href=""><button class="contact"><div class="tele"></div></button></a>
        </div>
    </div>
    <div class="commande">
        <h1>Commande</h1>
        <div class="passer">
            <p>sous-total</p>
            <p>livraison</p>
            <p>total</p>
            <button class="pcommande">Passer la commande</button>
        </div>
    </div>







    <main class="b_img">

    <?php 

     
while ($row = mysqli_fetch_array($req))
{
?>
 <div class="back_img">
    <img class="image1" src="../img/<?php echo $row["image"]; ?>" alt="">
    <div class="h1">
        <h1><?php echo $row["Name"];?></h1>
        <div class="paragraph1">
            <p><?php echo $row["Price"] .'Dh' ;?></p>
    </div>
 </div>
</div>

<?php
} 
?>












       





</main>




</body>
</html>