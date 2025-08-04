<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductdetailsController extends Controller
{
    public function productdetails($id)
    {   
        $product = Product::findOrFail($id);
        return view('website.frontend.product-details', compact('product'));
    }
}
