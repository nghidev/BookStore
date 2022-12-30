<?php

namespace App\Http\Controllers\FE;

use App\Models\Product;
use App\Models\Carts;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Cat;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $test = Cat::find(1);
       
        return view('FE.cart');
    }
    public function addCart($id)
    {
        $addProduct = Product::find($id);
        $pricre = $addProduct->sale_price != 0 ? $addProduct->sale_price : $addProduct->real_price;
        
        // $check = DB::table("carts")->where('name', $addProduct->name)->where('user_id',Auth::user()->id)->first();
        // $user = Auth::user()->id;
        // $root = 1;
            // $qty_db = $check->qty;
            // Cart::add([
            //     'id' => $addProduct->id,
            //     'name' => $addProduct->name,
            //     'price' => $pricre,
            //     'qty' => $qty_db,
            //     'weight' => 5,
            //     'options' => [
            //         'image' => ''
            //     ]
            // ]);
            Cart::add([
                'id' => $addProduct->id,
                'name' => $addProduct->name,
                'price' => $pricre,
                'qty' => 1,
                'weight' => 5,
                'options' => [
                    'image' => $addProduct->feature_image
                ]
            ]);
            // Cart::instance('wishlist')->store('user');
        // foreach (Cart::content() as $value) {
        //     $id = $value->id;
        //     $name = $value->name;
        //     $price = $value->price;
        //     $qty = $value->qty;
        //     $user_id = Auth::user()->id;
        //     $this->updateCartToDB($id, $name, $price, $qty, $user_id);
        // }
        return redirect()->route('fe.order');
    }
    // public function updateCartToDB($id, $name, $pricre, $qty, $user_id)
    // {
    //     // $cart = Carts::find()->where("name", $name)->where("user_id", Auth::user()->id);
    //     $check = DB::table("carts")->where('name', $name)->where('user_id',$user_id)->first();
    //     if($check == null){
    //        $cart = new Carts;
    //         // $cart->id = $id;
    //         $cart->name = $name;
    //         $cart->price = $pricre;
    //         $cart->qty = $qty;
    //         $cart->user_id = $user_id;
    //         $cart->save();
    //     }
    //     else{
    //        $cart = Carts::where('name',$name)->first();
    //         $cart->name = $name;
    //         $cart->price = $pricre;
    //         $cart->qty = $qty;  
    //         $cart->user_id = $user_id;
    //         $cart->save();

    //     }
    
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        Cart::remove($id);
        return redirect()->route('fe.order');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function xoa(){
    Cart::destroy();
   }
}
