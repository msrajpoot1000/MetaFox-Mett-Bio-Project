<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogdetailsController extends Controller
{
    public function blogdetails()
    {
        return view('website.frontend.blog-details');
    }
}
