@extends('layouts.app')
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





    <!-- Page Content -->
    <div class="page-content mb-5">
        <div class="account-box">
            <div class="container">
                <div class="logo-area">
                    <img class="logo-dark" src="assets/images/logo.png" alt="">
                    <img class="logo-light" src="assets/images/logo-white.png" alt="">
                </div>
                <div class="section-head ps-0">
                    <h2>New Deposit</h2>
                </div>
                <div class="account-area">
                    <form action="{{route('deposit.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="deposit_amount">Deposit Amount</label>
                            <input type="text" name="deposit_amount" id="deposit_amount" class="form-control" placeholder="Enter Amount" value="{{old('deposit_amount')}}">
                            @error('deposit_amount')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deposit_date">Deposit Date</label>
                            <input type="date" name="deposit_date" id="deposit_date" class="form-control" value="{{old('deposit_date')}}" placeholder="">
                            @error('deposit_date')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bank_name">Bank</label>
                            <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{old('bank_name')}}" placeholder="">
                            @error('bank_name')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="deposit_slip">Deposit Slip</label>
                            <input type="file" name="deposit_slip" id="deposit_slip" class="form-control" value="" placeholder="">
                            @error('deposit_slip')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <button class="btn mb-3 btn-primary w-100" type="submit">Deposit</button>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
               
@endsection
