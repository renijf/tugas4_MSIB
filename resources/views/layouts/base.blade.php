<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    @if (isset($title))
        <title>{{ $title }}</title>
    @else
        <title>Tokoku Project</title>
    @endif
    
    @yield('styles')
</head>
<body class="bg-light">
    <header class="d-flex justify-content-center py-3  bg-white">
        <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Category</a></li>
        <li class="nav-item"><a href="{{route('product.index')}}" class="nav-link">Product</a></li>
        <li class="nav-item"><a href="{{route('cart.index')}}" class="nav-link">Cart</a></li>
        </ul>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>