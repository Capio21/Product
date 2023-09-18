<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
<div>
    <div class= "container mt-5"></div>
        <h1>Edit Product</h1>
        <form action="/products/update/<?= $product['ID']?>" method="post">
            <div class = "form-group">
            <label for="UPC">UPC</label>
        <input type="text" class="form-control" name="UPC" id ="" value="<?=$product['UPC']?>" required>
            </div>

            <div class = "form-group">
            <label for="Product_Name">Product Name</label>
        <input type="text" class="form-control" name="Product_Name" id ="" value="<?=$product['Product_Name']?>"required>
            </div>

            <div class = "form-group">
            <label for="Price">Price</label>
        <input type="text" class="form-control" name="Price" id ="" value="<?=$product['Price']?>"required>
            </div>

            <div class = "form-group">
            <label for="Quantity">Quantity</label>
        <input type="text" class="form-control" name="Quantity" id ="" value="<?=$product['Quantity']?>"required>
            </div>
    
        
        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="/products/delete/<?=$product['ID']?>" onclick="return confirm('Are you sure you want to delete the product')"class="btn btn-danger">Delete</a>
    </form>
    </div>
</body>
</html>