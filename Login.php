<?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db = "lit";  
    
  $con = mysqli_connect($host, $user, $password, $db);  

  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body style="background-image: url(image/book-background.jpg);height: 100%;background-position: center;background-repeat: no-repeat;
background-size: cover">

  <div class="container">
    <form action="connection-login.php" method="post" class="login-form">
      <h1>Login</h1>
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
