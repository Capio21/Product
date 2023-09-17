<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <!-- Include Bootstrap CSS from a CDN (You can also download and host it locally) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Centered layout */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5; /* Optional background color */
        }

        /* Card style */
        .card {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="card mt-5">
        <h1 class="mb-4">Product Listing</h1>
        <div class="center-form">
            <form action="/save" method="post">
                <div class="mb-3">
                    <label for="UPC" class="form-label">UPC</label>
                    <input type="hidden" name="id" value="<?=$pro['ID'] ?>">
                    <input type="text" class="form-control" id="UPC" name="UPC" placeholder="UPC" value="<?=$pro['UPC'] ?>">
                </div>

                <div class="mb-3">
                    <label for="Product_Name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="Product_Name" name="Product_Name" placeholder="Product_Name" value="<?=$pro['Product_Name']?>">
                </div>

                <div class="mb-3">
                    <label for="Price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="Price" name="Price" placeholder="Price" value="<?=$pro['Price']?>">
                </div>

                <div class="mb-3">
                    <label for="Quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="Quantity" name="Quantity" placeholder="Quantity" value="<?=$pro['Quantity']?>">
                </div>

                <div class="mb-3">
                    <label for="Created_at" class="form-label">Created At</label>
                    <input type="datetime-local" class="form-control" id="Created_at" name="Created_at" value="<?=$pro['Created_at']?>">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>UPC</th>
                    <th>Product_Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($product as $pr): ?>
                    <tr>
                        <td><?= $pr['UPC'] ?></td>
                        <td><?= $pr['Product_Name'] ?></td>
                        <td><?= $pr['Price'] ?></td>
                        <td><?= $pr['Quantity'] ?></td>
                        <td><?= $pr['Created_at'] ?></td>
                        <td>
                            <a href="/delete/<?= $pr['ID'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            <a href="/edit/<?= $pr['ID'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Include Bootstrap JS (Optional, if you need JavaScript functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
