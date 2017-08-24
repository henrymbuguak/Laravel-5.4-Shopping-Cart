@extends('layouts.master')

@section('title')
    Shopping checkout
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="page-header">Checkout</h1>
            <h3>Your total: $ {{ $total }}</h3>
            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name:</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit card number:</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration month:</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration year:</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC:</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Buy now</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('/js/charge.js') }}"></script>
@endsection