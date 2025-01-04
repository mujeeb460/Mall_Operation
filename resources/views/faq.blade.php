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

<div class="page-content space-top p-b65">

        <div class="container py-0">

            <h2>FAQ</h2>
            <br/>


            <div class="line-5 text-secondary dz-content">
                <h2>FAQ's in Pending...</h2>
                <br/>
                
               
            </div>

        </div>
    </div>
@endsection
