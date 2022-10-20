<?php

namespace App\Http\Controllers\FE;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // dd($product);
        return view('FE.index',['products'=>$products]);
    }
    public function detail($id)
    {
        $product= Product::find($id);
        // dd($product);
        return view('FE.detail',['product'=>$product]);
    }
    public function order()
    {
        
        // dd($product);
        return view('FE.order');
    }
}
