<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MOdels\Category;
use Illuminate\Http\Request;

class catagoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('backend.catagory.index',compact('category'));
    }

public function create(){
    return view('backend.catagory.create');
}


public function insert(Request $request){
    // dd($request->name);

        //ทำการป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
            
        ],
        [
            'name.required' =>'กรุณากรอกชื่อประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลไม่เกิน 255 ตัวอักษร',
    ]);
        //การบันทึกข้อมูลลงในฐานข้อมูล
       $cat = new Category();
       $cat->name = $request->name;
       $cat->save();
       alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.');
        return redirect()->route('c.index');

    }
        public function edit($category_id){
            $cat = Category::find($category_id);
            return view('backend.catagory.edit',compact('cat'));

        }

        public function update(Request $request,$category_id){
            $category = Category::find($category_id);
            $category->name = $request->name;
            $category->update();
            alert()->error('บันทึกช้อมูลสำเสร็จ','ชื่อประเภทสินค้าชื่อนี้ถูกบันทึกลงในระบบฐานข้อมูลเรียบร้อยแล้ว');
            return redirect()->route('c.index');
        }

}
