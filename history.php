<html>
    <link rel="stylesheet" href="css/Nav.css">
<header class="navigation">
        <div class="nav-left">
            <a href="Homepage.html"><img src="image/lit.png" width="200px" alt=""></a>
            
                <ul>
                    <li><a href="Userhomepg.php">Home</a></li>
                    <li><a href="display_user.php">Products</a></li>
                    <li><a href="Userhomepg.php">About Us</a></li>
                    <li><a href="Userhomeph.php">Contact</a></li>
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
    <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">order no</th>
                      <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">book</th>
                      <th class="text-center  text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-5">price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
<?php
      $host = "localhost";  
      $user = "root";  
      $password = '';  
      $db = "lit";  
        
      $con = mysqli_connect($host, $user, $password, $db);
    //   session_start();

    //     $email=$_SESSION['email'];

        $sql="SELECT * from `product`";
        $result= mysqli_query($con,$sql);
        if($result){
        while($row=mysqli_fetch_assoc($result)) {
        $order_no=$row['order_no'];
        $book=$row['book'];
        $author=$row['author'];
        $year_of_publication=$row['year_of_publication'];
        $price=$row['price'];
        $desription=$row['description'];
        $imageData=$row['image'];
            echo'<tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm ">'.$order_no.'</h6>    
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm ">'.$book.'</h6>    
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-center text-xs font-weight-bold ps-4 mb-0 ">'.$price.'</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">'.$desription.'</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <a href="delete.php? deleteweb='.$order_no.'" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                    </td>
                </tr>';
        }
    }

?>
</tbody>
</table>
</html>