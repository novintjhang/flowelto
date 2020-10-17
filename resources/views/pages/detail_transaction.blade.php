@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <h4 class="title">Your Transaction at {{ $transaction->created_at }}</h4>
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
                    @php $total_price = 0; @endphp
                    @foreach($items as $item)
                        <tr>
                            <td class="cart-items">
                                <img src="{{ Storage::url($item->product->thumbnail) }}" alt="Flowelto Product Thumbnail" class="img-thumbnail cart-thumbnail">
                            </td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->product->price * $item->quantity }}</td>
                            <td>{{ $item->quantity }}</td>
                        </tr>
                        @php $total_price += ($item->product->price * $item->quantity); @endphp
                    @endforeach
                </tbody>
              </table>
              <span class="float-right">Total Price: Rp {{ $total_price }}</span>
        </div>
    </div>
</div>
@endsection
