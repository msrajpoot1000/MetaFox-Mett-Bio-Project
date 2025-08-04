<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Homeslider;

use App\Models\Productcategory;

use App\Models\Product;

use App\Models\Companyinfo;

use App\Models\Testimonial;

use App\Models\Serve;

use App\Models\Blog;

use App\Models\Teacher;

use App\Models\About;

use App\Models\Certificate;

class IndexController extends Controller
{
    public function index()
    {   
        $sliders = Homeslider::all();
        $categories = Productcategory::all();
        $products = Product::all(); 
        $testimonials = Testimonial::latest()->get();
        $companyinfos = Companyinfo::first();
        $serves = Serve::all();
        $allBlogs = Blog::get();
        $teachers = Teacher::latest()->get();
        $about = About::latest()->first();
        $certificates = Certificate::latest()->get();
        return view('website.frontend.index', compact('sliders', 'categories', 'products', 'testimonials','companyinfos', 'serves', 'allBlogs', 'teachers', 'about', 'certificates'));
    }
    
    public function information()
    {   
        return view('website.frontend.information');
    }
}
