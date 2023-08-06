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
   <title>Document</title>
   <link rel="stylesheet" href="css/Nav.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/product1.css">

   <!-- custom js file link  -->
   <script src="js/script.js" defer></script>


</head>
<style>
    
  
    button{
        height:50px;
        width:150px;
        cursor: pointer;
        border-radius:10px;
       background:grey;
       margin:10px auto;
       font-weight:bold;
       font-size:15px;
    }
    hr{
        border: 1px solid black;
    }
    .bg1{
        background-color: #fff8dc;
    }
    .heading1{
        position:absolute;
        left:500px;
        font-size:40px;
        text-decoration:underline;
        margin-bottom:50px;
    }
    h1{
        
    }
</style>

<body class="bg1">
<header class="navigation">
        <div class="nav-left">
            <a href="Homepage.html"><img src="image/lit.png" width="200px" alt=""></a>
            
                <ul>
                    <li><a href="Userhomepg.php">Home</a></li>
                    <li><a href="display_user.php">Products</a></li>
                    <li><a href="Userhomepg.php">About Us</a></li>
                    <li><a href="Userhomepg.php">Contact</a></li>
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
   

      <div class="heading1">Featured Books </div> 

      <div class="product-container">

          
          <?php
                    // Connect to your database (replace 'your_db_hostname', 'your_db_username', 'your_db_password', and 'your_db_name' with appropriate values)
                    $conn = new mysqli('localhost', 'root', '', 'lit');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    // Prepare and execute the SQL query to fetch user data from the database
                    $sql = "SELECT * FROM product";
                    $result = $conn->query($sql);
                    
                    // Display user details and images
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<br>";
                            echo  "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='User Image' width='200'>";
                            echo  "<br>";
                            echo "<h1>Book Name: " . $row["book"] . "</h1>";
                            echo  "<br>";
                            echo "<h1>Author Name: " . $row["author"] . "</h1>";
                            echo  "<br>";
                            echo "<h1>Year of Publication: " . $row["year_of_publication"] . "</h1>";
                            echo  "<br>";
                            echo "<h1>Price: " . $row["price"] . "<h1>";
                            echo  "<br>";
                            echo "<h1>description: " . $row["description"] . "</h1>";
                            echo  "<br>";
                            echo "<h1>Email: " . $row["email"] . "</h1>";
                            echo '<form method="POST" action="email2.php"> <button>Request Contact </button> </form>';
                            echo  "<br>";
                            echo "<hr>";
                            echo  "<br>";
                            
                        }
                        
                    } else {
                        echo "No user data found.";
                    }
                    
                    // Close the database connection
                    $conn->close();
                    ?>
</div>

</div>
</div>

        

         




<!------------Footer------------->


   <script>
      let subMenu = document.getElementById("subMenu");

      function toggleMenu() {
         subMenu.classList.toggle("open-menu");

      }
   </script>

</body>

</html>
