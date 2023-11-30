<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <body>
    <style>
        /* Add some styles for the arrow */
        .arrow {
            font-size: 100px; /* Adjust the font size as needed */
            text-align: center;
            margin-top: 50px; /* Add some margin for spacing */
        }
    </style>
    </body>
</head>
<body>
    <h1>Welcome to the Product adding and listing page</h1>
   <p>click the link below to create a list of products</p>
   <div style="font-size: 100px;">
        &#9660; <!-- Downward pointing triangle Unicode character -->
    </div>
    <a href="{{route('product.create')}}">Click Here</a>
    
</body>
</html>