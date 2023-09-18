<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom CSS for black and gold background -->
    <style>
        body {
            background-color: black;
            color: gold;
        }

        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .custom-btn {
            background-color: gold;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Product</h1>
        <form action="/products/store" method="post">
            <div class="form-group">
                <label for="UPC">UPC</label>
                <input type="text" class="form-control" name="UPC" id="UPC" required>
            </div>

            <div class="form-group">
                <label for="Product_Name">Product Name</label>
                <input type="text" class="form-control" name="Product_Name" id="Product_Name" required>
            </div>

            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" name="Price" id="Price" required>
            </div>

            <div class="form-group">
                <label for="Quantity">Quantity</label>
                <input type="text" class="form-control" name="Quantity" id="Quantity" required>
            </div>
    
            <button type="submit" class="btn btn-primary custom-btn btn-block">Save</button>
        </form>
    </div>
    
    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
