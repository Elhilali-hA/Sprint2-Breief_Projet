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
        <a href="addproduct.php"><button class="add"><div class="plus"></div></button></a>
    </div>
    </div>

    <div class=""></div>
    
    <table>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>update/delete</th> 
      
      
      
      
      
    </tr>

    </div>
    
<?php 

     
     while ($row = mysqli_fetch_array($req))
     {
?>
     <tr>
       <td> <?php echo $row["Code"]; ?> </td>
       <td> <?php echo $row["Name"]; ?> </td>
       <td> <?php echo $row["Price"]; ?> </td>
       <td><img style="width: 5rem; height:3rem; background-size:cover;background-position:24px 24px " src="../img/<?php echo $row["image"]; ?>" alt="">  </td>

       <td> <button type="submit" name="Update" > <a href="updateproduct.php?Code=<?php echo $row["Code"];?>"> Update </a> </button><button type="submit" name="Delete"><a onclick="return confirm('are you sure')" href="deleteproduct.php?Code=<?php echo $row["Code"];?>"> Delete </a> </button> </td>
       
     </tr>

<?php
     } 
?>




    </table>
    

</body>
</html>