<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a product</title>
    
</head>
<body>
    <div class="container">
        <form action="{{ route('product.update',['product'=> $product])}}"  method="post" class="product-form">
            @csrf
            @method('put')
            <h1>Update product</h1>
            <div>
                <label for="name">Product Name</label> <br>
                <input type="text" name="name" value="{{$product-> name}}">
            </div>
            <div>
                <label for="quantity">Quantity</label> <br>
                <input type="number" name="quantity" value="{{$product-> quantity}}" >
            </div>
            <div>
                <label for="price">Product Price</label><br>
                <input type="number" name="price" value="{{$product-> price}}" >
            </div>
            <div>  
                <label for="description">Description</label><br>
                <input type="text" name="description" value="{{$product-> description}}">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>

        </form>
    </div>
</body>
</html>