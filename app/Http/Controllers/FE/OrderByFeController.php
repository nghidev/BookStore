<?php

namespace App\Http\Controllers\FE;
use App\Models\Product;
use App\Models\Cat;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Laravel\Ui\Presets\React;
use App\Models\Carts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class OrderByFeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all()->where('users_id',Auth::user()->id);
        return view('FE.orderByUser',['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
        return view('FE.createOrder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
         //Tạo đơn
         $order = new Order();
         $order->users_id = Auth::user()->id;
         $order->code = $request->code;
         $order->total = Cart::subtotal();
         $order->consignee_name = $request->consignee_name;
         $order->consignee_phone = $request->consignee_phone;
         $order->consignee_address = $request->consignee_address;
         $order->status = $request->status;
         $order->payment_method = $request->payment_method;
         $order->save();

         //tạo sản phẩm theo đơn
      
        $getIdOrder = DB::table('orders')->max('id');;
         foreach (Cart::content() as $key => $value) {
            $order_detail = new OrderDetail;
            $order_detail->order_id  = $getIdOrder ;
            $order_detail->product_id  = $value->id ;
            $order_detail->quality  = $value->qty ;
            $order_detail->price  = $value->price ;
            $order_detail->save();
         }
       return $this->destroy();
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
    public function destroy()
    {
        Cart::destroy();
        return redirect()->route('fe.index');
    }
    
}
