<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product.product');
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
    //    print_r($request-> all());
    //    dd($request);
       
    }
}
