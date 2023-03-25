@extends('layouts.base')

@section('content')
    <div class="d-flex flex-column align-items-center">
        <div class="card shadow border-0 my-5 p-3" style="width:30rem;">
            <div class="card-body">
               <h1 class="card-title">{{ $product->name }}</h1>
               <h3 class="text-primary">Rp. {{ $product->price }}</h3>
               <p class="text-sm text-muted">{{ $product->category->name }}</p>
               <p class="lead">{{ $product->description }}</p>
               <hr>
               <a href="#" class="btn btn-outline-primary m-2">Add to cart</a>
               <a href="{{route('product.edit', $product->id)}}" class="btn btn-outline-warning m-2">Edit Product</a>
               <a href="{{route('product.destroy', $product->id)}}" class="btn btn-outline-danger m-2">Delete Product</a>
            </div>
        </div>
    
        <a href="{{route('product.index')}}" class="btn btn-light border">Go Back!</a>
    </div>
@endsection