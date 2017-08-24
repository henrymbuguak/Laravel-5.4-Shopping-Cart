@extends('layouts.master')

@section('title')
    User Registration
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Customer Profile</h1>
            <hr>
            <h3>My orders</h3>
            @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">$ {{ $item['price'] }}</span>
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <strong>Total price: $ {{ $order->cart->totalPrice }}</strong>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
