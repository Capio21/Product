<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Product List</h1>
        <a href="/products/create" class = "btn btn-primary ">Add New Product</a>
        
        <ul class = "list-group">
           <?php foreach ($products as $product):?>
                <li class = "list-group-item">
                   <a href="/products/edit/<?=$product['ID']?>"><?=$product['UPC'] ?></a>
                    
                </li>
            <?php endforeach;?>
            

        </ul>

    </div>
</body>
</html>