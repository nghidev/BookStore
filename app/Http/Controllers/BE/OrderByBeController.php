<?php

namespace App\Http\Controllers\BE;

use App\Models\Product;
use App\Models\Cat;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use App\Models\Carts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class OrderByBeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
    
        return view('BE.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function orderDetail($id)
    {
        $order = Order::find($id);
        $order_detail = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select('order_details.*', 'orders.*', 'products.name')
            ->where('orders.id',$id)
            ->get();
            // dd($order_detail);
        return view('BE.order.orderDetail',['order_detail'=>$order_detail,'order'=>$order]);
        // return view('BE.order.orderDetail',['orders'=>$orders]);
    }
    // đơn hàng có status bằng 1 là đơn hàng đã xác nhận
    public function Classification1()
    {
        $orders = Order::all()->where('status', 1);
        return view('BE.order.Classification1', ['orders' => $orders]);
    }

    // đơn hàng có status bằng 0 là đơn hàng chưa xác nhận
    public function Classification0()
    {
        $orders = Order::all()->where('status', 0);
        return view('BE.order.Classification0', ['orders' => $orders]);
    }

    // đơn hàng có status bằng 2 là đơn hàng đã giao
    public function Classification2()
    {
        $orders = Order::all()->where('status', 2);
        return view('BE.order.Classification2', ['orders' => $orders]);
    }
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
