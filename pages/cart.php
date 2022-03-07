<html>
    <head>
        <title>OneStop - Shopping Bag</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/cart.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/header.js"></script>
    </head>
    <body>
        <div class="container-fluid main-container">
            
            <!--Header-->
            <div class="header">
                <ul class="left-menu" type="none">
                    <li class="logo">
                        <a href="../index.php">
                            <img src="../images/One1.png" alt="logo not found" title="logo" class="logo-img">
                        </a>
                    </li>
                    <li><a href="men.php" class="header-link">Men</a></li>
                    <li><a href="women.php" class="header-link">Women</a></li>
                    <li><a href="kids.php" class="header-link">Kids</a></li>
                    <li><a href="collections.php" class="header-link">Collections</a></li>
                    <li><a href="new_arrivals.php" class="header-link">New Arrivals</a></li>
                </ul>
                <ul class="search-bar-menu" type="none">
                    <li>
                        <form>
                            <input type="text" class="search-bar" placeholder="Search for products,brands..." title="">
                            <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
                <ul class="right-menu" type="none">
                    <li>
                        <div class="profile-dropdown">
                            <div class="header-icon ">
                                <i class="fa fa-user-o" style="color:darkblue;"></i>
                                <div class="header-icon-label">
                                    Profile
                                    <div class="profile-dropdown-content">
                                        <b>Welcome</b><br/>
                                        <div class="text-muted">Access your account and manage orders</div><br/>
                                        <a href="signin.php">
                                            <button type="button" class="btn btn-danger login-btn">Sign In</button>
                                        </a><br/>
                                        <a href="signup.php" class="signup-link">Not connected yet ? Signup here !</a>
                                        <hr/>
                                        <a href="profile.php" class="profile-links">Account</a>
                                        <a href="orders.php" class="profile-links">Orders</a>
                                        <a href="wishlist.php" class="profile-links">Wishlist</a>
                                        <a href="contact.php" class="profile-links">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="wishlist.php" class="header-link">
                            <div class="header-icon ">
                                <div>
                                    <i class="fa fa-heart-o" style="color:deeppink;"></i>
                                    <div class="header-icon-label">
                                        Wishlist
                                     </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="cart.php" class="header-link">
                            <div class="header-icon ">
                                <div>
                                    <i class="fa fa-shopping-bag" style="color:red;"></i>
                                    <div class="header-icon-label">
                                        Bag
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <br/>
            <!-- End of header -->
            
            <!--Shopping bag page when there is no items in bag-->
            <div class="row bag">
                <div class="bag-title">Your shopping bag is empty !</div>
                <div class="bag-subtitles">
                    Give it a purpose - get it full with your favourite apparels
                </div>
                <br/><br/>
                <div class="bag-image">
                    <img src="../images/bag3.png" alt="Image not found" class="bag-img"/>
                </div>
                <br/><br/>
                <div class="bag-button">
                    <a href="wishlist_items.php"><button type="button" class="btn btn-danger bag-btn">Add items from wishlist</button></a>
                </div>
            </div>
            <!--End of shopping bag page-->
            <!--footer-->
            <div class="footer-parent">
                <div class="row footer">
                    <div class="col footer-column">
                         <div class="footer-main-heading">
                            OneStop
                        </div>

                        <div class="footer-content">
                            If you would like to experience the best of online shopping for men, women and kids, you are at the right place. OneStop is the ultimate destination for fashion and lifestyle. It is time to redefine your style statement with our treasure-trove of trendy items.
                        </div>
                    </div>
                    <div class="col footer-column">
                        <div class="footer-heading">
                            Shop By
                        </div>
                        <br/>
                        <div class="footer-links">
                            <ul type="none">
                                <li><a href="men.php" class="footer-link">Men</a></li>
                                <li><a href="women.php" class="footer-link">Women</a></li>
                                <li><a href="kids.php" class="footer-link">Kids</a></li>
                                <li><a href="collections.php" class="footer-link">Collections</a></li>
                                <li><a href="new_arrivals.php" class="footer-link">New Arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col footer-column">
                        <div class="footer-heading">
                            Useful Links
                        </div>
                        <br/>
                        <div class="footer-links">
                            <ul type="none">
                                <li><a href="profile.php" class="footer-link">Account</a></li>
                                <li><a href="orders.php" class="footer-link">Orders</a></li>
                                <li><a href="wishlist.php" class="footer-link">Wishlist</a></li>
                                <li><a href="cart.php" class="footer-link">Shopping Bag</a></li>
                                <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of footer-->
        </div>
    </body>
</html>