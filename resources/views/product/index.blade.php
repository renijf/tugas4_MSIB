@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <div class="card-body">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Product List</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('product.create')}}" class="btn btn-outline-primary btn-lg">Tambah product</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="d-flex flex-wrap justify-content-between">
                    @foreach ($products as $product)
                        <div class="card p-2 m-2 bg-light" style="width: 20rem;">
                            <div class="card-body">
                                <a href="{{route('product.show', $product->id)}}" class="link-dark card-title text-decoration-none">
                                    <h1>{{ $product->name }}</h1>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-sm text-muted m-0">
                                        {{ $product->category->name }}
                                    </p>
                                    <h4 class="fw-bold text-primary text-end m-0">
                                        Rp. {{ $product->price }}
                                    </h4>
                                </div>
                                <hr>
                                <p class="">{{ $product->description }}</p>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-outline-primary m-2">Add to cart</a>
                                    <a href="{{route('product.show', $product->id)}}" class="btn btn-outline-secondary m-2">Detail Product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
