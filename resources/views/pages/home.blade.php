@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <h4>Welcome to Flowelto Shop</h4>
        <h5>The Best Flower Shop in Binus University</h5>
    </div>
    <div class="row justify-content-center"> 
        @foreach($categories as $category)
            <div class="col-md-6 pt-4">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="{{ route('product_category', $category->slug) }}">
                            <img src="{{ Storage::url($category->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail thumbnail">

                            <h6 class="pt-4 ">{{ $category->name }}</h6>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
