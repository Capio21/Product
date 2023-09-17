<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="datetime-local"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="/save" method="post">
        <label for="UPC">UPC</label>
        <input type="text" name="UPC" placeholder="" value="">
        <br>
        
        <label for="Product_Name">Product Name</label>
        <input type="text" name="Product_Name" placeholder="" value="">
        <br>
        
        <label for="Price">Price</label>
        <input type="text" name="Price" placeholder="" value="">
        <br>
        
        <label for="Quantity">Quantity</label>
        <input type="text" name="Quantity" placeholder="" value="">
        <br>
        
        <label for="Created_at">Created At</label>
        <input type="datetime-local" name="Created_at" placeholder="" value="">
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
                    <a href="/delete/<?= $pr['ID'] ?>">Delete</a>||<a href="/edit/<?= $pr['ID'] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
