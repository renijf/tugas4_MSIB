@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <div class="card-body">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Carts</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('cart.create')}}" class="btn btn-outline-primary btn-lg">Create</a>
                </div>
            </div>
            
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <td>{{ $cart->id }}</td>
                                    <td>{{ $cart->product->name }}</td>
                                    <td>{{ $cart->qty }}</td>
                                    <td>
                                        <div class="btn-group" role="button">
                                            <a href="{{route('cart.edit', $cart->id)}}" class="btn btn-warning">Edit</a>
                                            <a href="{{route('cart.destroy', $cart->id)}}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection