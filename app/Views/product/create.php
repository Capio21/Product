<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Add Product</h1>
        <form action="/products/store" method="post">
            <div class = "form-group">
            <label for="UPC">UPC</label>
        <input type="text" class="form-control" name="UPC" id ="UPC" required>
            </div>

            <div class = "form-group">
            <label for="Product_Name">Product Name</label>
        <input type="text" class="form-control" name="Product_Name" id ="Product_Name" required>
            </div>

            <div class = "form-group">
            <label for="Price">Price</label>
        <input type="text" class="form-control" name="Price" id ="Price" required>
            </div>

            <div class = "form-group">
            <label for="Quantity">Quantity</label>
        <input type="text" class="form-control" name="Quantity" id ="Quantity" required>
            </div>
    
        
        <button type="submit" class="btn-primary">Save</button>
    </form>
    </div>
</body>
</html>