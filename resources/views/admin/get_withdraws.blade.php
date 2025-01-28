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


    <!-- Page Content -->
<div class="page-content mt-5">
    <div class="container">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        <div class="page-content mb-5">
            <div class="account-box">
                <div class="order-history mt-4">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h5 class="text-white mb-0">Withdraw Requests ({{ $withdraws ? count($withdraws) : 0 }})</h5>
                        </div>
                        <div class="card-body">
                            @if($withdraws && count($withdraws) > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>User Name</th>
                                                <th>Withdraw Amount</th>
                                                <th>Withdraw Date</th>
                                                <th>Transaction ID</th>
                                                <th>Bank</th>
                                                <th>Account No.</th>
                                                <th>Account Title</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($withdraws as $withdraw)
                                                <tr>
                                                    <td>{{ $withdraw->id }}</td>
                                                    <td>{{ $withdraw->user->phone }}</td>
                                                    <td>{{ $withdraw->withdraw_amount }}</td>
                                                    <td>{{ $withdraw->withdraw_date }}</td>
                                                    <td>{{ $withdraw->transaction_id }}</td>
                                                    <td>{{ $withdraw->bank }}</td>
                                                    <td>{{ $withdraw->account_number }}</td>
                                                    <td>{{ $withdraw->account_title }}</td>
                                                    <td>
                                                        @if($withdraw->status == 0)
                                                            <span class="badge badge-primary">Pending</span>
                                                        @elseif($withdraw->status == 1)
                                                            <span class="badge badge-success">Approved</span>
                                                        @else
                                                            <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#confirmModal{{$withdraw->id}}">
                                                          <i class="fa fa-check"></i>
                                                        </a>
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{$withdraw->id}}">
                                                          <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <!-- Modal for approve Deposit -->
                                                    <div class="modal fade" id="confirmModal{{$withdraw->id}}" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="messageModalLabel">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{route('confirm_withdraw',$withdraw->id)}}" method="get">
                                                                    @csrf
                                                                    <div class="modal-body" id="modalMessageContent">
                                                                       Are You Sure to Approve this Withdraw?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Confirm</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Modal for Reject Deposit -->
                                                    <div class="modal fade" id="rejectModal{{$withdraw->id}}" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="messageModalLabel">Confirmation</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{route('reject_withdraw',$withdraw->id)}}" method="get">
                                                                    @csrf
                                                                    <div class="modal-body" id="modalMessageContent">
                                                                       Are You Sure to Reject this Withdraw?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Confirm</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

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
