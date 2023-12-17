<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Store Keeper Admin Page</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mt-3">
                <h5>Admin Page</h5>
            </div>
            <div class="col-md-6">
                <div>
                    <a class="btn btn-primary px-5 mt-3" href="{{ route('add_product') }}">Add new Product</a>
                    <a  class="btn btn-primary px-5 mt-3" href="{{ route('update') }}">Update Product</a>
                </div>
            </div>
        </div>  
    </div>
    

<div class="container mt-5 mb-5">
    <h1>Sales figures</h1>
    <div class="row">
        <div class="col-sm-3">
        <h3> Today</h3>
        @foreach ($sold_item as $item)
            <p>Product Name: {{ $item->product_name }}</p>
            <p>product Price: {{ $item->price }}</p>
        @endforeach
        </div>
        <div class="col-sm-3">
        <h3>Yesterday </h3>
        @foreach ($sold_item as $item)
            <p>Product Name: {{ $item->product_name }}</p>
            <p>product Price: {{ $item->price }}</p>
        @endforeach
        </div>
        <div class="col-sm-3">
        <h3>This month </h3>
        @foreach ($sold_item as $item)
            <p>Product Name: {{ $item->product_name }}</p>
            <p>product Price: {{ $item->price }}</p>
        @endforeach
        </div>
        <div class="col-sm-3">
            <h3>Last Month </h3>
            @foreach ($sold_item as $item)
            <p>Product Name: {{ $item->product_name }}</p>
            <p>product Price: {{ $item->price }}</p>
        @endforeach
        </div>
</div>
        
</div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h3>All Products</h3>
            @foreach ( $data as $product )
            <div class="row">
                <div class="col-sm-7">
                    <h4>{{ $product->product_name }}</h4>
                </div>
                <div class="col-sm-5">
                    <a href="{{ route('update', ['product_id'=>$product->id]) }}" class="btn btn-primary px-5 p-3">Edit</a>
                </div>
                <hr>
            </div>
            
        @endforeach
        </div>   
    </div>


</body>
</html>