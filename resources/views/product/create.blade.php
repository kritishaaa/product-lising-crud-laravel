<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a product</title>
</head>
<body>
    <div class="container">
        <form action="{{ url('/')}}/product"  method="POST" class="product-form">
            @csrf
            <h1>Create A new product</h1>
            <div>
                <label for="name">Product Name</label> <br>
                <input type="text" name="name" placeholder="Enter product name" >
            </div>
            <div>
                <label for="qty">Qunatity</label> <br>
                <input type="number" name="qty" placeholder="Enter quantity" >
            </div>
            <div>
                <label for="price">Product Price</label><br>
                <input type="number" name="price" placeholder="Enter product price" >
            </div>
            <div>  
                <label for="description">Description</label><br>
                <input type="text" name="description" placeholder="Description">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>

        </form>
    </div>
</body>
</html>