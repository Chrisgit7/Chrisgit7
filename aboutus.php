<?php
session_start(); // Ξεκινήστε τη συνεδρία


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Canacare</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="icon" href="/YOUR_PATH/favicon.ico" type="image/x-icon">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="styleboot.css">
    </head>
    <header>
        <body id="myPage">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="page.php">
                <img src="Phto1.png" id="logo" alt="Logo">
            </a>
        </div>
        <a class="navbar-brand" href="page.php">Canacare</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                    // Εάν ο χρήστης είναι διαχειριστής, εμφανίστε το μενού "Edit"
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Edit
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="editusers.php">Edit Users</a></li>
                            <li><a class="dropdown-item" href="editorders.php">Edit Orders</a></li>
                            <li><a class="dropdown-item" href="editproducts.php">Edit Products</a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['email'])) {
                            // Εάν ο χρήστης είναι συνδεδεμένος, εμφανίστε την επιλογή "Logout"
                            ?>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="profile.php">Edit Profile</a></li>
                            <li><a class="dropdown-item" href="orders.php">History Orders</a></li>

                            <?php
                        } else {
                            // Εάν ο χρήστης δεν είναι συνδεδεμένος, εμφανίστε τις επιλογές "Login" και "Sign up"
                            ?>
                            <li><a class="dropdown-item" href="index.php">Login User</a></li>
                            <li><a class="dropdown-item" href="signup.php">Sign up User</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
            <i class="fas fa-search" aria-hidden="true"></i>
            <div id="htmlContainer">
                <input type="text" id="search-item" placeholder="Search..">
            </div>
            <div class="cart-btn">
                <span class="nav-icon">
                    <i class="fas fa-cart-plus"></i>
                </span>
                <div class="cart-items">0</div>
            </div>
            <div class="heart-btn">
                <a class="nav1-icon" href="favorites.php">
                    <i class="fas fa-heart"></i>
                </a>
                <div class="heart-items">0</div>
            </div>
        </div>
    </div>
</nav>

                </header>
                <div class="container">
      <div class="photocontainer">
        <div class="photo"></div>
    </div>
                    </div>
          <div id="maindiv" class="container text-center">
            <div class="well well-sm">
                <h3><strong>Canacare</strong><small>Probably the best CBD in the world</small></h3>
            </div>
            <div class="aboutmes">
            <p><strong>Canacare</strong> operates in the building at 48 Distomou street. At <strong>Canacare</strong> we produce the product ourselves, thus ensuring the best possible quality
            </p>
                    </div>
        </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.3186087475674!2d23.64937288407242!3d37.946346029929956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbeda48df3b5%3A0x55a7905408cc5b38!2zzpTOuc-Dz4TPjM68zr_PhSA0OCwgzqDOtc65z4HOsc65zqzPgiAxODUgMzI!5e0!3m2!1sel!2sgr!4v1693233807009!5m2!1sel!2sgr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade"></iframe>

         
        <!--cart-->
        <div class="cart-overlay">
                        <div class="cart">
                          <span class="close-cart">
                            <i class="fas fa-window-close"></i>
                          </span>
                          <h2>Your Cart</h2>
                          <div class="cart-content">
                            <!--cart item-->
                       <!---     <div class="cart-item">
                              
                            </div>
                            <!-end of cart item-->
                            </div>
                          <div class="cart-footer">
                            <h3>SUM: $ <span class="cart-total">0</span></h3>
                            <button class="clear-cart banner-btn">Delete Cart</button>
                            <a href="Checkout.php">
                              <button class="clear-cart banner-btn">Checkout</button>
                            </a> 
                          </div>
                        </div>
                      </div>
                      <!--end of cart-->
                      <div id="suggest" class="bg-1">
            <div class="container">
                <h3 class="text-center">Canacare suggests</h3>
                <div class="row">
                    <div class="col">
                        <p class="text-center"><strong>CBD OIL</strong><span class="label label-success">NEW</span></p>
                        <a href="CbdOilss.php" data-toggle="collapse"><img src="Cbdoil.jpg" class="food img-circle"></a>
                        <div id="demo1" class="collapse-show">
                            <p>AMVROSIA - FULL SPECTRUM CBD OIL 5% LIGHT</p>
                            
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center"><strong>CBD FLOWER</strong></p>
                        <a href="CbdFlowerr.php" data-toggle="collapse"><img src="gellato.jpg" class="food img-circle"></a>
                        <div id="demo2" class="collapse-show">
                            <p>HEMP FLOWERS POWER GELATO 27% CBD 2GR – SEEDBIS</p>
                        </div>
                    </div>
                    <div class="col">
                        <p class="text-center"><strong>CBD COSMETIC</strong></p>
                        <a href="CbdCosmeticcs.php" data-toggle="collapse"><img src="Sampouan.jpg" class="food img-circle"></a>
                        <div id="demo3" class="collapse-show">
                            <p>ENECTA BODY LOTION 200mg CBD 200ml</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        
          
        <footer class="dark-footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>About us</h3>
                <p>Canacare is a specialized online platform that offers a sophisticated collection of CBD products to care for your health and wellness.</p>
            </div>
            <div class="col-md-4">
                <h3>Contact</h3>
                <p>Address: 48 Distomou, City: Piraeus, P.O. 18532
                </p>
                <p>Email: xristos.aridas@yahoo.gr</p>
                <p>Phone: 699999999</p>
            </div>
            <div class="col-md-4">
                <h3>Follow us</h3>
                <div class="social-links">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">
            &copy; 2024 Canacare. Με επιφύλαξη παντός δικαιώματος.
        </p>
    </div>
</footer>

        <script type="module" src="productDisplay.js"></script>
                    <script type="module" src="search.js"></script>

    
    </body>
</html>