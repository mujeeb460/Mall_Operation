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
                    <h2>Withdraw Amount</h2>
                </div>
                <div class="account-area">
                    <form action="{{route('withdraw.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="withdraw_amount">Withdraw Amount</label>
                            <input type="text" name="withdraw_amount" id="withdraw_amount" class="form-control" placeholder="Enter Amount" value="{{old('withdraw_amount')}}">
                            @error('deposit_amount')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="bank_name">Bank</label>
                            <select name="bank_name" id="bank_name" class="form-control" required="">
                                <option value="">Select Bank</option>
                                <option value="Easypaisa">Easypaisa</option>
                                <option value="Jazzcash">Jazzcash</option>
                                <option value="Bank AL Habbib">Bank AL Habib</option>
                                <option value="Allied">Allied</option>
                                <option value="Sindh">Sindh</option>
                                <option value="Bank of Panjab">Bank of Panjab</option>
                                <option value="National Bank">National Bank</option>
                                <option value="Nayapay">Nayapay</option>
                                <option value="Sadapay">Sadapay</option>
                                <option value="Faysal Bank">Faysal Bank</option>
                                <option value="Upaisa">Upaisa</option>
                                <option value="Bank Al falah">Bank Al falah</option>
                                <option value="Meezan Bank">Meezan Bank</option>
                                <option value="Askari Bank">Askari Bank</option>
                                <option value="Soneri Bank">Soneri Bank</option>
                                <option value="Khushhali Bank">Khushhali Bank</option>
                                <option value="Summit Bank">Summit Bank</option>
                                <option value="Bank of Khyber Limited">Bank of Khyber Limited</option>
                                <option value="First Microfinance Bank">First Microfinance Bank</option>
                                <option value="First Women Bank">First Women Bank</option>
                                <option value="Zarai Taraqiati Bank">Zarai Taraqiati Bank</option>
                                <option value="BankIslami">BankIslami</option>
                                <option value="Silk Ba">Silk Bank</option>
                                <option value="Habib Metro Bank">Habib Metro Bank</option>
                                <option value="Standard Chartered Pakistan">Standard Chartered Pakistan</option>
                                <option value="HBL">HBL</option>
                                <option value="MCB">MCB</option>
                                <option value="UBL">UBL</option>
                                <option value="JS">JS</option>
                            </select>
        
                            @error('bank_name')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="account_title">Account Number</label>
                            <input type="text" name="account_number" id="account_number" class="form-control" value="{{old('account_number')}}" placeholder="Enter Account Number">
                            @error('account_number')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="account_title">Account Title</label>
                            <input type="text" name="account_title" id="account_title" class="form-control" value="{{old('account_title')}}" placeholder="Enter Account Title">
                            @error('account_title')
                                <small class="text-danger">{{ $message }}</small>
                            @endif
                        </div>
                        <button class="btn mb-3 btn-primary w-100" type="submit">Withdraw</button>
                    </form>      
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content End -->
               
@endsection
