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
                            <li class="breadcrumb-item active" aria-current="page">Order Manage</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="card-title">All Order Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">Sl</th>
                                            <th class="wd-15p border-bottom-0">Order Id</th>
                                            <th class="wd-15p border-bottom-0">Customer Info</th>
                                            <th class="wd-15p border-bottom-0">Order Date</th>
                                            <th class="wd-15p border-bottom-0">Order Total</th>
                                            <th class="wd-15p border-bottom-0">Order Status</th>
                                            <th class="wd-20p border-bottom-0">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                                                <td>{{$order->order_date}}</td>
                                                <td>{{$order->order_total}}</td>
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
                                                <td>
                                                    <a href="{{route('admin.order-detail', ['id' => $order->id])}}" class="btn btn-info" title="Order Detail">
                                                        <i class="fa fa-book"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-edit', ['id' => $order->id])}}" class="btn btn-primary" {{$order->order_status == 1 ? 'disable' : ''}}title="Order Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-invoice', ['id' => $order->id])}}" class="btn btn-success" title="Order Invoice">
                                                        <i class="fa fa-dollar"></i>
                                                    </a>
                                                    <a href="{{route('admin.download-invoice', $order->id)}}" class="btn btn-warning" target="blank" title="Download Invoice">
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                    <a href="{{route('admin.order-delete', $order->id)}}" class="btn btn-danger"{{$order->order_status == 3 ? '' : 'disable'}} title="Delete Order">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
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
