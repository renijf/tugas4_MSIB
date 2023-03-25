@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <card-body>
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Edit Category</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('category.index')}}" class="btn btn-outline-primary btn-lg">kembali</a>
                </div>
            </div>

            <div class="container">
                <form action="{{route('category.update', $category->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-12 col-md-2">Name</label>
                        <div class="col">
                            <input type="text" name="name" value="{{$category->name}}" id="" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <small class="my-1 text-danger fw-bold">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-5 row">
                        <label for="description" class="col-sm-12 col-md-2">Description</label>
                        <div class="col">
                            <input type="text" name="description" value="{{$category->description}}" id="" class="form-control @error('description') is-invalid @enderror">
                            @error('description')
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
