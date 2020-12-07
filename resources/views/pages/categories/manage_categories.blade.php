@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center">
        <h4>Manage Categories</h4>
    </div>
    <div class="row justify-content-center"> 
        
        @foreach($categories as $category)
            <div class="col-md-6 pt-4">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="{{ route('product_category', $category->slug)}}">
                            <img src="{{ Storage::url($category->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail thumbnail">

                            <h6 class="pt-4 ">{{ $category->name }}</h6>
                        </a>
                        @auth
                            @if(App\User::isRole('MANAGER'))
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
        @endforeach
    </div>
</div>
@endsection
