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

    public function product($product)
    {
        echo $product;
    }

    public function allan()
    {
        $data = $this->product->findAll();
        echo '<pre>';
        print_r($data);
    }

    public function index()
    {
        //
    }
}

