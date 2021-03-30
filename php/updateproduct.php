<?php

$code = isset($_GET["Code"])?$_GET["Code"]:0;
$conn = mysqli_connect("localhost","root", "", "food");
$query="SELECT * FROM products where Code=$code";
$req=mysqli_query($conn,$query);
$row = mysqli_fetch_array($req)

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/breif2/satyl.css/stayl.css">
    <title>Product</title>
  </head>
  <body>
    <?php include 'test.php';  ?> 
    
    <div class="alt">
    <div class="topp">
        <h1>Food-restaurant</h1>
        <div class="searchh">
        <input type="text" placeholder="Rechercher un plat" size="50">
      
    </div>
    </div>
    </div>
    <div class="input">

<form action="update.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="Code" value="<?php echo $row["Code"];?>" >
   <div>
   <label for="fname">Product name:</label> <input type="text" name="Name"  size="40" style="margin-top:10px ;" value="<?php echo $row["Name"] ?>" >
   </div>
   <div>
   <label for="fname">Price:</label> <input type="text" name="Price" style="margin-top: 20px; " size="40" value="<?php echo $row["Price"] ?>" >
   </div>
   <div>
   <label for="fname">image:</label> <input type="file" name="image" style="margin-top: 20px;margin-left: 35px;"size="40" value="<?php echo $row["image"] ?>">
   </div>
   <button id="changer" type="submit" name="spass">Modify</button>
</form>




  </div>  
    

</body>
</html>