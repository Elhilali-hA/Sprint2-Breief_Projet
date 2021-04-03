<?php
$conn = mysqli_connect("localhost","root", "", "food");
$query="SELECT * FROM products limit 4";
$req=mysqli_query($conn,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/breif2/satyl.css/stayl.css">
    <script src="https://kit.fontawesome.com/5891d200cb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
    <title>Food-Restaurant</title>
</head>
<body>
    <div class="all"></div>
    <?php include 'head-home.php';  ?> 

    <footer class="foot">
        <div class="foot__img">
      <a href="">  <i class="fab fa-facebook"></i></a>
      <a href="">  <i class="fab fa-twitter"></i></a>
      <a href="">  <i class="fab fa-instagram"></i></a>
        </div>
        <div class="foot__txt">
           <a href="menu.php">Menu</a> 
           <a href="contact.php">Contact</a> 
           <a href="#about">About</a> 
        </div>
        <div class="foot__button">
           <a href="login.php"> <button id="b2" ><p>Login Admin</p> </button></a>
        </div>
    </footer>

    <h1 class="welcome">Welcome !</h1>
    
    <main class="bac_img">
    <?php 


while ($row = mysqli_fetch_array($req))
{
?>
        <div class="back_img">
            <img class="image1" src="../img/<?php echo $row["image"]; ?>" alt="">
    <div class="h1">
        <h1><?php echo $row["Name"];?></h1>
        <div class="paragraph1">
            <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Odio cumque veritatis at ab, sit a cum possimus </p>
        </div>
    </div>
</div>
<?php
} 
?>
<a href="menu.php"><button id="commander">Commander</button></a> 
</main>
<main class="deliver">
    <div class="grenn">
        <div class="food"></div>
            <div class="delivery"></div>
            <div class="quality"></div>
          <p>zerty</p>
          <p>gbnxs,</p>
          <p>edcxvbsk</p>
        </div>
    </main>
    <main class="price">
        <div class="price__background">
        <div class="price__pizza"></div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae doloremque  odit dolor, animi esse veniam? Minima, sint temporibus.</p>
    </div>
</main>

   
    <footer class="footer">
        <div class="footer__background">
            <div class="footer__background__head">
                <h1>Our Team</h1>
            </div>

            <div class="footer__background__card1">
            </div>
            <div class="footer__background__card2"></div>
            <div class="footer__background__card3"></div>
            <div class="footer__background__card4"></div>
            <div class="footer__background__foot1"> <p>Cooking</p> </div>
            <div class="footer__background__foot2"><p>Serving</p> </div>
            <div class="footer__background__foot3"><p>cleaning</p> </div>
            <div class="footer__background__foot4"><p>Delivering </p> </div>
        </div>
        <div class="footer__aboutus" id="about">
            <div class="footer__aboutus__backcolr">
                <h1>About<span style="color: white;font-size: 40px;margin-left:30px;">Food-Restaurant</span></h1>
            </div>
            <div class="footer__aboutus__back"></div>
           
        </div>
    </footer>
    
    
    
</body>
</html>
