@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <h4 class="title">Your Cart</h4>
    </div>
    <div class="row justify-content-center pt-4 text-center">
        <div class="col-lg-10">
            <table class="table cart-table" width="100%">
                <thead>
                    <tr>
                        <th>Flower Image</th>
                        <th>Flower Name</th>
                        <th>Subtotal</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td class="cart-items">
                                <img src="{{ Storage::url($item->product->thumbnail) }}" alt="Flowelto Product Thumbnail" class="img-thumbnail cart-thumbnail">
                            </td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->price * $item->quantity }}</td>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
