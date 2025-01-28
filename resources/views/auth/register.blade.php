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
                    <h2>Create account Free</h2>
                    <p>Create an account to continue!</p>
                </div>
                <div class="account-area">
                    <form action="{{route('register')}}" method="post"
                                  enctype="multipart/form-data">
                                  @csrf
                        <div class="mb-3">
                            <label class="form-label" for="reference_code">Reference Code</label>
                            <input type="text" name="" id="reference_code" class="form-control" placeholder="" value="" readonly="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number(+92)</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}" placeholder="Phone Number(+92)">
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
                        <div>
                            <label class="form-label" for="password_confirmation">Confirm Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control dz-password" placeholder="Confirm Password">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div>
                            <label class="form-label" for="withdraw_password">Withdraw Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="withdraw_password" id="withdraw_password" class="form-control dz-password" placeholder="Withdraw Password">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('withdraw_password')
                                <small class="text-danger">{{ $message }}</small>
                            @endif 
                        </div>
                        <input type="hidden" name="reference_code" id="ref_code" class="form-control">
                        <button class="btn mb-3 btn-primary w-100" type="submit">Register</button>

                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="Checked-1" required="">
                            <label class="form-check-label" for="Checked-1">I agree to all Terms, Privacy Policy and fees</label>
                        </div>

                    </form>
                        
                        <div class="text-center text-dark mb-2">
                            <span>Already have an account ?</span>
                        </div>
                        <a href="{{ route('login') }}" class="btn btn-outline-primary w-100">Login</a>
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

<script type="text/javascript">
     function generateReferenceCode() {
        const randomCode = Math.floor(1000000 + Math.random() * 9000000);  // Generates a random number between 100000 and 999999
        document.getElementById("reference_code").value = randomCode; 
        document.getElementById("ref_code").value = randomCode; 
    }

    // Call the function to generate the reference code on page load
    window.onload = generateReferenceCode;
</script>
</body>

<!-- Mirrored from wedo.dexignzone.com/xhtml/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2024 13:12:47 GMT -->
</html>