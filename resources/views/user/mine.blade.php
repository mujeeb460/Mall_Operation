@extends('layouts.app')
@section('content')

<!-- Header -->
<header class="header mt-5">
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


<!-- Page Content Start -->
    <div class="page-content mb-5">
        <div class="container">
            <div class="profile-area">
                <div class="main-profile">
                    <div class="media media-60 me-3 rounded-circle">
                        <img src="{{asset('assets/images/photo.png')}}" alt="profile-image">
                    </div>
                    <div class="profile-detail">
                        <h6 class="name">Username: {{auth()->user()->phone}}</h6>
                        <span class="font-12">Invitation code: {{auth()->user()->reference_code}}</span>
                    </div>
                    <a href="{{route('password')}}" class="edit-profile">
                        <i class="icon feather icon-edit-2"></i>
                    </a>
                </div>
                <div class="content-box">
                    <ul class="row g-2">
                        <li class="col-6">                          
                            <a href="{{ route('deposit.index') }}">
                                <div class="dz-icon-box">
                                    <i class="icon feather icon-dollar-sign"></i>
                                </div>
                                <span>Deposit</span>
                            </a>
                        </li>
                        <li class="col-6">                          
                            <a href="{{ route('withdraw.index') }}">
                                <div class="dz-icon-box">
                                    <i class="icon feather icon-dollar-sign"></i>
                                </div>
                                <span>Withdraw</span>
                            </a>
                        </li>
                        <li class="col-6">                          
                            <a href="{{route('history.order')}}">
                                <div class="dz-icon-box">
                                    <i class="icon feather icon-package"></i>
                                </div>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li class="col-6">                          
                            <a href="help.html">
                                <div class="dz-icon-box">
                                    <i class="icon feather icon-headphones"></i>
                                </div>
                                <span>Help Center</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="title-bar">
                    <h6 class="title mb-0">Account Settings</h6>
                </div>
                <div class="dz-list style-1">
                    <ul>
                        <li>
                            <a href="" class="item-content item-link">
                                <div class="dz-icon">
                                    <i class="icon feather icon-user"></i>
                                </div>
                                <div class="dz-inner">
                                    <span class="title">My Profile</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('password')}}" class="item-content item-link">
                                <div class="dz-icon">
                                    <i class="icon feather icon-lock"></i>
                                </div>
                                <div class="dz-inner">
                                    <span class="title">Change Password</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <a href="javascript:void(0);" class="item-content item-link" onclick="this.closest('form').submit();">
                                    <div class="dz-icon">
                                        <i class="icon feather icon-log-out"></i>
                                    </div>
                                    <div class="dz-inner">
                                        <span class="title">Log Out</span>
                                        <button type="submit" style="display: none;"></button> <!-- Hidden submit button -->
                                    </div>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->


@endsection
