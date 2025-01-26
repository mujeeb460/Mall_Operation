@extends('layouts.app')
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">

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

<div class="page-content">
    <div class="container">
            <div class="order-history">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h5 class="text-white mb-0">Order History ({{ $orders ? count($orders) : 0 }})</h5>
                    </div>
                    <div class="card-body">
                        @if($orders && count($orders) > 0)
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Commission</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->order_number }}</td>
                                                <td>{{ $order->product_name }}</td>
                                                <td>{{ $order->quantity }} units</td>
                                                <td>Rs. {{ number_format($order->price, 2) }}</td>
                                                <td>Rs. {{ number_format($order->commission, 2) }} ({{ $order->commission_rate }}%)</td>
                                                <td>{{ $order->created_at->format('M d, Y H:i') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-3">
                                <p class="mb-0">No orders in history yet.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </div>

</div>

@endsection