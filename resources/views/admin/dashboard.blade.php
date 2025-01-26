@extends('layouts.admin.app')
@section('content')

<style>
            .blink {
                animation: blinker 1.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

            .commission{
                font-weight: bold;
            }
        </style>

<div class="page-content space-top p-b65">
        <div class="container py-2">


            <!-- Account Balance -->
                <div class="container">
                    <div class="product-offer text-white">
                        <div class="row bg-primary shop-card p-3">
                            <div class="col-12">
                                <h5 class="text-white">Admin Pannel</h5>
                            </div>
                            <div class="col-6">
                                <span>Username</span>
                            </div>
                            <div class="col-6 text-end">
                                <span>{{auth()->user()->phone}}</span>
                            </div>
                            <div class="col-12">
                                
                            </div>
                            <div class="col-6">
                               
                            </div>
                            <div class="col-6 text-end">
                                
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Account Balance End -->


            
           
            
            <!-- ComingSoon start -->
           
            <!-- ComingSoon End -->
            
            <div class="title-bar">
                <h6 class="title mb-0">Merchant list</h6>
            </div>
            
            <!-- Merchant List -->
            <div class="product-offer">
                <div class="row g-3">
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/daraz.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">Daraz</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>      
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/alibaba.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">Alibaba</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/shein.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">Shein</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>    
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/amazon.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">Amazon</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>    
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/tiktok.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">TikTok</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>    
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="#">
                            <div class="shop-card style-3">
                                <div class="dz-media">
                                </div>
                                <div class="dz-content">
                                    <span class="offer"><img src="{{asset('assets/images/shopee.png')}}" width="30%" alt="Alibaba" class="circle"></span>
                                    <h6 class="title">Shopee</h6>
                                </div>
                                <div role="radiogroup" class="d-flex justify-content-center">
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                    <i class="fa-solid fa-star ms-1"></i>
                                </div>
                                <div class="line-5 text-secondary dz-content">
                                    Alibaba's services include B2B trade, online retail, shopping search engines, third-party payments and cloud computing services. 
                                    The group's subsidiaries include Alibaba B2B, Taobao, Tmall, eTao, Alibaba Cloud Computing, Juhuasuan, AliExpress, 
                                    Alibaba International Marketplace, Ele.me, Fliggy, Youku, Hema Fresh, Alibaba Pictures, Cainiao Network, AutoNavi Maps, 
                                    Lazada, Daraz, etc. The sales of Taobao and Tmall reached RMB 1.1 trillion in 2012, and the total merchandise transaction 
                                    volume in 2015 exceeded RMB 3 trillion, making it the world's largest retailer.
                                </div>
                            </div>
                        </a>    
                    </div>
                </div>  
            </div> 
            
            <!-- Shop Section End -->
            
           
            
            <div class="title-bar">
                <h6 class="title mb-0">Transaction Record</h6>
                <a href="">View all <i class="icon feather icon-chevron-right"></i></a>
            </div>
            
            <!-- Product Item list Start -->
            <div class="product-items-list">
                <marquee behavior="scroll" class="blink" direction="up" height="200">
                <div class="card address-card">
                    <div>
                        <div class="fw-bold">Get Rs. 29,500.90 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****89975</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 30,400.00 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****9836</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 17,900.30 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****73454</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 12,800.30 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****76346</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 12,450.34 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****82456</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 10,100.00 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****09854</div> 
                    </div>
                </div>
                <div class="card address-card">
                    <div class="card-body">
                        <div class="fw-bold">Get Rs. 25,800.30 commission
                        </div>
                        <div class="text-end">2025-01-04</div>
                        <div>Mobile: +923****22396</div> 
                    </div>
                </div>

            </marquee>

            </div>
            <!-- Product Item list End -->
            
           
        </div>
</div>
@endsection
