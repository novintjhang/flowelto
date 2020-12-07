@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <div class="col-md-4">
            <img src="{{ Storage::url($product->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail thumbnail">
        </div>
        <div class="col-md-7 pl-5">
            <h5>{{ $product->name }}</h5>
            <span class="badge badge-warning price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
            <p class="description">
                {!! $product->description !!}
            </p>
            @if(!Auth::user() or App\User::isRole('MANAGER') == False)
                <div class="add_to_cart">
                    <form method="POST" action="{{ route('cart.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="quantity" class="col-md-2 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-2">
                                <input id="quantity" type="number" class="form-control" name="quantity" value="1" required>
                                <input id="productId" type="hidden" class="form-control" name="productId" value="{{ $product->id }}" required>
                            </div>
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-2">
                                @auth
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add to Cart') }}
                                    </button>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-primary">
                                        {{ __('Add to Cart') }}
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
