@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center pt-4">
        <div class="col-md-6 pl-5">
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="category_id" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                    <div class="col-md-6">
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Flower Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Flower Price (Rupiah)') }}</label>

                    <div class="col-md-6">
                        <input id="price" type="number" class="form-control" name="price" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control" name="description" placeholder="Description" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Flower Image') }}</label>

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
