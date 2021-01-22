<?php

namespace App\Http\Controllers;
use DB;
use App\Models\category;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        $categories = Category::where('category_status', 1)->get();
        return view('BackEnd.dish.add', compact('categories'));
    }
    public function save_dish(Request $request)
    {
        $imgName = $request->file('dish_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'BackEndSourceFile/dish_img/';
        $imgUrl = $directory.$image;
        $imgName->move($directory, $image);

        $dish = new Dish();
        $dish->dish_name = $request->dish_name;
        $dish->category_id = $request->category_id;
        $dish->dish_detail = $request->dish_detail;
        $dish->dish_image = $imgUrl;
        $dish->dish_status = $request->dish_status;
        $dish->added_on = $request->added_on;
        $dish->full_price = $request->full_price;
        $dish->half_price = $request->half_price;
        $dish->save();
        return back()->with('sms', 'Data Saved');
    }
    public function manage_dish(){
//       $dishes = Dish::all();
        $categories = Category::where('category_status', 1)->get();
        $dishes = DB::table('dishes')->join('categories', 'dishes.category_id', '=', 'categories.category_id')->select('dishes.*','categories.category_name')->get();
       return view('BackEnd.dish.manage', compact('dishes', 'categories'));
    }
    public function active($dish_id){
        $dish = Dish::find($dish_id);
        $dish->dish_status = 1;
        $dish->save();
        return back();
    }
    public function inactive($dish_id){
        $dish = Dish::find($dish_id);
        $dish->dish_status = 0;
        $dish->save();
        return back();
    }
    public function dish_delete($dish_id){
        $dish = Dish::find($dish_id);
        $dish->delete();
        return back();
    }
    public function dish_update(Request $request){
        $dish = Dish::find($request->dish_id);

        $img_main = $request->file('dish_image');
        if($img_main){
            $img_name = $img_main->getClientOriginalName();
            $directory = 'BackEndSourceFile/dish_img/';
            $imgUrl = $directory.$img_name;
            $img_main->move($directory, $img_name);

            $old_img = $dish->dish_image;
            if(file_exists($old_img)){
                unlink($old_img);
            }
            $dish->dish_name = $request->dish_name;
            $dish->category_id = $request->category_id;
            $dish->dish_detail = $request->dish_detail;
            $dish->dish_image = $imgUrl;
            $dish->full_price = $request->full_price;
            $dish->half_price = $request->half_price;
        }
        else{
            $dish->dish_name = $request->dish_name;
            $dish->category_id = $request->category_id;
            $dish->dish_detail = $request->dish_detail;
            $dish->full_price = $request->full_price;
            $dish->half_price = $request->half_price;
        }
        $dish->save();
        return back()->with('sms', 'Successfully Updated');
    }
}
