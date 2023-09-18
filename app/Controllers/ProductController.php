<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function save()
    {
        // Collect data from the request
        $data = [
            'UPC' => $this->request->getVar('UPC'),
            'Product_Name' => $this->request->getVar('Product_Name'),
            'Price' => $this->request->getVar('Price'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Created_at' => $this->request->getVar('Created_at'),
        ];

        // Check if 'ID' is in the POST data
        $id = $this->request->getVar('ID');
        if (!empty($id)) {
            $this->product->update($id, $data);
        } else {
            $this->product->insert($data);
        }

        // Redirect to the product listing page (adjust the URL as needed)
        return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product;
    }

    public function allan()
    {
        // Fetch all products from the database and pass them to the view
        $data['product'] = $this->product->findAll();
        
        // Load the 'products' view and pass the data to it
        return view('products', $data);
    }

    public function index()
    {
        // Your default index action
    }
}
