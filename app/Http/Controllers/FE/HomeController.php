<?php

namespace App\Http\Controllers\FE;
use App\Models\Product;
use App\Models\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use App\Models\Carts;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        
        return view('home');
    }

    public function index()
    {
        $products= Product::all();
        $Cats = Cat::all();
        // dd($product);
        return view('FE.index',['products'=>$products, 'cats'=>$Cats]);
    }

    public function detail($id)
    {
        
        $product= Product::find($id);
        // dd($product);
        return view('FE.detail',['product'=>$product]);
    }

    public function order()
    {
        // $get_carts = Carts::all()->where('user_id',Auth::user()->id);
        $total = 0;
        $count = 0;
        // foreach ( $get_carts as $key => $value) {
        //     $count += $value->qty;
        //     $result = $value->price*$value->qty;
        //     $total += $result;
        // }
    //    dd($count);
        // return view('FE.order',["get_carts"=>$get_carts,"total"=>$total]);
        return view('FE.cart');
    }

    public function viewProfile()
    {   
        // $user = DB::table('users')->find(1);
    //     if (Gate::allows('profile-comment', $user)) {
        return view('FE.profile');
        // }
        // else{
        //     dd("nguoi dung nay khoong co quyen truy cap");
        // }
    }

    public function updateProfile(Request $request)
    {
        $updateUser = Auth::user();
        $updateUser->name = $request->input('name');
        $updateUser->tel = $request->input('tel');
        $updateUser->address = $request->input('address');
        // $updateUser->name = $request->input('avatar');
        $updateUser->save();
        return view('FE.profile');
    }

    public function test(){
        return view('FE.test');
    }

    public function storeAvatar(Request $request){
        $avatar= Auth::user();

        if($request->file('input-b1')){
            Storage::disk('public')->exists('img/product/' . Auth::user()->avatar) ? Storage::disk('public')->delete('img/product/' . Auth::user()->avatar):'';
            
            // dd($request->file('input-b1'));
            $file = $request->file('input-b1');
            $file_name = $file->getClientOriginalName();
            $file->storeAs(('public/img/product'), $file_name);
            $avatar->avatar = $file_name;
            $avatar->save();
        }
        
        return view('FE.profile');
       
    }
    // public function search(Request $request){
    //     if ($request('search')) {
    //         ＄users = Product::where('name', 'like', '%' . request('search') . '%')->get();
    //     } else {
    //         ＄users = Product::all();
    //     }
    
    //     return view('welcome')->with('users', ＄users);
    // }
    public function getProductByCat($id){
        $products = Product::where('cats_id',$id)->get();
        // dd($product);
        $cats = Cat::all();


        return view('FE.index',['products' => $products,'cats'=>$cats]);
    }
    public function viewOrderDetail($id){
        $order = Order::find($id);
        $order_detail = DB::table('order_details')
            ->join('orders', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select('order_details.*', 'orders.*', 'products.name')
            ->where('orders.id',$id)
            ->get();
            // dd($order_detail);
        return view('FE.orderDetail',['order_detail'=>$order_detail,'order'=>$order]);
    }
}
