<html>
    <head>
        <title>OneStop - Kids</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/products.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/filter.js"></script>
        <script src="../js/product.js"></script>
        <script src="../js/header.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            
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
            
            <!-- End of header -->
            
            <!--products section-->
            <div class="row mens">
                <div class="mens-header">
                    <div class="mens-title">
                        Kids
                    </div>
                  
                    <div class="filter-main-title">
                        FILTERS
                    </div>
                </div>
                
            </div>
            
            <div class="row mens-content">
                <div class="col-lg-2 filter-section-body">
                    <div class="filter-section">
                        <div class="filter-title" id="category-title">
                             Categories  <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="category-options">
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="shirt"/>
                                <label class="form-check-label text-muted filter-label" for="shirt">Shirts</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="jeans"/>
                                <label class="form-check-label text-muted filter-label" for="jeans">Jeans</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="tshirts"/>
                                <label class="form-check-label text-muted filter-label" for="tshirts">T-Shirts</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="jackets"/>
                                <label class="form-check-label text-muted filter-label" for="jackets">Jackets</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="sweatshirts"/>
                                <label class="form-check-label text-muted filter-label" for="sweatshirts">Sweatshirts</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="suits"/>
                                <label class="form-check-label text-muted filter-label" for="suits">Shorts</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="filter-section">
                        <div class="filter-title" id="brand-title">
                             Brand  <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="brand-options">
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="ucb"/>
                                <label class="form-check-label text-muted filter-label" for="ucb">United Colors of Benetton</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="puma"/>
                                <label class="form-check-label text-muted filter-label" for="puma">Puma</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="adidas"/>
                                <label class="form-check-label text-muted filter-label" for="adidas">Adidas</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="nike"/>
                                <label class="form-check-label text-muted filter-label" for="nike">Nike</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="max"/>
                                <label class="form-check-label text-muted filter-label" for="max">Max</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="hm"/>
                                <label class="form-check-label text-muted filter-label" for="hm">H & M</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="gap"/>
                                <label class="form-check-label text-muted filter-label" for="gap">GAP</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="park-avenue"/>
                                <label class="form-check-label text-muted filter-label" for="park-avenue">Pepe Jeans</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="park-avenue"/>
                                <label class="form-check-label text-muted filter-label" for="park-avenue">Cutiekins</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="park-avenue"/>
                                <label class="form-check-label text-muted filter-label" for="park-avenue">Quechua</label>
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="filter-section">
                        <div class="filter-title" id="price-title">
                             Price  <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="price-options">
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="ucb"/>
                                <label class="form-check-label text-muted filter-label" for="ucb">Under $25</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="jeans"/>
                                <label class="form-check-label text-muted filter-label" for="jeans">$25 to $50</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="tshirts"/>
                                <label class="form-check-label text-muted filter-label" for="tshirts">$50 to $100</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="jackets"/>
                                <label class="form-check-label text-muted filter-label" for="jackets">$100 to $200</label>
                            </div>
                            <div class="filter-options">
                                <input type="checkbox" class="form-check-input" id="sweatshirts"/>
                                <label class="form-check-label text-muted filter-label" for="sweatshirts">$200 & Above</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md clothing">
                    <div class="clothing-grid-container">
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/pepe.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Pepe Jeans
                                </div>
                                <div class="product-label">
                                    Boys Regular Fit Casual Shirt 
                                </div>
                                <div class="product-price">
                                    $10 <sub class="text-muted"><del>$18</del></sub>
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/h&m3.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    H & M
                                </div>
                                <div class="product-label">
                                    Girls Printed T-shirt
                                </div>
                                <div class="product-price">
                                    $7
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/gap1.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    GAP
                                </div>
                                <div class="product-label">
                                    Boys Regular Fit Cargo Shorts
                                </div>
                                <div class="product-price">
                                    $18 <sub class="text-muted"><del>$32</del></sub>
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/max2.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Max
                                </div>
                                <div class="product-label">
                                    Boys Slim Fit Jeans
                                </div>
                                <div class="product-price">
                                    $7
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/jacket.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    H & M
                                </div>
                                <div class="product-label">
                                    Girls Denim Jacket
                                </div>
                                <div class="product-price">
                                    $14 <sub class="text-muted"><del>$27</del></sub>
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/gap2.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    GAP
                                </div>
                                <div class="product-label">
                                    Boys Printed Sweatshirt
                                </div>
                                <div class="product-price">
                                    $15 <sub class="text-muted"><del>$35</del></sub>
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/jacket1.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Quechua
                                </div>
                                <div class="product-label">
                                    Printed Padded Jacket
                                </div>
                                <div class="product-price">
                                    $30 <sub class="text-muted"><del>$35</del></sub>
                                </div>
                            </div>
                            </div>
                        </a>
                        
                        <a href="subproduct.php" target="_blank" class="product-link"><div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/cutiekins.webp" alt="Image not found" class="product-img"/>
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Cutiekins
                                </div>
                                <div class="product-label">
                                    Girls Printed Skirts
                                </div>
                                <div class="product-price">
                                    $20
                                </div>
                            </div>
                            </div>
                        </a>
                        
                  
                    </div>
                </div> 
            </div>
            <!--End of products section-->
            
            <!--footer-->
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
            <!--End of footer-->
        </div>
    </body>
</html>