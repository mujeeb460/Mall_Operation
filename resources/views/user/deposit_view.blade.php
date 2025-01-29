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
        <a class="btn bg-primary btn-sm w-30 py-3 text-white" href="{{route('deposit.create')}}" id="startDeliveryBtn">New Deposit</a>
        <div class="page-content mb-5">
            <div class="account-box">
                <div class="order-history mt-4">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h5 class="text-white mb-0">Deposit History ({{ $deposits ? count($deposits) : 0 }})</h5>
                        </div>
                        <div class="card-body">
                            @if($deposits && count($deposits) > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Transaction ID</th>
                                                <th>Deposit Amount</th>
                                                <th>Deposit Date</th>
                                                <th>Bank</th>
                                                <th>Slip</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deposits as $deposit)
                                                <tr>
                                                    <td>{{ $deposit->transaction_id }}</td>
                                                    <td>Rs. {{ $deposit->deposit_amount }}</td>
                                                    <td>{{ $deposit->deposit_date }}</td>
                                                    <td>{{ $deposit->bank }}</td>
                                                    <td>
                                                        @if($deposit->deposit_slip)
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#confirmModal{{$deposit->id}}"> <i class="fa fa-eye"></i></a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($deposit->status == 0)
                                                            <span class="badge badge-primary">Pending</span>
                                                        @elseif($deposit->status == 1)
                                                            <span class="badge badge-success">Approved</span>
                                                        @else
                                                            <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                </tr>

                                                 <!-- Modal for Deposit Slip -->
                                                    <div class="modal fade" id="confirmModal{{$deposit->id}}" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="messageModalLabel">Deposit Slip</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                    <div class="modal-body" id="modalMessageContent">
                                                                       <img src="{{ asset('storage/'.$deposit->deposit_slip)}}" alt="Deposit Slip" width="100%">

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center py-3">
                                    <p class="mb-0">No deposits in history yet.</p>
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
