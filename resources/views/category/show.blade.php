@extends('layouts.base')

@section('content')
    <div class="d-flex flex-column align-items-center">
        <div class="card shadow border-0 my-5 p-3" style="width:20rem;">
            <div class="card-body">
               <h1 class="card-title">{{ $category->name }}</h1>
               <p class="lead">{{ $category->description }}</p>
               <hr>
               <a href="{{route('category.edit', $category->id)}}" class="btn btn-outline-warning">Edit Category</a>
            </div>
        </div>

        <a href="{{route('category.index')}}" class="btn btn-light border">kembali!</a>
    </div>
@endsection
