<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

</head>
<body>
    <div class=container>
        <div class="heading">
    <h1>Products</h1>
    <a href="{{route('product.create')}}">
        <button type="submit">Create Products</button>
</a>
    <!-- <input type="button" value="Add Products"> -->
   </div >
    
    <table border="1" class="table">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>QUANTITY</td>
            <td>PRICE</td>
            <td>DESCRIPTION</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        
      @foreach($products as $product)
        <tr>
            <td>{{$product ->id}}</td>
            <td>{{$product ->name}}</td>
            <td>{{$product ->quantity}}</td>
            <td>{{$product ->price}}</td>
            <td>{{$product ->description}}</td>
            <td>
                <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
            </td>
            <td>
                <form  method="post"action="{{route('product.destroy', ['product' => $product])}}">
                    @csrf
                    @method("delete")
                    <button type="submit">Delete</button>
                </form>
            </td>
        
        @endforeach()
    </tr>
  
    </table>
    </div>
</body>
</html> 