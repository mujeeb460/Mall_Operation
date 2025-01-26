<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wedo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 13:09:07 GMT -->
<head>
    
    <!-- Title -->
    <title>Mall Operation</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#FE4487">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow"> 
    <meta name="keywords" content="android, ios, mobile, application template, progressive web app, ui kit, multiple color, dark layout">
    <meta name="description" content="Revolutionize your online store with our Ecommerce App Template. Seamless shopping, secure payments, and personalized recommendations for an exceptional user experience">
    <meta property="og:title" content="Wedo - Ecommerce Mobile App Template ( Bootstrap + PWA )">
    <meta property="og:description" content="Revolutionize your online store with our Ecommerce App Template. Seamless shopping, secure payments, and personalized recommendations for an exceptional user experience.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
    
    <!-- PWA Version -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    
    <!-- Global CSS -->
    <link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="{{asset('assets/css/style.css')}}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <style type="text/css">
        .line-5 {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 5; /* Limit text to 5 lines */
            -webkit-box-orient: vertical;
        }
    </style>

</head>   
<body>
<div class="page-wrapper">
    
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader">
            <div class="load-circle"><div></div><div></div></div>
        </div>
    </div> 
    <!-- Preloader end-->
    
    <!-- Header -->
        <header class="header header-fixed">
            <div class="container">
                <div class="header-content">
                    <div class="left-content">
                       <h6><img src="{{asset('assets/images/logo.png')}}"/></h6>
                    </div>
                    <div class="mid-content header-logo">
                    </div>
                    <div class="right-content dz-meta">
                        <h4>Mall Operation</h4>
                        <!-- <a href="search.html" class="icon">
                            <i class="icon feather icon-search"></i>
                        </a>
                        <a href="wishlist.html" class="icon">
                            <i class="icon feather icon-heart"></i>
                        </a>
                        <a href="cart.html" class="icon shopping-cart">
                            <i class="icon feather icon-shopping-cart"></i>
                            <span class="badge badge-primary">3</span>
                        </a> -->
                    </div>
                </div>
            </div>
        </header>
    <!-- Header -->
    
    <!-- Sidebar -->
    <div class="dark-overlay"></div>
    <div class="sidebar">
        <div class="inner-sidebar">
            <a href="profile.html" class="author-box">
                <div class="dz-media">
                    <img src="assets/images/user-profile.jpg" alt="author-image">
                </div>
                <div class="dz-info">
                    <h5 class="name">John Doe</h5>
                    <span>example@gmail.com</span>
                </div>
            </a>
            <ul class="nav navbar-nav"> 
                <li>
                    <a class="nav-link active" href="index.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-home"></i>
                        </span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="">
                        <span class="dz-icon">
                            <i class="icon feather icon-layers"></i>
                        </span>
                        <span>Task</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="components.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-grid"></i>
                        </span>
                        <span>Order</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="pages.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-book-open"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="featured.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-list"></i>
                        </span>
                        <span>Featured</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="wishlist.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-heart"></i>
                        </span>
                        <span>Wishlist</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="order.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-repeat"></i>
                        </span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="cart.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-shopping-cart"></i>
                        </span>
                        <span>My Cart</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="profile.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-user"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="onboarding.html">
                        <span class="dz-icon">
                            <i class="icon feather icon-log-out"></i>
                        </span>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-bottom">
                <ul class="app-setting">
                    <li class="nav-color">
                        <a href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <span class="dz-icon">                        
                                <svg class="color-plate" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.725.787a9.325 9.325 0 0 1  8.425 7.65 2.35 2.35 0 0 1-.625 2.275 1.662 1.662 0 0 1-1.863.188c-.462-.225-.812-.6-1.25-.788a4.238 4.238 0 0 0-4.5.725A3.751 3.751 0 0 0 10 14.825c.237.725.75 1.25 1.012 1.987a1.713 1.713 0 0 1-.762 2.063 3.312 3.312 0 0 1-2.5.125A9.262 9.262 0 0 1 3.125 3.837a9.2 9.2 0 0 1 7.6-3.05zM2.162 11.6A8.112 8.112 0 0 0 8 17.85c.487.125 1.25.3 1.6 0 .35-.3.15-.9-.125-1.25a4.674 4.674 0 0 1-.725-1.388A5 5 0 0 1 10 9.925a5.187 5.187 0 0 1 3.6-1.4 5.063 5.063 0 0 1 3.137 1.025.887.887 0 0 0 .95.225c.4-.213.338-.75.263-1.125a8.413 8.413 0 0 0-1.963-3.95 8.087 8.087 0 0 0-11.937 0 8.075 8.075 0 0 0-1.9 6.9h.012z"/><path d="M14.313 4.862a1.575 1.575 0 1 1 .024 3.15 1.575 1.575 0 0 1-.024-3.15zm0 2.2a.637.637 0 1 0 0-1.274.637.637 0 0 0 0 1.274zm-4.075-4.075a1.575 1.575 0 1 1 0 3.15 1.575 1.575 0 0 1 0-3.15zm0 2.2a.637.637 0 1 0 0-1.274.637.637 0 0 0 0 1.274zM6.25 7.925a1.575 1.575 0 1 1 .025-3.15 1.575 1.575 0 0 1-.025 3.15zm0-2.2A.637.637 0 1 0 6.25 7a.637.637 0 0 0 0-1.275zm.125 4.675a1.575 1.575 0 1 1-3.15 0 1.575 1.575 0 0 1 3.15 0zm-2.2 0a.638.638 0 1 0 1.275 0 .638.638 0 0 0-1.275 0zm2.075 2.387a1.575 1.575 0 1 1 0 3.151 1.575 1.575 0 0 1 0-3.15zm0 2.213a.638.638 0 1 0 0-1.276.638.638 0 0 0 0 1.276z"/>
                                </svg>
                            </span>                 
                            <span>Color Theme</span>
                            <div class="color-active ms-auto">
                                <span>Active</span> 
                                <div class="current-color"></div>
                            </div>  
                        </a>
                    </li>
                    <li>
                        <div class="mode">
                            <span class="dz-icon">                        
                                <i class="icon feather icon-moon"></i>
                            </span>                 
                            <span>Dark Mode</span>
                            <div class="custom-switch">
                                <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                                <label class="custom-switch-label" for="toggle-dark-menu"></label>
                            </div>                  
                        </div>
                    </li>
                    <li>
                        <div class="mode">
                            <span class="dz-icon">                        
                                <i class="fa-solid fa-arrows-left-right"></i>
                            </span>                 
                            <span>Lyout (LTR/RTL)</span>
                            <div class="custom-switch">
                                <input type="checkbox" class="switch-input direction-btn" id="direction-btn">
                                <label class="custom-switch-label" for="direction-btn"></label>
                            </div>                  
                        </div>
                    </li>
                </ul>
                <div class="app-info">
                    <h6 class="name">Wedo Fashion Store App</h6>
                    <span class="ver-info">App Version 1.0</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar End -->
    
    <!-- Page Content Start -->
        @yield('content')
    <!-- Page Content End -->
    
    <!-- Menubar -->
    <div class="menubar-area footer-fixed rounded-0 border-top">
        <div class="toolbar-inner menubar-nav">
            <a href="{{ route('admin_dashboard') }}" class="nav-link {{ request()->routeIs('admin_dashboard') ? 'active' : '' }}">
                <i class="icon feather icon-home"></i>
                <span>Home</span>
            </a>
            <a href="{{ route('get_users') }}" class="nav-link {{ request()->routeIs('get_users') ? 'active' : '' }}">
                <i class="icon feather icon-grid"></i>
                <span>Users</span>
            </a>
            <a href="{{ route('get_deposits') }}" class="nav-link {{ request()->routeIs('get_deposits') ? 'active' : '' }}">
                <i class="icon feather icon-dollar-sign"></i>
                <span>Deposits</span>
            </a>
            <a href="{{ route('get_withdraws') }}" class="nav-link {{ request()->routeIs('get_withdraws') ? 'active' : '' }}">
                <i class="icon feather icon-dollar-sign"></i>
                <span>Withdraws</span>
            </a>
            <a href="{{ route('admin_profile.index') }}" class="nav-link {{ request()->routeIs('admin_profile.index') ? 'active' : '' }}">
                <i class="icon feather icon-user"></i>
                    <span>Mine</span>
            </a>
        </div>
    </div>
    
    
    
    <!-- Multicolor Canvas Start --> 
    <div class="offcanvas offcanvas-bottom m-3 rounded"  tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-primary">
                    <label for="primary_color_1"></label>
                    <span>Default</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green">
                    <label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue">
                    <label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink">
                    <label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow">
                    <label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange">
                    <label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple">
                    <label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-red">
                    <label for="primary_color_8"></label>
                    <span>Red</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue">
                    <label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal">
                    <label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime">
                    <label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange">
                    <label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- Multicolor Canvas Start --> 
    
</div>  
<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- Swiper -->
<script src="{{asset('assets/vendor/countdown/jquery.countdown.js')}}"></script><!-- COUNTDOWN FUCTIONS  -->
<script src="{{asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script><!-- Swiper -->
<script src="{{asset('assets/js/dz.carousel.js')}}"></script><!-- Swiper -->
<script src="{{asset('assets/js/settings.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('index.js')}}"></script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper('.banner-swiper', {
        loop: true, // Enable infinite loop
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 5000, // Autoplay delay in milliseconds
        },
    });
});
</script>



</body>

<!-- Mirrored from wedo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 13:11:44 GMT -->
</html>