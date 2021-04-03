<?php
$conn = mysqli_connect("localhost","root", "", "food");
$query="SELECT * FROM inbox";
$req=mysqli_query($conn,$query);
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
    <title>Inbox</title>
</head>
<body>
    
</body>
</html>
<?php include 'test.php';  ?> 
    
    
    <table>
    <tr>
      <th>Full Name</th>
      <th>Email</th>
      <th>phone</th>
      <th>Message</th>
      <th>delete</th> 
      
      
      
      
      
    </tr>

    </div>
    
<?php 
  
     
     while ($row = mysqli_fetch_array($req))
     {
?>
     <tr>
       <td> <?php echo $row["fullName"]; ?> </td>
       <td> <?php echo $row["Email"]; ?> </td>
       <td> <?php echo $row["phone"]; ?> </td>
       <td><p> <?php echo $row["message"]; ?></p> </td>

       <td><button type="submit" name="Delete"><a onclick="return confirm('are you sure')" href="deletemsg.php?id=<?php echo $row["id"];?>"> Delete </a> </button> </td>
       
     </tr>

<?php
     } 
?>




    </table>