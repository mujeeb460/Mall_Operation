<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wedo.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 13:09:07 GMT -->
<head>
    
    <!-- Title -->
    <title>Mall Operation</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#fb923c">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow"> 
    <meta name="keywords" content="Mall Operation">
    <meta name="description" content="Mall Operation Ecommerce Website">
    <meta property="og:title" content="Mall Operation">
    <meta property="og:description" content="Mall Operation">
    <meta property="og:image" content="{{asset('assets/images/logo.png')}}">
    <meta name="format-detection" content="">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}">
    
    <!-- Globle Stylesheets -->
    
    <!-- Stylesheets -->
    <link rel="stylesheet" class="main-css" type="text/css" href="assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

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
                        <a href="javascript:void(0);" class="back-btn">
                            <i class="icon feather icon-chevron-left"></i>
                        </a>
                        <h6 class="title">Back</h6>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                        <ul class="nav nav-pills light style-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-list-tab" data-bs-toggle="pill" data-bs-target="#pills-list" type="button" role="tab" aria-controls="pills-list" aria-selected="true"><i class="icon feather icon-list"></i></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-grid-tab" data-bs-toggle="pill" data-bs-target="#pills-grid" type="button" role="tab" aria-controls="pills-grid" aria-selected="false" tabindex="-1"><i class="icon feather icon-grid"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <!-- Header -->

    <!-- Page Content -->
    <div class="page-content">
        <div class="account-box">
            <div class="container">
                <div class="logo-area">
                    <img class="logo-dark" src="assets/images/logo.png" alt="">
                    <img class="logo-light" src="assets/images/logo-white.png" alt="">
                </div>
                <div class="section-head ps-0">
                    <h2>Admin Login</h2>
                </div>
                <div class="account-area">
                    <form action="{{route('form_login')}}" method="post"
                                  enctype="multipart/form-data">

                                  @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Username</label>
                            <input type="text" name="phone" id="name" class="form-control" placeholder="Type Username Here">
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div>
                            <label class="form-label" for="password">Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="password" id="password" class="form-control dz-password" placeholder="Type Password Here">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <button class="btn mb-3 btn-primary w-100" type="submit">Login</button>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <a href="forgot-password.html" class="btn-link text-link">Forgot password?</a>
                            <a href="forgot-password.html" class="btn-link">Reset here</a>
                        </div>
                        <a href="register.html" class="btn-link text-center mb-3 text-dark">Don’t have an account?</a>
                        <a href="{{ route('register') }}" class="btn mb-3 btn-outline-primary w-100">Register now</a>
                    </form>  
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
    
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="assets/js/jquery.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="assets/js/settings.js"></script>
<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from wedo.dexignzone.com/xhtml/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 13:12:46 GMT -->
</html>