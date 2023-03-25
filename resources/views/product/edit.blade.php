@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <card-body>
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Edit Product</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('product.index')}}" class="btn btn-outline-primary btn-lg">Go Back</a>
                </div>
            </div>

            <div class="container">
                <form action="{{route('product.update', $product->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-12 col-md-2">Name</label>
                        <div class="col">
                            <input type="text" name="name" value="{{$product->name}}" id="" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <small class="my-1 text-danger fw-bold">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="description" class="col-sm-12 col-md-2">Description</label>
                        <div class="col">
                            <input type="text" name="description" value="{{$product->description}}" id="" class="form-control @error('description') is-invalid @enderror">
                            @error('description')
                                <small class="my-1 text-danger fw-bold">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="price" class="col-sm-12 col-md-2">Price</label>
                        <div class="col">
                            <input type="text" name="price" value="{{$product->price}}" id="" class="form-control @error('price') is-invalid @enderror">
                            @error('price')
                                <small class="my-1 text-danger fw-bold">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <label for="price" class="col-sm-12 col-md-2">Category</label>
                        <div class="col">
                            <select name="category_id" id="" class="form-select">
                                <option value="{{$product->category->id}}" selected>{{ $product->category->name }}</option>
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="my-1 text-danger fw-bold">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid w-25">
                        <button type="submit" class="btn btn-lg btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </card-body>
    </div>
@endsection