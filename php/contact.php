<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/breif2/satyl.css/stayl.css">
    <script src="https://kit.fontawesome.com/5891d200cb.js" crossorigin="anonymous"></script>
    <title>Contact us</title>
</head>
<body>
  <?php include 'head-menu.php';  ?>  
  <form action="insert.php" method="POST">
  <div class="leftside">
  <h1>Contact Us</h1>
 
  
  <div>
      <label for="fname">Email Adresse<span style="color: red;">*</span>:</label> <input placeholder="Your Email" type="text" name="email" size="40">
    </div>
    <div>
        <label for="fname">full Name <span style="color: red;">*</span>:</label> <input placeholder="Your fullname" name="fullname" type="text" size="40">
    </div>
    <div>
        <label for="fname">Phone :</label> <input placeholder="Your Phone"  type="text" size="40" name="phone" style="margin-left:3.5rem;">  </div>
        <label for="fname">Message<span style="color: red;">*</span>:</label>
        <textarea placeholder="Write your message"  id="textarea" cols="30" name="message" rows="10"></textarea>
        <button id="send" type="submit" name="send">Send</button>
    </div>
</form>
  <div class="rightside"></div>
</body>
</html>