<?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db = "lit";  
    
  $con = mysqli_connect($host, $user, $password, $db);  

  session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Email Sender</title>
</head>
<link rel="stylesheet" href="css/Nav.css">
<link rel="stylesheet" href="css/login.css">

</head>
<style>
    button{
        padding:15px;
        border-radius:8px;
    }
   #to{
    height:20px;
    width:280px;
   }
</style>
<body style="background-color: #fff8dc">

<header class="navigation">
        <div class="nav-left">
            <a href="Homepage.html"><img src="image/lit.png" width="200px" alt=""></a>
            
                <ul>
                    <li><a href="Userhomepg.php">Home</a></li>
                    <li><a href="display_user.php">Products</a></li>
                    <li><a href="Userhomepg.php">About Us</a></li>
                    <li><a href="#Userhomepg.php">Contact</a></li>
                  </ul>
                </div>
                <div class="nav-right">
                  <img src="image/profile-user.png" class="user-pic" onclick="toggleMenu()" alt="">
                  <div class="sub-menu-wrap" id="subMenu">
                    <div  class="sub-menu">
                      <div class="user-info">
                        <img src="image/profile-user.png" width="60px" alt="">
                        <h3><b><?php echo $_SESSION['username'] ?></b></h3>
                      </div>
                      <hr>
                      
                      <a href="Uploadpage.php" class="sub-menu-link">
                        <img src="image/profile.png" alt="">
                        <p>Upload</p>
                        <span>></span>
                      </a>
                      
                      <a href="history.php" class="sub-menu-link">
                        <img src="image/setting.png" alt="">
                        <p>My DashBoard</p>
                        <span>></span>
                      </a>
                      
                      
                              <a href="#" class="sub-menu-link">
                                <img src="image/help.png" alt="">
                                <p>Help & Support</p>
                                <span>></span>
                            </a>

                            <a href="#" class="sub-menu-link">
                              <img src="image/setting.png" alt="">
                              <p>Settings & Privacy</p>
                              <span>></span>
                            </a>
                            
                            <a href="#" class="sub-menu-link">
                              <img src="image/logout.png" alt="">
                              <p>Logout</p>
                              <span>></span>
                        </a>

                        
                      </div>
                    </div>
                  </div>
                </header>

       
        <div class="container">
                   
     <form class="login-form">
     <label > <?php echo $_SESSION['username']?> </label><br><br>
        <label for="to">To:</label><br>
        <input type="email" id="to" name="to" required><br><br>
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>
        <label for="body">Message:</label><br>
        <textarea id="body" name="body" required></textarea><br><br>
        <button type="button" onclick="sendEmail()">Send Email</button>
    </form>
</div>
    <script>
        function sendEmail() {
            const to = document.getElementById("to").value;
            const subject = document.getElementById("subject").value;
            const body = document.getElementById("body").value;
            const mailtoLink = `mailto:${to}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            window.location.href = mailtoLink;
        }
    </script>
       <script>
                        let subMenu = document.getElementById("subMenu");
                        
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
      
    }
    </script>
</body>
</html>