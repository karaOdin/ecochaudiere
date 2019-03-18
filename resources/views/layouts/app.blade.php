<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css-hamburgers/dist/hamburgers.min.css">
    <link rel="stylesheet" href="vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">   
    <link rel="stylesheet" href="vendor/revolution/layers.css">
    <link rel="stylesheet" href="vendor/revolution/navigation.css">
    <link rel="stylesheet" href="vendor/revolution/settings.css">
    <link rel="stylesheet" href="vendor/revolution/settings-source.css">
    <link rel="stylesheet" href="vendor/revolution/tp-color-picker.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.png">
</head>
<body>
  <!-- page load-->
    <div class="images-preloader">
        <div id="preloader_1" class="rectangle-bounce">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <header class="header header-1">
        <div class="hidden-tablet-landscape-up header-mobile">
            <div class="header-top-mobile">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="index.html">
                            <img src="images/logo.png" alt="Consulting" />
                        </a>
                    </div>
                    <div class="search-box">
                        <form method="POST">
                            <input type="text" placeholder="Tìm kiếm" id="search-box" name="s" value="">
                            <div class="search-icon font-color-white display-flex-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                        </form>
                    </div>
                    <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="au-nav-mobile">
                <nav class="menu-mobile">
                    <div>
                        <ul class="au-navbar-menu">
                            <li class="menu-item curent-menu-item">
                                <a href="index.html" class="font-color-black">Home</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                        <li class="menu-item"><a href="index.html" class="font-color-black">Home 1</a></li>
                                    <li class="menu-item"><a href="index2.html" class="font-color-black">Home 2</a></li>
                                    <li class="menu-item"><a href="index3.html" class="font-color-black">Home 3</a></li>
                                    <li class="menu-item"><a href="index4.html" class="font-color-black">Home 4</a></li>
                                    <li class="menu-item"><a href="index5.html" class="font-color-black">Home 5</a></li>
                                    <li class="menu-item"><a href="index6.html" class="font-color-black">Home 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="services1.html" class="font-color-black">Services</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                        <li class="menu-item"><a href="services1.html" class="font-color-black">services 1</a></li>
                                    <li class="menu-item"><a href="services2.html" class="font-color-black">services 2</a></li>
                                    <li class="menu-item"><a href="services3.html" class="font-color-black">services 3</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="projects1.html" class="font-color-black">Projects</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                        <li class="menu-item"><a href="projects1.html" class="font-color-black">projects 1</a></li>
                                    <li class="menu-item"><a href="projects2.html" class="font-color-black">projects 2</a></li>
                                    <li class="menu-item"><a href="projects3.html" class="font-color-black">projects 3</a></li>
                                    <li class="menu-item"><a href="projects4.html" class="font-color-black">projects 4</a></li>
                                    <li class="menu-item"><a href="projects5.html" class="font-color-black">projects 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="aboutus.html" class="font-color-black">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop.html" class="font-color-black">Shop</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                        <li class="menu-item"><a href="shop.html" class="font-color-black">Shop 1</a></li>
                                    <li class="menu-item"><a href="shop2.html" class="font-color-black">Shop 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="contactus.html" class="font-color-black">Contact us</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog.html" class="font-color-black">Blog</a>
                                <span class="arrow">
                                    <i></i>
                                </span>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog.html" class="font-color-black">Blog 1</a></li>
                                    <li class="menu-item"><a href="blog2.html" class="font-color-black">Blog 2</a></li>
                                    <li class="menu-item"><a href="blog3.html" class="font-color-black">Blog 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-top-content display-flex">
                        <div class="header-top-desc">
                            We Are Specialists In Construction And Architecture!
                        </div>
                        <div class="header-top-info">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>(+1) 115 221 2564</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>info@example.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Building Cror, New York, NY 93459</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="hidden-tablet-landscape header-top">
            <div class="container">
                <div class="header-top-content display-flex">
                    <div class="header-top-desc">
                        We Are Specialists In Construction And Architecture!
                    </div>
                    <div class="header-top-info">
                        <ul>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>(+1) 115 221 2564</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>info@example.com</span>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>Building Cror, New York, NY 93459</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-tablet-landscape header-bottom" id="js-navbar-fixed">
            <div class="container">
                <div class="header-bottom-content display-flex">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <nav class="menu">
                        <div>
                            <ul class="menu-primary">
                                <li class="menu-item curent-menu-item">
                                    <a href="index.html" class="font-color-black">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index.html" class="font-color-black">Home 1</a></li>
                                        <li class="menu-item"><a href="index2.html" class="font-color-black">Home 2</a></li>
                                        <li class="menu-item"><a href="index3.html" class="font-color-black">Home 3</a></li>
                                        <li class="menu-item"><a href="index4.html" class="font-color-black">Home 4</a></li>
                                        <li class="menu-item"><a href="index5.html" class="font-color-black">Home 5</a></li>
                                        <li class="menu-item"><a href="index6.html" class="font-color-black">Home 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="services1.html" class="font-color-black">Services</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="services1.html" class="font-color-black">services 1</a></li>
                                        <li class="menu-item"><a href="services2.html" class="font-color-black">services 2</a></li>
                                        <li class="menu-item"><a href="services3.html" class="font-color-black">services 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="projects1.html" class="font-color-black">Projects</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="projects1.html" class="font-color-black">projects 1</a></li>
                                        <li class="menu-item"><a href="projects2.html" class="font-color-black">projects 2</a></li>
                                        <li class="menu-item"><a href="projects3.html" class="font-color-black">projects 3</a></li>
                                        <li class="menu-item"><a href="projects4.html" class="font-color-black">projects 4</a></li>
                                        <li class="menu-item"><a href="projects5.html" class="font-color-black">projects 5</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="aboutus.html" class="font-color-black">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="shop.html" class="font-color-black">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="shop.html" class="font-color-black">Shop 1</a></li>
                                        <li class="menu-item"><a href="shop2.html" class="font-color-black">Shop 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contactus.html" class="font-color-black">Contact us</a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog.html" class="font-color-black">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog.html" class="font-color-black">Blog 1</a></li>
                                        <li class="menu-item"><a href="blog2.html" class="font-color-black">Blog 2</a></li>
                                        <li class="menu-item"><a href="blog3.html" class="font-color-black">Blog 3</a></li>
                                    </ul> 
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>  

    <main>
        @yield('content')
    </main>     
        
    
<footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-info">
                            <div class="footer-logo">
                                <a href="#"><img src="images/logo.png" alt=""></a>
                            </div>
                            <div class="info-desc">
                                Quisque vehicula aliquam maurion suscipit felis fermentum id. Quisque tempor neque. Fusce nec risus vitae urna interdum comer dapibus ante ipsum primi sorci.
                            </div>
                            <div class="socials">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-drupal" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-links">
                            <div class="footer-title">
                                <h3>useful links</h3>
                            </div>
                            <div class="footer-links-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Projects</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Shop</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-contact">
                            <div class="footer-title">
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>(+1) 115 221 2564</span>
                                </li>
                                <li>
                                        <i class="fa fa-fax" aria-hidden="true"></i>
                                    <span>+1 (855) 203-5485</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>info@example.com</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>Building Cror, New York, NY 93459</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 footer-work-time">
                            <div class="footer-title">
                                <h3>Working hours</h3>
                            </div>
                            <div class="work-time-desc">
                                Our support available to help you 24 hours a day, seven days a week.
                            </div>
                            <div class="work-time">
                                <span class="display-flex">
                                    <span>Monday-Friday:</span>
                                    <span>9am to 5pm</span>
                                </span>
                                <span class="display-flex">
                                    <span>Saturday:</span>
                                    <span>10am to 2pm</span>
                                </span>
                                <span class="display-flex">
                                    <span>Sunday:</span>
                                    <span>Closed</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content display-flex">
                    <div class="copyright">
                            Copyright © 2018 Construction Theme Demo - Theme by <span>AuThemes</span>
                    </div>
                    <div class="footer-bottom-menu">
                        <ul>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <div id="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/isotope-docs.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
    <script src="js/theme-map.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution/jquery.themepunch.revolution.min.js"></script>

    <!-- SLICEY ADD-ON FILES -->
    <script src='js/revolution/revolution.addon.slicey.min.js?ver=1.0.0'></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/revolution/extensions/revolution.extension.video.min.js"></script> 

    <script src="js/config-contact.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>
