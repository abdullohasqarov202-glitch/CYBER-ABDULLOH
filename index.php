<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
       <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Gramentheme">
        <meta name="description" content="Xriders - Riders & Sports Club HTML Template">
        <!-- ======== Page title ============ -->
        <title>CYBER ABDULLOH</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.svg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/nice-select.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
          <?php wp_head();?>                  
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="Q" class="letters-loading">
                        Q
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                       A
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="0" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="V" class="letters-loading">
                        V
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>  

        <!-- GT Back To Top Start -->
        <button id="gt-back-top" class="gt-back-to-top show">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!-- GT MouseCursor Start -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>

        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="<?php bloginfo('template_url'); ?>/index.html">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="<?php bloginfo('template_url'); ?>/#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="<?php bloginfo('template_url'); ?>/mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="<?php bloginfo('template_url'); ?>/#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="<?php bloginfo('template_url'); ?>/tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon d-flex align-items-center">
                                <a href="<?php bloginfo('template_url'); ?>/#"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php bloginfo('template_url'); ?>/#"><i class="fab fa-twitter"></i></a>
                                <a href="<?php bloginfo('template_url'); ?>/#"><i class="fab fa-youtube"></i></a>
                                <a href="<?php bloginfo('template_url'); ?>/#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="/" class="header-logo">
                                    <img src="<?php the_field("rasm_3",10) ?>" alt="logo-img" width="200">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">

                                    <nav id="mobile-menu">
                                         <?php 
                                                 wp_nav_menu(array(    
                                                         'theme_location' => 'menu-1',
                                                         'menu_class'     => '',
                                                         'container'      => 'ul',
                                                         ));
                                                          ?>
                                       <!-- <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="<?php bloginfo('template_url'); ?>/index.html">
                                                    Home 
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li>
                                                        <div class="homemenu-items">
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/header/home-1.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="<?php bloginfo('template_url'); ?>/index.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                       Home 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/header/home-2.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="<?php bloginfo('template_url'); ?>/index-2.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/header/home-3.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="<?php bloginfo('template_url'); ?>/index-3.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gaming Studio
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/header/home-4.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="<?php bloginfo('template_url'); ?>/index-4.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gamer
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/header/home-5.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="<?php bloginfo('template_url'); ?>/index-5.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gaming News
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                           <li class="has-dropdown active d-xl-none">
                                                <a href="<?php bloginfo('template_url'); ?>/index.html" class="border-none">
                                                Home
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php bloginfo('template_url'); ?>/index.html">Home 01</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/index-2.html">Home 02</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/index-3.html">Gaming Studio</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/index-4.html">Gamer</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/index-5.html">Gaming News</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php bloginfo('template_url'); ?>/match-details.html">
                                                    matches
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php bloginfo('template_url'); ?>/match.html">matches Page</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/match-details.html">matches Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="<?php bloginfo('template_url'); ?>/news-details.html">
                                                    Pages
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="<?php bloginfo('template_url'); ?>/about.html">About Us</a>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="<?php bloginfo('template_url'); ?>/service-details.html">
                                                            Our Service
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="<?php bloginfo('template_url'); ?>/service.html">Our Services</a></li>
                                                            <li><a href="<?php bloginfo('template_url'); ?>/service-details.html">Service Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="<?php bloginfo('template_url'); ?>/game-details.html">
                                                            Our Games
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="<?php bloginfo('template_url'); ?>/game.html">Our Games</a></li>
                                                            <li><a href="<?php bloginfo('template_url'); ?>/game-details.html">Game Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="<?php bloginfo('template_url'); ?>/team-details.html">
                                                            Our Team
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="<?php bloginfo('template_url'); ?>/team.html">Our Team</a></li>
                                                            <li><a href="<?php bloginfo('template_url'); ?>/team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/testimonial.html">Testimonial</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/gallery.html">epic gallery</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/pricing.html">Our Pricing</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/faq.html">Our Faq</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php bloginfo('template_url'); ?>/Shop-details.html">
                                                    Shop
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php bloginfo('template_url'); ?>/shop.html">Shop Page</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/shop-cart.html">Shop Cart</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/shop-details.html">Shop Details</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                           <li>
                                                <a href="<?php bloginfo('template_url'); ?>/news-details.html">
                                                    Blog
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="<?php bloginfo('template_url'); ?>/news-grid.html">Blog Grid</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/news.html">Blog Standard</a></li>
                                                    <li><a href="<?php bloginfo('template_url'); ?>/news-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="<?php bloginfo('template_url'); ?>/contact.html">Contact Us</a>
                                            </li>-->
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                          
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
