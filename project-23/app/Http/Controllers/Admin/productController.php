<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;

class productController extends Controller
{
    public function product(){
        $product = Product::orderBy('created_at','desc')->Paginate(5);
        return view('backend.product.index',compact('product'));
    }

    public function create(){
        $category=Category::all();
        return view ('backend.product.create',compact('category'));
    }

    public function insert(Request $request)
    {
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name'=>'required|max:255',
            'price'=>'required|max:255',
            'description'=>'required',
            'qty'=>'required',
            'image'=>'mimes:jpg,jpeg,png',
        ],
        [
            'name.required'=>'กรุณากรอกข้อมูลสินค้า',
            'name.max'=>'กรอกข้อมูลได้ 255 ตัวอักษร',
            'price.required'=>'กรุณากรอกข้อมูลราคาสินค้า',
            'price.max'=>'กรอกข้อมูลได้ 255 ตัวอักษร',
            'dexcription.required'=>'กรุณากรอกข้อมูลรายละเอียดสินค้า',
            'qty.required'=>'กรุณากรอกจำนวนสินค้า',
            'image.mimes'=>'อัพโหลดภาพที่มีนามสกุล .jpg .jpeg .png ได้เท่านั้น',
        ]);
        $pro = new Product();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->qty = $request->qty;
        $pro->category_id = $request->category_id;

        if($request->hasFile('image')){
         $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path().'/backend/product/',$filename);
         Image::make (public_path().'/backend/product/'.$filename)->resize(50,50)->save(public_path().'/backend/product/resize/'.$filename);
         $pro->image = $filename;

        }else{
          $pro->image = "no_image.jpg";
        }
        $pro->save();
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกแล้ว');
        return redirect('admin/product/index');
        }

        public function edit($product_id)
        {
            $pro=Product::find($product_id);
            $cat=Category::all();
            return view('backend.product.edit',compact('pro','cat'));
        }

        public function update(request $request, $product_id){
            $pro=Product::find($product_id);
            $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->qty = $request->qty;
        $pro->category_id = $request->category_id;

        if($request->hasFile('image')){
            if($pro->image!= 'no_image.jpg'){
                File::delete(public_path().'/backend/product/'.$pro->image);
                File::delete(public_path().'/backend/product/resize/'.$pro->image);
            }
         $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path().'/backend/product/',$filename);
         Image::make (public_path().'/backend/product/'.$filename)->resize(50,50)->save(public_path().'/backend/product/resize/'.$filename);
         $pro->image = $filename;
        }

        $pro->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกอัพเดทแล้ว');
        return redirect('admin/product/index');
        }

        public function delete($product_id){
            $pro=Product::find($product_id);
            if($pro->image!= 'no_image.jpg'){
                File::delete(public_path().'/backend/product/'.$pro->image);
                File::delete(public_path().'/backend/product/resize/'.$pro->image);
        }
        $pro->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบแล้ว');
        return redirect('admin/product/index');
        }
}
