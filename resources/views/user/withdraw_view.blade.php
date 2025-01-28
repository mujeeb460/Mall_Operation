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


    <!-- Page Content -->
<div class="page-content mt-5">
    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a class="btn bg-primary btn-sm w-30 py-3 text-white" href="{{route('withdraw.create')}}" id="startDeliveryBtn">Withdraw Amount</a>
        <div class="page-content mb-5">
            <div class="account-box">
                <div class="order-history mt-4">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h5 class="text-white mb-0">Withdraw History ({{ $withdraws ? count($withdraws) : 0 }})</h5>
                        </div>
                        <div class="card-body">
                            @if($withdraws && count($withdraws) > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>withdraw Amount</th>
                                                <th>Withdraw Date</th>
                                                <th>Bank</th>
                                                <th>Account No.</th>
                                                <th>Account Title</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($withdraws as $withdraws)
                                                <tr>
                                                    <td>{{ $withdraws->transaction_id }}</td>
                                                    <td>Rs. {{ $withdraws->withdraw_amount }}</td>
                                                    <td>{{ $withdraws->withdraw_date }}</td>
                                                    <td>{{ $withdraws->bank }}</td>
                                                    <td>{{ $withdraws->account_number }}</td>
                                                    <td>{{ $withdraws->account_title }}</td>
                                                    <td>
                                                        @if($withdraws->status == 0)
                                                            <span class="badge badge-primary">Pending</span>
                                                        @elseif($withdraws->status == 1)
                                                            <span class="badge badge-success">Approved</span>
                                                        @else
                                                            <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center py-3">
                                    <p class="mb-0">No withdraws in history yet.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Page Content End -->
               
@endsection
