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
        </style>

<div class="page-content mb-5">
    <div class="container">
        <div class="product-offer text-white">

            @foreach($packages as $package)
                <div class="row shop-card p-3 m-2" style="background-color: {{$package->bg_color}}">
                    <div class="col-6">
                        <h4 class="text-white">{{$package->package_name}}</h4>
                    </div>
                    <div class="col-6 text-end">
                        @if(auth()->user()->upgrade_packages()->where('package_id', $package->id)->exists())
                            <span class="btn btn-light btn-sm">Joined</span>
                        @else
                            <a class="btn btn-light btn-sm" href="{{ route('task_detail', $package->id) }}">Upgrade</a>
                        @endif
                    </div>
                    <div class="col-12">
                        <span>Commission rate: {{$package->commission_rate}}%</span><br/>
                        <span>Minimum threshold: {{$package->minimum_amount}}</span><br/>
                        <span>Number of Tasks: {{$package->number_of_tasks}}</span><br/>
                    </div>
                </div>
            @endforeach


        </div>   
    </div>
</div>
@endsection
