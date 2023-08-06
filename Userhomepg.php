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
    <link rel="stylesheet" href="css/Banner.css">
    <link rel="stylesheet" href="css/About-us.css">
    <link rel="stylesheet" href="css/product1.css">
    <link rel="stylesheet" href="css/product-slider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/productlist.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </head>
  <body>
    <header class="navigation">
        <div class="nav-left">
            <a href="Homepage.html"><img src="image/lit.png" width="200px" alt=""></a>
            
                <ul>
                    <li><a href="/Homepage.html">Home</a></li>
                    <li><a href="display_user.php">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
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
                
                <!------------- Banner---------->

<script>
// Get references to HTML elements
const searchInput = document.getElementById('searchInput');
const itemList = document.getElementById('itemList');
const items = itemList.getElementsByTagName('li');

// Function to filter items based on the search term
function filterItems() {
  const searchTerm = searchInput.value.toLowerCase();

  for (let i = 0; i < items.length; i++) {
    const itemText = items[i].textContent.toLowerCase();

    if (itemText.includes(searchTerm)) {
      items[i].style.display = 'block';
    } else {
      items[i].style.display = 'none';
    }
  }
}
</script>

<!-- // Event listener to trigger filtering on each keystroke
searchInput.addEventListener('keyup', filterItems); -->
                <section class="banner" style="background-image: url(image/homepage-img1.jpg); background-size: cover; background-position: center; color: #fff;padding: 100px 0;text-align: center;">
                 
                  <div class="form-group">
                    <form action="/search" method="GET">
                      <input type="text" id="search-input" name="q" placeholder="Search...">
                      <button type="submit" id="search">Search</button>
                    </form>
                  </div>
                  <div id="container">
                    <h2>Share Books, Share Knowledge, Save Ecosystem</h2>
                    <p>"LIT" dosen't have to mean "new and expensive".</p>
                    <a href="display_user.php" class="btn">Explore</a>
                    </div>
                    </section>
                    
                    <!--------------Product Slider------------>
                    
        <section id="product-bg" >
 
            <div class="container" name="itemList">
              <div class="row">
                <div class="col-md-12">
                <h2>Featured <b>Books</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                <div class="item active">
                <div class="row">
                <div class="col-sm-3">
                <div class="thumb-wrapper">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <div class="img-box">
                <img src="image/acdmics.jpg" class="img-responsive" alt="">									
                </div>
                            <div class="thumb-content">
                              <h4>Acadmics Books</h4>									
                              <div class="star-rating">
                              <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                              </ul>
                              </div>
                              
                              <a href="#" class="btn btn-primary">Explore</a>
                            </div>						
                          </div>
                              </div>
                              <div class="col-sm-3">
                          <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                            <img src="image/competative.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                            <h4>Competative Books</h4>									
                            <div class="star-rating">
                            <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                            </ul>
                            </div>
                            
                            <a href="#" class="btn btn-primary">Explore</a>
                            </div>						
                            </div>
                            </div>		
                            <div class="col-sm-3">
                            <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                              <img src="image/comic.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                              <h4>Comic Books</h4>									
                              <div class="star-rating">
                              <ul class="list-inline">
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star"></i></li>
                              <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                              </ul>
                              </div>
                              
                              <a href="#" class="btn btn-primary">Explore</a>
                              </div>						
                              </div>
                              </div>								
                        <div class="col-sm-3">
                        <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                        <img src="image/storybook.webp" class="img-responsive" alt="">
                        </div>
                        <div class="thumb-content">
                        <h4>Story Books</h4>									
                        <div class="star-rating">
                        <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                        </div>
                        
                        <a href="#" class="btn btn-primary">Explore</a>
                            </div>						
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                    <div class="row">
                    <div class="col-sm-3">
                          <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                          <img src="/examples/images/products/play-station.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                          <h4>Sony Play Station</h4>
                          
                          <div class="star-rating">
                          <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                          </div>
                          <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>						
                          </div>
                          </div>
                          <div class="col-sm-3">
                          <div class="thumb-wrapper">
                            <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                            <img src="/examples/images/products/macbook-pro.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                            <h4>Macbook Pro</h4>
                            
                            <div class="star-rating">
                                <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                  </ul>
                                  </div>
                                  <a href="#" class="btn btn-primary">Add to Cart</a>
                                  </div>						
                                  </div>
                                  </div>
                                  <div class="col-sm-3">
                                  <div class="thumb-wrapper">
                                  <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                  <div class="img-box">
                                  <img src="/examples/images/products/speaker.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="thumb-content">
                                  <h4>Bose Speaker</h4>
                                  
                                  <div class="star-rating">
                                  <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                                  </div>
                                  <a href="#" class="btn btn-primary">Add to Cart</a>
                                  </div>						
                                  </div>
                                  </div>
                                  <div class="col-sm-3">
                                  <div class="thumb-wrapper">
                                  <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                            <div class="img-box">
                              <img src="/examples/images/products/galaxy.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="thumb-content">
                            <h4>Samsung Galaxy S8</h4>
                            <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                  </ul>
                                  </div>
                                  <a href="#" class="btn btn-primary">Add to Cart</a>
                                  </div>						
                                  </div>
                                  </div>						
                                  </div>
                                  </div>
                                  <div class="item">
                                  <div class="row">
                                  <div class="col-sm-3">
                                  <div class="thumb-wrapper">
                                  <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                  <div class="img-box">
                                  <img src="/examples/images/products/iphone.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="thumb-content">
                                  <h4>Apple iPhone</h4>
                                  <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                                  <div class="star-rating">
                                  <ul class="list-inline">
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                  <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                              </div>
                              <a href="#" class="btn btn-primary">Add to Cart</a>
                              </div>						
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                          <img src="/examples/images/products/canon.jpg" class="img-responsive" alt="">
                          </div>
                          <div class="thumb-content">
                          <h4>Canon DSLR</h4>
                          <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                          <div class="star-rating">
                          <ul class="list-inline">
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star"></i></li>
                          <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                          </ul>
                          </div>
                          <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>						
                          </div>
                          </div>
                          <div class="col-sm-3">
                          <div class="thumb-wrapper">
                          <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                          <div class="img-box">
                          <img src="/examples/images/products/pixel.jpg" class="img-responsive" alt="">
                          </div>
                            <div class="thumb-content">
                              <h4>Google Pixel</h4>
                              <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                              <div class="star-rating">
                                <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                                </div>
                                <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>						
                                </div>
                                </div>	
                                <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                                <div class="img-box">
                                <img src="/examples/images/products/watch.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="thumb-content">
                                <h4>Apple Watch</h4>
                                <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                                <div class="star-rating">
                                <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                </div>
                              <a href="#" class="btn btn-primary">Add to Cart</a>
                            </div>						
                          </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                        </div>
                        </div>
                        </div>
                        </div>
                        </section>
                        
                       


