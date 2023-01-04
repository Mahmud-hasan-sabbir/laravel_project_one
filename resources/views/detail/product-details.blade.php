<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product details</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('product') }}" class="nav-link">Product</a></li>
        </ul>
    </div>
</nav>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-success text-success"> Product Details</h2>
            </div>

                <div class="col-md-6 mt-5 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center text-danger"> Single Product</h1>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset($product['image']) }}" alt="" class="card-img-top" style="height: 250px">
                            <h2>{{ $product['name'] }}</h2>
                            <p>Price : {{ $product['price'] }} tk</p>
                            <a href="{{ route('details.product',['id'=>$product['id']]) }}" class="btn btn-success">View</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>

</section>

<script src="{{ asset('/') }}assets/js/bootstrap.bundle.js"></script>
</body>
</html>

