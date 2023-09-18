<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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

        .btn-primary {
            margin-top: 20px;
            background-color: #4CAF50; /* Button background color */
            border: none;
            color: white;
            padding: 15px 32px;
            border-radius: 8px; /* Rounded button */
            font-weight: 600; /* Bolder button text */
            transition: background-color 0.3s; /* Smooth hover effect */
        }

        .btn-primary:hover {
            background-color: #45a049; /* Darker color on hover */
        }

        .list-group {
            max-width: 400px; /* Adjust the max-width as needed */
            margin-top: 20px;
        }

        .list-group-item {
            text-align: center;
            background-color: #f0f0f0; /* List item background color */
            border: 1px solid #ddd; /* Light border */
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 500; /* Slightly bolder text */
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Product List</h1>
        <a href="/products/create" class="btn btn-primary">Add New Product</a>
        
        <ul class="list-group">
           <?php foreach ($products as $product):?>
                <li class="list-group-item">
                   <a href="/products/edit/<?=$product['ID']?>"><?=$product['UPC'] ?></a>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