<!-----------------About us------------------->
<hr style="height:2px;border-width:0;color:gray;background-color:black">
<div class="about-section">
  
  <h1>About Us Page</h1>
  <p>Welcome to “Lit India”, here our vision is to provide a unique platform with a dual mission - 
    donating and selling second-hand books at minimal prices to the needy while contributing to the 
    preservation of our precious ecosystem. At "Lit India," we believe in the power of literacy and 
    education as transformative forces that can create a better world for everyone. Our goal is to 
    make books accessible to individuals and communities that may not have easy access to them due 
    to financial constraints."Lit India" started as a passion project by a small group of book lovers 
              who wanted to share the joy of reading with others without creating a hole in the pocket.</p>
    
             <p> Why does “Lit India” needs your support and love: Lit India can only be successful and  
              fruitful to others only if you all come together and join us for the common goal for a bright future by:
              Book donation and collection: We actively encourage book lovers from all walks of life to donate their
              gently-used books, spanning various genres and age groups. By recycling these pre-loved books, we extend 
              their lifespan and ensure that they find a new home where they will continue to inspire and empower readers.
              By giving books a new home, our donors play a significant role in promoting sustainability and fostering a 
              culture of giving.
              Accessibility to the needy:We firmly believe that access to books should not be restricted by one's financial status. 
              Through our platform, we make second-hand books available at minimal prices, making reading materials affordable to all, 
              regardless of their economic background.
              Ecosystem conservation: In “Lit India” by promoting the reuse of books, we reduce the demand for new book production, 
              saving trees and conserving energy and water used in the manufacturing process. Additionally, we minimize the carbon 
              footprint associated with book disposal.</p>
              
              <p>“Lit india” in the making of a better india:
              Through the collective efforts of our donors, volunteers, and supporters, Lit India will make a significant impact 
              on both society and the environment. Our aim is to put books in the hands of countless individuals, empowering them 
              with knowledge and nurturing a love for reading.
              In parallel, Lit India will play a vital role in conserving our ecosystem. By promoting the reuse of books, we have 
              saved numerous trees and reduced greenhouse gas emissions associated with book production. Our eco-friendly practices 
              extend to every aspect of our operations, ensuring that we align our actions with our vision of a sustainable future.</p>
          </div>
          <hr style="height:2px;border-width:0;color:gray;background-color:black">
          <h2 style="text-align:center">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                <div class="container7">
                  <h2>Tannu Gupta</h2>
                  <p class="title">CEO & Founder</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>jane@example.com</p>
                  <p><button class="button1">Contact</button></p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
                <div class="container7">
                  <h2>Puja ShaW</h2>
                  <p class="title">Art Director</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>mike@example.com</p>
                  <p><button class="button1">Contact</button></p>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="/w3images/team3.jpg" alt="John" style="width:100%">
                <div class="container7">
                  <h2>Biswajit Kumar Hasda</h2>
                  <p class="title">Designer</p>
                  <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                  <p>john@example.com</p>
                  <p><button class="button1">Contact</button></p>
                </div>
              </div>
            </div>
          </div>

                        
                        <!------------Footer------------->
                        
                        <footer>
                        <div class="container">
                        <p>&copy; 2023 E-Commerce Store. All rights reserved.</p>
                        </div>
                        </footer>
                        
                        <script>
                        let subMenu = document.getElementById("subMenu");
                        
    function toggleMenu(){
      subMenu.classList.toggle("open-menu");
      
    }
 
</script>

</body>
</html>