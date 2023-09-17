<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <form action="/save" method="post">
        <label>UPC</label>
        <input type="hidden" name='id'value="<?=$pro['ID'] ?>" >
        <input type="text" name="UPC" placeholder="UPC" value="<?=$pro['UPC'] ?>">
        <br>
        
        <label>Product Name</label>
        <input type="text" name="Product_Name" placeholder="Product_Name" value="<?=$pro['Product_Name']?>">
        <br>
        
        <label>Price</label>
        <input type="text" name="Price" placeholder="Price" value="<?=$pro['Price']?>">
        <br>
        
        <label>Quantity</label>
        <input type="text" name="Quantity" placeholder="Quantity" value="<?=$pro['Quantity']?>">
        <br>
        
        <label>Created At</label>
        <input type="datetime-local" name="Created_at" placeholder="Created_at" value="<?=$pro['Created_at']?>">
        <br>
        
        <input type="submit"  value="save">
        
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
                    <a href="/delete/<?= $pr['ID'] ?>">Delete</a> || <a href="/edit/<?= $pr['ID'] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
