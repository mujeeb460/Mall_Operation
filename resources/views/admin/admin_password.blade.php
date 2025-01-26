@extends('layouts.admin.app')
@section('content')

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


   <div class="page-content mt-5">
        <div class="account-box">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="section-head ps-0">
                    <h2>Change Admin Password</h2>
                </div>
                <div class="account-area">
                    <form action="{{route('update_admin_password')}}" method="post"
                                  enctype="multipart/form-data">

                                  @csrf
                                  @method('put')
                        <div>
                            <label class="form-label" for="current_password">Current Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="current_password" id="current_password" class="form-control dz-password" placeholder="Type Password Here">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('current_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="new_password">New Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="new_password" id="new_password" class="form-control dz-password" placeholder="Type Password Here">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('new_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="new_password_confirmation">Repeat Password</label>
                            <div class="mb-3 input-group input-group-icon">
                                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control dz-password" placeholder="Type Password Here">
                                <span class="input-group-text show-pass"> 
                                    <i class="icon feather icon-eye-off eye-close"></i>
                                    <i class="icon feather icon-eye eye-open"></i>
                                </span>
                            </div>
                            @error('new_password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button class="btn mb-3 btn-primary w-100" type="submit">Update</button>
                    </form>  
                </div>
            </div>
        </div>
    </div>
               
@endsection
