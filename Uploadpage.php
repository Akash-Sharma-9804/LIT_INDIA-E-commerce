<?php
// include 'connect.php';
// session_start();
// // $email = $_SESSION['email'];
// if(isset($_POST['submit'])){

//     // if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
//     //     // Define the upload directory
//     //     $uploadDir = 'uploads/';

//     //     // Get the image details
//     //     $imageTmpPath = $_FILES['image']['tmp_name'];
//     //     $imageName = $_FILES['image']['name'];
//     //     $imagePath = $uploadDir . $imageName;

//         // $order_no = $_POST['order_no'];
        
//         $book = $_POST['book'];
//         $author = $_POST['author'];
//         $year_of_publication = $_POST['year_of_publication'];
//         $price = $_POST['price'];
//         $description = $_POST['description'];
//         // $Img_name = $_POST['Img_name'];
//         // $img_path= $_POST['img_path'];
//         // $upload_date = $_POST['upload_date'];
        



//         $sql= "INSERT INTO `product` (book, author, year_of_publication, price, description)
//         values(`$book`, `$author`, `$year_of_publication`, `$price`, `$description`)";

//         $result=mysqli_query($con,$sql);
//         if($result){
//             echo "Data inserted successfully";
//         }else{
//             die(mysqli_error($con));
//         }
//     }

//?> 
<!-- <?php
  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db = "lit";  
    
  $con = mysqli_connect($host, $user, $password, $db);  

  session_start();

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload Form</title>
    <link rel="stylesheet" href="css/Nav.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        
          }
          .bg{
            background-image: url("image/book-background.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
        
        .container5{
            flex: content;
            padding: 2px 30px;
            padding-bottom: 10px;
        }
        .container5 {
            max-width: 400px;
            margin: 15px auto;
            background-color: white;
            border-radius: 10px;
        }
        .container5 h2{
            text-align: center;
            padding-bottom: 5px;
            text-decoration: underline;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg">

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

    <div class="container5">
        <h2>Book Details</h2>
        <form action="connection.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productName">Book Name</label>
                <input type="text" id="productName" name="book" required>
            </div>
            <div class="form-group">
                <label for="AuthorName">Author Name</label>
                <input type="text" id="AuthorName" name="author" required>
            </div>
            <div class="form-group">
                <label for="yearofpublish">Year Of Publication</label>
                <input type="number" id="yearofpublish" name="year_of_publication" required>
            </div>
            <div class="form-group">
            <label for="productPrice">Price</label>
            <input type="number" id="productPrice" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea id="productDescription" name="description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="productImage">Product Image</label>
                 <input type="file" id="productImage" name="image" accept="image/*" required>
            </div>
            <input type="submit" name="submit">Upload Product</input>
            </div>
        </form>
    
    <script>
        function submitForm() {
            const productName = document.getElementById('productName').value;
            const productPrice = document.getElementById('productPrice').value;
            const productDescription = document.getElementById('productDescription').value;
            const productImage = document.getElementById('productImage').files[0];

            // You would typically handle the form submission and file upload
            // with AJAX and send the data to the server for processing.

            // For this example, we'll just log the data to the console.
            console.log('Product Name:', productName);
            console.log('Price:', productPrice);
            console.log('Description:', productDescription);
            console.log('Product Image:', productImage);
        }
    </script>
    <!---js for user-icon nav-->
    <script>
        let subMenu = document.getElementById("subMenu");
    
        function toggleMenu(){
          subMenu.classList.toggle("open-menu");
          
        }
    </script>

              <!------------Footer------------->

              <footer>
                <div class="container">
                  <p>&copy; 2023 E-Commerce Store. All rights reserved.</p>
                </div>
              </footer>
</body>
</html>