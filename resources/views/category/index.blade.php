@extends('layouts.base')

@section('content')
    <div class="card shadow border-0 my-5 p-3">
        <div class="card-body">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="card-title">Product Category</h1>
                </div>
                <div class="col-auto">
                    <a href="{{route('category.create')}}" class="btn btn-outline-primary btn-lg">Create</a>
                </div>
            </div>
            
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->description }}</td>
                                    <td>
                                        <div class="btn-group" role="button">
                                            <a href="{{route('category.show', $cat->id)}}" class="btn btn-success">Show</a>
                                            <a href="{{route('category.edit', $cat->id)}}" class="btn btn-warning">Edit</a>
                                            <a href="{{route('category.destroy', $cat->id)}}" class="btn btn-danger">Delete</a>
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