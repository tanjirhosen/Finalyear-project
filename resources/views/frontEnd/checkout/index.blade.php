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
                    <div class="col-lg-6">
                        <div class="axil-checkout-billing">
                            <h4 class="title mb--40">Billing details</h4>
                            <div class="card">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home-tab-pane" type="button" role="tab"
                                            aria-controls="home-tab-pane" aria-selected="true">Cash On Delivery</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile-tab-pane" type="button" role="tab"
                                            aria-controls="profile-tab-pane" aria-selected="false">Online Payment</button>
                                    </li>
                                </ul>

                                <div class="tab-content p-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                        aria-labelledby="home-tab" tabindex="0">
                                        <form action="{{ route('order.new') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                @if (isset($customer->name))
                                                    <input type="text" value="{{ $customer->name }}" readonly
                                                        id="name" name="name">
                                                @else
                                                    <input type="text" id="name" name="name"
                                                        placeholder="Full name">
                                                @endif
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('name') ? $errors->first('name') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Email </label>
                                                @if (isset($customer->email))
                                                    <input type="email" value="{{ $customer->email }}" readonly
                                                        id="email" name="email">
                                                @else
                                                    <input type="email" id="email" onblur="customerEmailCheck(this.value)" name="email" placeholder="Email">
                                                @endif
                                                <p class="text-danger mt-1" id=" ">
                                                    {{ $errors->has('email') ? $errors->first('email') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile Number <span class="text-danger">*</span></label>
                                                @if (isset($customer->mobile))
                                                    <input type="number" value="{{ $customer->mobile }}" readonly
                                                        id="mobile" name="mobile">
                                                @else
                                                    <input type="number" id="mobile" name="mobile"
                                                        placeholder="Mobile Number">
                                                @endif
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Delivery Address<span class="text-danger">*</span></label>
                                                <textarea id="delivery_address" name="delivery_address" rows="2" placeholder="Delivery Address."></textarea>
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('delivery_address') ? $errors->first('delivery_address') : '' }}
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <input type="radio" checked id="checkbox1" value="cash"
                                                    name="payment_type" />
                                                <label for="checkbox1">Cash on delivery</label>
                                            </div>
                                            <div class="form-group ">
                                                <input type="submit" class="btn btn-primary" style="width:100%"
                                                    value="Confirm Order">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                        aria-labelledby="profile-tab" tabindex="0">
                                        <form action="{{url('/pay') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Full Name <span class="text-danger">*</span></label>
                                                @if (isset($customer->name))
                                                    <input type="text" value="{{ $customer->name }}" readonly
                                                        id="name" name="name">
                                                @else
                                                    <input type="text" id="name" name="name"
                                                        placeholder="Full name">
                                                @endif
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('name') ? $errors->first('name') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Email </label>
                                                @if (isset($customer->email))
                                                    <input type="email" value="{{ $customer->email }}" readonly
                                                        id="email" name="email">
                                                @else
                                                    <input type="email" id="email" name="email" placeholder="Email">
                                                @endif
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('email') ? $errors->first('email') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile Number <span class="text-danger">*</span></label>
                                                @if (isset($customer->mobile))
                                                    <input type="number" value="{{ $customer->mobile }}" readonly
                                                        id="mobile" name="mobile">
                                                @else
                                                    <input type="number" id="mobile" name="mobile"
                                                        placeholder="Mobile Number">
                                                @endif
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Delivery Address<span class="text-danger">*</span></label>
                                                <textarea id="delivery_address" name="delivery_address" rows="2" placeholder="Delivery Address."></textarea>
                                                <p class="text-danger mt-1">
                                                    {{ $errors->has('delivery_address') ? $errors->first('delivery_address') : '' }}
                                                </p>
                                            </div>
                                            <div class="mb-4">
                                                <input type="radio" checked id="checkbox1" value="online"
                                                    name="payment_type" />
                                                <label for="checkbox1">Online Payment</label>
                                            </div>
                                            <div class="form-group ">
                                                <input type="submit" class="btn btn-primary" style="width:100%"
                                                    value="Confirm Order">
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="axil-order-summery order-checkout-summery">
                            <h5 class="title mb--20">Your Order</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($sum = 0)
                                        @foreach ($cartProducts as $cartProduct)
                                            <tr class="order-product">
                                                <td>{{ $cartProduct->name }} : <span class="quantity"> &nbsp;
                                                        {{ $cartProduct->price }} *{{ $cartProduct->qty }}</span></td>
                                                <td>&#2547; {{ number_format($cartProduct->price * $cartProduct->qty) }}
                                                </td>
                                            </tr>
                                            @php($sum = $sum + $cartProduct->price * $cartProduct->qty)
                                        @endforeach
                                        <tr class="order-subtotal">
                                            <td>Subtotal</td>
                                            <td>&#2547; {{ number_format($sum) }}</td>
                                        </tr>
                                        <tr class="order-tax">
                                            @php($tax = $sum * 0.07)
                                            <td>Tax Amount (7%)</td>
                                            <td> &#2547; {{ number_format($tax) }}</td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <td colspan="2">
                                                <div class="shipping-amount">
                                                    <span class="title">Shipping Charge</span>
                                                    <span class="amount">{{ $shipping = 100 }}</span>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio1" name="shipping">
                                                    <label for="radio1">Free Shippping</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <td>Total Payable Amount</td>
                                            <td class="order-total-amount">&#2547;
                                                {{ number_format($total = $sum + $shipping + $tax) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <?php
                                Session::put('order_total', $total);
                                Session::put('tax_total', $tax);
                                Session::put('shipping_total', $shipping);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
