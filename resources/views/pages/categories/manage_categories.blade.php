@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
        {{$products->render()}}
        @foreach($categories as $category)
            <a href="{{ route('product_category', $category->slug)}}">
                <div class="col-md-4 pt-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('images/'.$category->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail" style="width: 300px; height: 300px;">

                            <h6 class="pt-4 ">{{ $category->name }}</h6>
                            @auth
                                @if($user_role == "MANAGER")
                                    <div class="row pt-2 justify-content-center">
                                        <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger"><span style="font-size: 12px;">Delete Category<span></button>
                                        </form>
                                        <a href="{{ route('categories.edit', $category->id) }}" type="button" class="btn btn-primary"><span style="font-size: 12px;">Update Category</span></a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection