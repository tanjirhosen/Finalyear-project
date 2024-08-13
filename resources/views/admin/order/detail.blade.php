@extends('admin.master')

@section('content')
    <div class="app-content main-content mt-0">
        <div class="side-app">
            <!-- CONTAINER -->
            <div class="main-container container-fluid">
                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Order</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Order Basic Information</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th>Order Id</th>
                                        <td>{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{$order->order_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                        <td>{{$order->order_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tax Total</th>
                                        <td>{{$order->tax_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Amount</th>
                                        <td>{{$order->shipping_total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Status</th>
                                        <td>
                                            @if($order->order_status == 0)
                                                Pending
                                            @elseif($order->order_status == 1)
                                                Complete
                                            @elseif($order->order_status == 2)
                                                Processing
                                            @elseif($order->order_status == 3)
                                                Cancel
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Customer Info</th>
                                        <td>{{$order->customer->name.'( '.$order->customer->mobile.')'}}</td>
                                    </tr>
                                    <tr>
                                        <th>Delivery Address</th>
                                        <td>{{$order->delivery_address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Delivery Status</th>
                                        <td>
                                            @if($order->delivery_status == 0)
                                                Pending
                                            @elseif($order->delivery_status == 1)
                                                Complete
                                            @elseif($order->delivery_status == 2)
                                                Processing
                                            @elseif($order->delivery_status == 3)
                                                Cancel
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Payment Type</th>
                                        <td>{{$order->payment_type}}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Status</th>
                                        <td>
                                            @if($order->payment_status == 0)
                                                Pending
                                            @elseif($order->payment_status == 1)
                                                Complete
                                            @elseif($order->payment_status == 2)
                                                Processing
                                            @elseif($order->payment_status == 3)
                                                Cancel
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <td>{{$order->transaction_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Currency</th>
                                        <td>{{$order->currency}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">Order Product Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Name</th>
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-15p border-bottom-0">Price</th>
                                            <th class="wd-15p border-bottom-0">Quantity</th>
                                            <th class="wd-15p border-bottom-0">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->orderDetail as $item )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->product_name}}</td>
                                                <td><img src="{{asset($item->product_image)}}" alt="" height="60" width="80"/></td>
                                                <td>{{$item->product_price}}</td>
                                                <td>{{$item->product_quantity}}</td>
                                                <td>{{$item->product_quantity * $item->product_price}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
