<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $products;
    public function index()
    {
        return view('home.index');
    }
    public function about()
    {
        return view('about.about');
    }
    public function product()
    {
        $this->products = Product::allProducts();
        return view('product.product',[
            'products'=>$this->products,
        ]);
    }
    public function productDetails($id)
    {
        $this->products = Product::allProducts();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return view('detail.product-details',[
                    'product'=>$product
                ]);
            }
        }

    }
}
