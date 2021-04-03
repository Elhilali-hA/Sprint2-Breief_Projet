<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/breif2/satyl.css/stayl.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="background">
</div>
<div class="backopa">
    <div class="backopa__logo"></div>
       <h1>Login</h1>
     <form action="connect.php" method="POST"> 
     <div class="backopa__user">
        <div class="icon-user"></div>
       <input type="text" name="name" placeholder="Username" size="40">
    </div>
    <div class="backopa__pass">
        <div class="icon-pass"></div>
        <input type="password" name="password" placeholder="Password" size="40">
    </div>

    <div class="backopa__button">
     <button id="but" style="color: white;" name="login">Login</button>
     <?php 
                        if(@$_GET['vide']==true)
                        {
                    ?>
                        <div class="alert"><p><?php echo $_GET['vide'] ?></p></div>
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['incorrect']==true)
                        {
                    ?>
                        <div class="alert"><p><?php echo $_GET['incorrect'] ?></p></div>
                    <?php
                        }
                    ?>
      
    </div>


</form>
</div>
</body>
</html>