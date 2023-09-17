<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <form action="/save" method="post">
        <label for="UPC">UPC</label>
        <input type="text" id="UPC" name="UPC" value="">
        
        <label for="Product_Name">Product Name</label>
        <input type="text" id="Product_Name" name="Product_Name" value="">
        
        <label for="Price">Price</label>
        <input type="text" id="Price" name="Price" value="">
        
        <label for="Quantity">Quantity</label>
        <input type="text" id="Quantity" name="Quantity" value="">
        
        <label for="Created_at">Created At</label>
        <input type="datetime-local" id="Created_at" name="Created_at" value="">
        
        <input type="submit" name="submit" value="Submit">
    </form>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>UPC</th>
            <th>Product_Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created_at</th>
            <th>Action</th>
        </tr>
        <?php foreach($product as $pr): ?>
            <tr>
                <td><?= $pr['UPC'] ?></td>
                <td><?= $pr['Product_Name'] ?></td>
                <td><?= $pr['Price'] ?></td>
                <td><?= $pr['Quantity'] ?></td>
                <td><?= $pr['Created_at'] ?></td>
                <td>
                    <a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
