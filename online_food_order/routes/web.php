<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'App\Http\Controllers\FrontEndController@index');

Route::get('/category/dish/show/{category_id}', 'App\Http\Controllers\FrontEndController@dish_show')->name('category_dish');

Route::post('/add/cart', 'App\Http\Controllers\cartController@insert')->name('add_to_cart');
Route::get('/cart/show', 'App\Http\Controllers\cartController@show')->name('cart_show');
Route::get('/cart/remove/{rowId}', 'App\Http\Controllers\cartController@remove')->name('remove_item');
Route::post('/cart/update', 'App\Http\Controllers\cartController@update')->name('update_cart');

/* checkout */
Route::get('/checkout/payment', 'App\Http\Controllers\CheckOutController@payment')->name('checkout_payment');
Route::post('/checkout/new/order', 'App\Http\Controllers\CheckOutController@order')->name('new_order');
Route::get('/checkout/order/complete', 'App\Http\Controllers\CheckOutController@complete')->name('order_complete');





Route::get('/shipping', 'App\Http\Controllers\CustomerController@shipping');
Route::post('/shipping/store', 'App\Http\Controllers\CustomerController@save')->name('store_shipping');



Route::get('/register/customer', 'App\Http\Controllers\CustomerController@show')->name('sign_up');
Route::post('/store/customer/', 'App\Http\Controllers\CustomerController@store')->name('store_customer');


Route::get('/login/customer/', 'App\Http\Controllers\CustomerController@login')->name('login_in');
Route::post('/logout/customer/', 'App\Http\Controllers\CustomerController@logout')->name('log_out');
Route::post('/check/customer/login', 'App\Http\Controllers\CustomerController@check')->name('check_login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*  Category  */
Route::get('/category/add', [App\Http\Controllers\categoryController::class, 'index'])->name('show_cate_table');
Route::post('/category/save', [App\Http\Controllers\categoryController::class, 'save'])->name('cate_save');
Route::get('/category/manage', [App\Http\Controllers\categoryController::class, 'manage'])->name('manage_cate');
Route::get('/category/active/{category_id}', [App\Http\Controllers\categoryController::class, 'active'])->name('category_active');
Route::get('/category/Inactive/{category_id}', [App\Http\Controllers\categoryController::class, 'Inactive'])->name('Inactive_cate');
Route::get('/category/delete/{category_id}', [App\Http\Controllers\categoryController::class, 'delete'])->name('cate_delete');

Route::post('/category/update', [App\Http\Controllers\categoryController::class, 'update'])->name('cate_update');
/*  /Category  */


/*  Delivery  */
Route::get('/deliveryBoy/add', [App\Http\Controllers\deliverBoyController::class, 'index'])->name('show_deliveryBoy_add_table');
Route::post('/deliveryBoy/save', [App\Http\Controllers\deliverBoyController::class, 'save_boy'])->name('delivery_save');
Route::get('/deliveryBoy/manage', [App\Http\Controllers\deliverBoyController::class, 'boy_manage'])->name('delivery_boy_manage');
Route::get('/deliveryBoy/delete/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_delete'])->name('delivery_boy_delete');
Route::get('/deliveryBoy/inactive/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_inactive'])->name('delivery_boy_inactive');
Route::get('/deliveryBoy/active/{delivery_boy_id}', [App\Http\Controllers\deliverBoyController::class, 'boy_active'])->name('delivery_boy_active');

Route::post('/deliveryBoy/update', [App\Http\Controllers\deliverBoyController::class, 'boy_update'])->name('delivery_boy_update');

/*  /Delivery  */

/*  Dish  */

Route::get('/dish/add', [App\Http\Controllers\DishController::class, 'index'])->name('show_dish_table');
Route::post('/dish/save', [App\Http\Controllers\DishController::class, 'save_dish'])->name('save_dish_data');
Route::get('/dish/manage', [App\Http\Controllers\DishController::class, 'manage_dish'])->name('manage_dish_table');
Route::get('/dish/inactive/{dish_id}', [App\Http\Controllers\DishController::class, 'inactive'])->name('dish_inactive');
Route::get('/dish/active/{dish_id}', [App\Http\Controllers\DishController::class, 'active'])->name('dish_active');
Route::get('/dish/delete/{dish_id}', [App\Http\Controllers\DishController::class, 'dish_delete'])->name('delete_dish');
Route::post('/dish/update', [App\Http\Controllers\DishController::class, 'dish_update'])->name('update_dish');


/*  /Dish  */


Route::get('/order/manage', [App\Http\Controllers\OrderController::class, 'manageOrder'])->name('show_order');
Route::get('view/order/detail/{$order_id}', [App\Http\Controllers\OrderController::class, 'viewOrder'])->name('view_order');
