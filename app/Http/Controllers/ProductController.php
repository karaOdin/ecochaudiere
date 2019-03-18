<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
    	$product = Product::all();
    	$arr = Array('product'=>$product);
    	return view('product',$arr);
    }

    public function getOnePrd(Request $request, $id)
    {
    	$product = Product::find($id);
    	$arr = Array('product'=>$product);
    	return view('productDetail',$arr);
    }
}
