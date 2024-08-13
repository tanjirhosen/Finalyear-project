@extends('frontEnd.master')
@section('title')
    Checkout
@endsection
@section('content')
    <main class="main-wrapper">
        <!-- Start Checkout Area  -->
        <div class="axil-checkout-area axil-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card card-body">
                            <h4 class="text-center text-success">{{session('message')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Checkout Area  -->

    </main>
@endsection
