@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <h4 class="title">Your Cart</h4>
    </div>
    <div class="row justify-content-center pt-4">
        <div class="col-lg-10">
            <table class="table cart-table" width="100%">
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td class="cart-items">
                                <img src="{{ Storage::url($item->product->thumbnail) }}" alt="Flowelto Product Thumbnail" class="img-thumbnail cart-thumbnail">
                            </td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->product->price }}</td>
                            <td>
                                <form method="POST" action="{{ route('cart.update', $item->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div>Quantity</div>
                                    <input name="quantity" type="number" value="{{ $item->quantity }}" style="width: 60px;">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <form method="HEAD" action="{{ route('cart.checkout') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row justify-content-center">
            <button type="submit" class="btn btn-danger" @if(count($items) <= 0) {{ __('disabled') }} @endif)>
                {{ __('Checkout') }}
            </button>
        </div>
    </form>
</div>
@endsection
