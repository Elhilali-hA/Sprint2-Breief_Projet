<?php
$conn = mysqli_connect("localhost","root", "", "food");
$query="SELECT * FROM admin";
$req=mysqli_query($conn,$query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/breif2/satyl.css/stayl.css">
    <title>Document</title>
</head>
<body>
    <?php include 'test.php'; ?>
   
<div class="image">
     <main class="body">
    <main class="profil">
        <h1>Profil</h1>
        <h2>Account information</h2>

        <?php 

     
     while ($row = mysqli_fetch_array($req))

     {
?>
        <div>
        <label for="fname">First name:</label> <input type="text" name="" disabled size="40" value="<?php echo $row["firstname"]; ?>">
        <div>
        <label for="fname">Last name:</label> <input type="text" name="lastname"disabled style="margin-top: 20px; " size="40" value="<?php echo $row["lastname"]; ?>">
        <div>
        <label for="fname">n°tel:</label> <input type="text" name="tel"disabled style="margin-top: 20px;margin-left: 35px;"size="40" value="<?php echo $row["tel"]; ?>">
        <div>
        <label for="fname">Email:</label> <input type="text" name="email" disabled style="margin-top: 20px;margin-left: 30px;"size="40" value="<?php echo $row["Email"]; ?>">
        <div>
        <label for="fname">password:</label> <input type="text" name="paswword" disabled style="margin-top: 20px;margin-left: 10px;"size="40" value="<?php echo $row["password"]; ?>"></div>
</main>

<?php
     } 
?>









<form method=post>
    <main class="password"> 
        <h2>Change Password:</h2>
        <div>
        <label for="fname">password:</label> <input type="password" name="password" style="margin-top: 20px;margin-left: 60px;">
    </div>
    <div>
        <label for="fname">New password:</label> <input type="password" name="n_password" style="margin-top: 20px;margin-left: 30px;">
    </div>
        <div class="password__butt">
         <label for="fname">Comfirm password:</label> <input type="password" name="c_password" style="margin-top: 20px;">  
       <button id="changer" type="submit" name="spass">changer</button>
        </div>
    </main>
</main>


</form>




</div>
</body>
</html>