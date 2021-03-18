
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="satyl.css/stayl.css">
    <title>Login</title>
</head>
<body>
<div class="background">
</div>
<div class="backopa">
    <div class="backopa__logo"></div>
   
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
        <p> Don't have an account ?</p>
    </div>


</form>
</div>
</body>
</html>