<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class catagoryController extends Controller
{
    public function catagory(){
    return view('backend.catagory.index');
}

}
