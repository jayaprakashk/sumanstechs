<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function show()
    {
        $data = Product::paginate(5);
        return view('list',['products'=>$data]);
        //return view('list');
    }
}
