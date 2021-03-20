
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/breif2/css/stayl.css">
    <title>Addproduct</title>
</head>
<body>
<div class="background">
</div>
<div class="opacityback">
    <div class="opacityback__logo"></div>
   
     <form action="add.php" method="POST"> 
     <div class="opacityback__product">
     <label for="">ID :</label>
       <input type="text" name="ID" placeholder="ID" size="40" style="margin-left: 80px;margin-top:10px">
    </div>
    <div class="opacityback__product">
       <label for="">Product Name :</label>
        <input type="text" name="Product" placeholder="Product name" size="40" style="margin-left: 5px;margin-top:10px">
    </div>
    <div class="opacityback__product">
   <label for="">img location :</label>
   <button name="fichier" style="margin-left: 10px;margin-top:10px">choisir un fichier</button>
    </div>
    <div class="opacityback__product">
   <label for="">Price :</label>
       <input type="text" name="price" placeholder="price" size="40" style="margin-left: 65px;margin-top:10px">
    </div>

    <div class="opacityback__button">
     <button id="but" style="color: white;" name="Add">Add</button>
    </div>


</form>
</div>
</body>
</html>