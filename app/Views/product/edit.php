<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #282c35; /* Dark background color */
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 16px;
            line-height: 1.6;
            color: #fff; /* Text color */
        }

        .container {
            min-height: 100vh;
            background-color: rgba(255, 255, 255, 0.1); /* Slightly transparent container background */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Soft box shadow */
            padding: 20px;
        }

        .container h1 {
            margin-bottom: 20px;
            font-size: 36px;
            font-weight: 600; /* Bolder text */
            color: #4CAF50; /* Highlight color */
        }

        .list-group {
            max-width: 400px; /* Adjust the max-width as needed */
            margin-top: 20px;
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
