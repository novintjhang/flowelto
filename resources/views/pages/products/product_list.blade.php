@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="pl-5">
        <form method="POST" action="#" enctype="multipart/form-data">
            {{ csrf_field() }}
            <select name="search_type" id="option" class="form-control col-md-1" style="display: inline;">
                <option value="name">Name</option>
                <option value="price">Price</option>
            </select>
            <input type="text" name="query" class="form-control col-md-2" style="display: inline-block;" placeholder="Search">
        </form>
    </div>
    <div class="row justify-content-center">
        @foreach($products as $product)
            <div class="col-md-4 pt-4">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="{{ route('product', $product->slug)}}">
                            <img src="{{ asset('images/'.$product->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail thumbnail">

                            <h6 class="pt-4 ">{{ $product->name }}</h6>
                        </a>

                        @auth
                            @if(App\User::isRole('MANAGER'))
                                <div class="row pt-2 justify-content-center">
                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><span style="font-size: 12px;">Delete Flower<span></button>
                                    </form>
                                    <a href="{{ route('products.edit', $product->id) }}" type="button" class="btn btn-primary"><span style="font-size: 12px;">Update Flower</span></a>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}

</div>
@endsection
