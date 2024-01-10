<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        return view('backend.product.index');
    }

    public function create(){
        return view ('backend.product.create');
    }
}