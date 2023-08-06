<?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db = "lit";  
    
  //$con = mysqli_connect($host, $user, $password, $db);  

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="css/Register.css">
</head>
<body style="background-image: url(image/book-background.jpg);height: 100%;background-position: center;background-repeat: no-repeat;
background-size: cover">
  <div class="container">
    <form class="registration-form" action="connection-registration.php" method="post">
      <h1>Registration</h1>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="Contact-No">Contact No:</label>
        <input type="Number" id="contact_no" name="contact_no" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="Address">Address:</label>
        <input type="text" id="Address" name="address" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <div class="form-group">
        <button type="submit">Register</button>
      </div>
    </form>
  </div>
</body>
</html>
