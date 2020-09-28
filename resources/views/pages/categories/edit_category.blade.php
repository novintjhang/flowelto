@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">  
        <div class="col-md-3">
            <img src="{{ asset('images/'.$category->thumbnail) }}" alt="Flowelto Category Thumbnail" class="img-thumbnail thumbnail">
        </div>
        <div class="col-md-6 pl-5">
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
            <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Category Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $category->name ?? '' }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Category Image') }}</label>

                    <div class="col-md-6">
                        <input type="file" class="form-control-file" name="thumbnail">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
