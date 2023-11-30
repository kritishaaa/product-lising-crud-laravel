<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    
    public function index(){
        $products= Product::all();
        // return view('product',['data'=>$data] );
        // return view('product')->with($data);
        return view('product',compact('products'));
         
    }
    
    public function create(){
        return view('create');
    }

    public function store(Request $request){

    //    print_r($request-> all());
    //    dd($request);
    $data= $request->validate([

        'name'=> 'required',
        'quantity'=>'required|numeric',
        'price'=> 'required|decimal:0,2',
        'description' =>  'nullable'
    
    ]);
    $newProduct=Product::create($data);

    // return view('product');
    return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('edit',['product'=>$product]);
    }

    public function update(Request $request, Product $product){
        $data= $request->validate([

            'name'=> 'required',
            'quantity'=>'required|numeric',
            'price'=> 'required|decimal:0,2',
            'description' =>  'nullable'
        
        ]);
        $product-> update($data);
        return redirect(route('product.index'))->with ('sucess',"Product updated sucessfully"); 
    }

    public function destroy(Product $product){
       $product->delete();
       return redirect(route('product.index'));
    }

}
