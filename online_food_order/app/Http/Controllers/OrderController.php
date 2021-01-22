<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Shipping;
use Illuminate\Http\Request;
use DB;
class OrderController extends Controller
{
    public function manageOrder(){
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.customer_id')
            ->join('payments', 'orders.order_id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.name', 'payments.payment_status')
            ->get();

        return view('BackEnd.Order.manage', compact('orders'));
    }
    public function viewOrder($order_id){
        $order = Order::find($order_id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Shipping::where('order_id', $order->order_id)->first();
        $order_detail = order_detail::where('order_id', $order->order_id)->first();
        return view('BackEnd.Order.view_order');
//        , compact('data')
    }
}
