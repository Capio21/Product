<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

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

        .content {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Product</h1>
        <form action="/products/update/<?= $product['ID'] ?>" method="post">
            <div class="form-group">
                <label for="UPC">UPC</label>
                <input type="text" class="form-control" name="UPC" id="UPC" value="<?= $product['UPC'] ?>" required>
            </div>

            <div class="form-group">
                <label for="Product_Name">Product Name</label>
                <input type="text" class="form-control" name="Product_Name" id="Product_Name" value="<?= $product['Product_Name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="Price">Price</label>
                <input type="text" class="form-control" name="Price" id="Price" value="<?= $product['Price'] ?>" required>
            </div>

            <div class="form-group">
                <label for="Quantity">Quantity</label>
                <input type="text" class="form-control" name="Quantity" id="Quantity" value="<?= $product['Quantity'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Product</button>
            <a href="/products/delete/<?= $product['ID'] ?>" onclick="return confirm('Are you sure you want to delete the product')" class="btn btn-danger">Delete</a>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
