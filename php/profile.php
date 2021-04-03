<?php
session_start();
    include('user.php');
     
    if(isset(  $_SESSION['User'])){

       $var =$_SESSION['User'];
        $conn = mysqli_connect("localhost","root", "", "food");
        $query="SELECT * FROM admin  where pseudo ='$var'";
        $req=mysqli_query($conn,$query);
    }
        

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/breif2/satyl.css/stayl.css">
    <script src="https://kit.fontawesome.com/5891d200cb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
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
        <label for="fname">password:</label> <input type="password" name="paswword" disabled style="margin-top: 20px;margin-left: 10px;"size="40" value="<?php echo $row["password"] ; ?>"></div>
</main>

<?php
     } 
?>








<div>

</div>
    <main class="password"> 
<form method="post" action="pass.php">
        <h2>Change Password:</h2>
        <div>
        <label for="fname">password:</label> <input type="password" name="currentpassword" style="margin-top: 20px;margin-left: 60px;">
    </div>
    <div>
        <label for="fname">New password:</label> <input type="password" name="newpassword" style="margin-top: 20px;margin-left: 30px;">
    </div>
        <div class="password__butt">
         <label for="fname">Comfirm password:</label> <input type="password" name="confirmpassword" style="margin-top: 20px;">  
       <button id="changer" type="submit" name="change">changer</button>
        </div>
</form>
    </main>
</main>







</div>
</body>
</html>