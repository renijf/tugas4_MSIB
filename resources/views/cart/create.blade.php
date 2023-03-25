@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <card-body>
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Create</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('cart.index')}}" class="btn btn-outline-primary btn-lg">kembali</a>
                </div>
            </div>

            <div class="container">
                <form action="{{route('cart.store')}}" method="post">
                    @csrf
                    <div class="mb-5 row">
                        <div class="col-6">
                            <div class="row">
                                <label for="price" class="col-sm-12 col-md-4">Product</label>
                                <div class="col">
                                    <select name="product_id" id="" class="form-select">
                                        <option value=""></option>
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <small class="my-1 text-danger fw-bold">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <label for="qty" class="col-sm-12 col-md-4">Quantity</label>
                                <div class="col">
                                    <input type="text" name="qty" id="" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <small class="my-1 text-danger fw-bold">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid w-25">
                        <button type="submit" class="btn btn-lg btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </card-body>
    </div>
@endsection
