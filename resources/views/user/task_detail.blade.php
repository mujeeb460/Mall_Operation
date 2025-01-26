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

    .card-container {
      display: flex;
      flex-direction: column;
      border-radius: 15px;
      width: 80%;
      margin: 50px auto;
    }
    .card-top {
        height: 250px;
      
    }
    .card-bottom {
      background-color: white;
      height: 150px;
      border-bottom-left-radius: 15px;
      border-bottom-right-radius: 15px;
      margin-top: 80px;
    }
    .card-center {
      background-color: #f8f9fa;
      height: 170px;
      border-radius: 15px;
      margin: -50px auto; /* This creates the overlap effect */
      padding: 20px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      width: 90%;
      position: relative; /* Enable absolute positioning within this div */
    }
    
    .label {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 5px 10px;
      font-size: 14px;
      border-radius: 5px;
    }

    .balance {
      padding: 10px 0px 0px 30px;
    }
    
    </style>

<div class="page-content">
    <div class="container">
        <div class="product-offer">
                <div class="row bg-primary card-top">
                    <div class="col-12 balance text-center">
                        <h4 class="">{{ $package->package_name }}</h4>
                    </div>
                    <div class="col-6">
                        <h5 class="">Account Balance</h5>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-light btn-sm" href="#">Top up</a>
                    </div>
                    <div class="col-6">
                        <h5 class="">Rs. {{ auth()->user()->total_balance() }}</h5>
                    </div>      
                </div>
                <div class="card-center">
                    <div class="label">Level</div> <!-- The label added here -->
                    <!-- Add your content here -->
                    <div class="col-6">
                        <h4 class="text-white">Test</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="">{{ $package->package_name }}</h4>
                    </div>
                    <div class="col-12">
                        <span class="text-danger">You have {{ $package->number_of_tasks }} chances to accept the task</span><br/>
                        <span>Commission rate: {{ $package->commission_rate }}%</span><br/>
                        <span>Minimum threshold: {{ $package->minimum_amount }}</span><br/>
                    </div>
                </div>
                <div class="card-bottom">
                  @if(session('failed'))
                      <div class="alert alert-danger text-center">
                          {{ session('failed') }}
                      </div>
                  @endif
                  @if(session('success'))
                      <div class="alert alert-success text-center">
                          {{ session('success') }}
                      </div>
                  @endif
                    <a class="btn bg-primary btn-sm w-100 py-3 text-white" href="{{route('upgrade_task',$package->id)}}">Upgrade Imediatly</a>
                </div>
        </div>
    </div>
</div>


@endsection
