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
    
    .offcanvas {
        width: 100% !important; /* Set the width to 100% */
    }
</style>

<div class="page-content">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="product-offer">
            <div class="row bg-primary p-3">
                <div class="col-6">
                    <h5 class="text-white">Account Balance</h5>
                </div>
                <div class="col-6 text-end">
                    <a class="btn btn-light btn-sm" href="#">Top up</a>
                </div>
                <div class="col-12">
                    <h3 class="text-white py-1">Rs. {{ auth()->user()->total_balance() }}</h3>
                </div>         
            </div>
            <div class="row shop-card p-3 m-2" style="background-color:">
                @if($upgraded_package && $upgraded_package->package)
                <div class="col-6">
                    <h4 class="">{{$upgraded_package->package->package_name}}</h4>
                </div>
                <div class="col-12">
                    <span class="text-danger">You have {{$upgraded_package->remaining_tasks}} chances to accept the task</span><br/>
                    <span>Commission rate: {{$upgraded_package->package->commission_rate}}%</span><br/>
                    <span>Minimum threshold: {{$upgraded_package->package->minimum_amount}} </span><br/>
                </div>
                @else
                <div class="col-12">
                    <div class="alert alert-warning">
                        <h5>No Active Package</h5>
                        <p>Please upgrade to a package to start accepting orders.</p>
                    </div>
                </div>
                @endif
            </div>  


             <a class="btn bg-primary btn-sm w-100 py-3 text-white" href="#" id="startDeliveryBtn">Start delivery</a>


                    <!-- Order History Section -->
            <div class="order-history mt-4">
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

            <!-- PWA Offcanvas -->
            <div class="offcanvas offcanvas-bottom" tabindex="-1" id="pwaOffcanvas" aria-labelledby="offcanvasLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasLabel" class="offcanvas-title">New Order Available!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="text-center mb-3">
                        <div class="avatar avatar-xl mb-3" style="width: 80px; height: 80px; margin: auto;">
                            <img src="https://via.placeholder.com/80" class="rounded-circle" alt="order-image" id="randomOrderImage">
                        </div>
                        <h5 class="mb-2" id="orderNumber"></h5>
                    </div>
                    <div class="order-details p-3 bg-light rounded">
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Product Name:</strong>
                            <span id="productName"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Quantity:</strong>
                            <span id="orderQuantity"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Order Price:</strong>
                            <span id="orderPrice"></span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <strong>Your Commission:</strong>
                            <span id="commission" class="text-success"></span>
                        </div>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                @if($upgraded_package && $upgraded_package->package && $upgraded_package->remaining_tasks > 0)
                                    <button type="button" class="btn btn-primary" id="acceptOrderBtn">Accept Order</button>
                                @else
                                    <button type="button" class="btn btn-secondary" disabled>
                                        {{ !$upgraded_package || !$upgraded_package->package ? 'No Active Package' : 'No Tasks Remaining' }}
                                    </button>
                                @endif
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="offcanvas">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PWA Offcanvas End -->  



            <!-- Modal for displaying messages -->
            <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="messageModalLabel">Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modalMessageContent">
                            <!-- Dynamic message will be injected here -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const startDeliveryBtn = document.getElementById('startDeliveryBtn');
    const pwaOffcanvas = document.getElementById('pwaOffcanvas');
    const acceptOrderBtn = document.getElementById('acceptOrderBtn');
    const offcanvasBody = document.querySelector('.offcanvas-body');

    let currentOrder = null;

    // Clean up any leftover backdrop on page load
    // Remove the manual display manipulation
    // Initialize the Bootstrap Offcanvas
    const offcanvas = new bootstrap.Offcanvas(pwaOffcanvas);

    // Show the offcanvas when there is a new order
    if (currentOrder) {
        displayOrder(currentOrder);
        offcanvas.show();
    }

    // Show the modal with a message
    function showModal(message) {
        const modalContent = document.getElementById('modalMessageContent');
        modalContent.innerHTML = message;
        const modal = new bootstrap.Modal(document.getElementById('messageModal'));
        modal.show();
    }

    function generateOrder() {
        // If we already have an order and it hasn't been accepted yet, return the same order
        if (currentOrder) {
            return currentOrder;
        }

        // First check if we have a package
        @if(!$upgraded_package)
            showModal("You don't have any package. Please upgrade to continue.");
            return null;
        @endif

        // Check package status and remaining tasks
        @if(!$upgraded_package || $upgraded_package->status == 0)
            showModal("Your current package is completed. Please upgrade to a new package to continue.");
            return null;
        @endif

        // Check remaining tasks
        @if(!$upgraded_package || !$upgraded_package->remaining_tasks)
            showModal("You have completed all your tasks for this package!");
            return null;
        @endif

        const remainingTasks = parseInt("{{ $upgraded_package ? $upgraded_package->remaining_tasks : 0 }}");
        if (remainingTasks <= 0) {
            showModal("You have completed all your tasks for this package!");
            return null;
        }

        // Get minimum threshold and commission rate
        const minThreshold = parseInt("{{ $upgraded_package && $upgraded_package->package ? $upgraded_package->package->minimum_amount : 0 }}");
        const commissionRate = parseFloat("{{ $upgraded_package && $upgraded_package->package ? $upgraded_package->package->commission_rate : 0 }}");

        // Random product names
        const products = [
            "Smartphone Charger", "Laptop Charger", "Headphones", "Smart Watch", "Tablet Cover",
            "Camera Cover", "Gaming Console", "Bluetooth Speaker", "Power Bank", "Wireless Earbuds"
        ];

        // Generate random values
        const orderNumber = 'ORD-' + Math.floor(Math.random() * 1000000);
        const product = products[Math.floor(Math.random() * products.length)];
        const quantity = Math.floor(Math.random() * 5) + 1;
        const price = Math.floor(Math.random() * minThreshold);
        const commission = (price * (commissionRate / 100)).toFixed(2);

        // Create new order object
        return {
            orderNumber: orderNumber,
            product: product,
            quantity: quantity,
            price: price,
            commission: commission
        };
    }

    function displayOrder(order) {
        document.getElementById('orderNumber').textContent = 'Order #' + order.orderNumber;
        document.getElementById('productName').textContent = order.product;
        document.getElementById('orderQuantity').textContent = order.quantity + ' units';
        document.getElementById('orderPrice').textContent = 'Rs. ' + order.price;
        document.getElementById('commission').textContent = 'Rs. ' + order.commission + ' (' + "{{ $upgraded_package && $upgraded_package->package ? $upgraded_package->package->commission_rate : 0 }}" + '%)';
        document.getElementById('randomOrderImage').src = 'https://via.placeholder.com/80?text=' + order.product.charAt(0);
    }

    function toggleOffcanvas() {
        const isVisible = offcanvas.isVisible;

        if (!isVisible) {
            // Generate new order only if we don't have one
            if (!currentOrder) {
                currentOrder = generateOrder();
            }
            
            if (currentOrder) {
                displayOrder(currentOrder);
                offcanvas.show();
            }
        } else {
            offcanvas.hide();
            // Reset current order after closing
            currentOrder = null;
        }
    }

    startDeliveryBtn.addEventListener('click', function(e) {
        e.preventDefault();
        toggleOffcanvas();
    });

    acceptOrderBtn.addEventListener('click', function() {
        // Get the order details
        const orderNumber = document.getElementById('orderNumber').textContent.replace('Order #', '');
        const product = document.getElementById('productName').textContent;
        const quantity = parseInt(document.getElementById('orderQuantity').textContent);
        const price = parseFloat(document.getElementById('orderPrice').textContent.replace('Rs. ', ''));
        const commission = parseFloat(document.getElementById('commission').textContent.split(' ')[1]);

        // Set form values
        document.getElementById('formOrderNumber').value = orderNumber;
        document.getElementById('formProduct').value = product;
        document.getElementById('formQuantity').value = quantity;
        document.getElementById('formPrice').value = price;
        document.getElementById('formCommission').value = commission;

        // Close the popup
        toggleOffcanvas();

        // Submit the form
        document.getElementById('orderForm').submit();
    });

    // Close offcanvas when pressing ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && offcanvas.isVisible) {
            toggleOffcanvas();
        }
    });

    // Maybe later button functionality
    const pwaCloseBtn = document.querySelector('.pwa-close');
    if (pwaCloseBtn) {
        pwaCloseBtn.addEventListener('click', toggleOffcanvas);
    }
});
</script>

<form id="orderForm" action="{{ route('accept.order') }}" method="POST" style="display: none;">
    @csrf
    <input type="hidden" name="orderNumber" id="formOrderNumber">
    <input type="hidden" name="product" id="formProduct">
    <input type="hidden" name="quantity" id="formQuantity">
    <input type="hidden" name="price" id="formPrice">
    <input type="hidden" name="commission" id="formCommission">
</form>

@endsection
