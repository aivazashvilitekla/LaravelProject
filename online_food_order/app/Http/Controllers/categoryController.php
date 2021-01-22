<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        return view('BackEnd.category.addCategory');
    }
    public function save(Request $request){
        $cat = new category();
        $cat->category_name = $request->category_name;
        $cat->order_number = $request->order_number;
        $cat->category_status = $request->category_status;
        $cat->added_on = $request->added_on;
        $cat->save();
        return back()->with('sms', 'Category Saved');
    }
    public function manage(){
        $categories = category::all();
        return view('BackEnd.category.manageCategory',compact('categories'));
    }
    public function active($category_id){
        $category = Category::find($category_id);
        $category->category_status = 1;
        $category->save();
        return back();
    }
    public function Inactive($category_id){
        $category = Category::find($category_id);
        $category->category_status = 0;
        $category->save();
        return back();
    }
    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        return back();
    }
    public function update(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->save();
        return redirect('/category/manage')->with('sms', 'Category updated');
    }
}
