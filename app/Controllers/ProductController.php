<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $data ['products'] = $productModel->findAll();
        return view('product/index', $data);
    }
    
    public function create()
    {
       
        return view('product/create');
    }
    public function store()
    {
        $productModel = new ProductModel();
        $data = [
            'UPC' => $this->request->getPost('UPC'),
            'Product_Name' => $this->request->getPost('Product_Name'),
            'Price' => $this->request->getPost('Price'),
            'Quantity' => $this->request->getPost('Quantity'),
            'Created_at' => date('Y-m-d H:i:s'),
            'Updated_at' => date('Y-m-d H:i:s'),
        ];
        $productModel -> insert($data);
        return redirect()->to('/products');

    }
    public function edit($id)
    {
        $productModel = new ProductModel();
        $data ['product'] = $productModel->find($id);
        return view('product/edit', $data);
        
    }

    public function update($id)
    {
        $productModel = new ProductModel();
        $data = [
            'UPC' => $this->request->getPost('UPC'),
            'Product_Name' => $this->request->getPost('Product_Name'),
            'Price' => $this->request->getPost('Price'),
            'Quantity' => $this->request->getPost('Quantity'),
            'Updated_at' => date('Y-m-d H:i:s'),
        ];
        $productModel -> update($id, $data);
        return redirect()->to('/products');
        
    }
    public function delete($id)
    {
        $productModel = new ProductModel();
        $productModel -> delete($id);
        return redirect()->to('/products');
    }
    
}