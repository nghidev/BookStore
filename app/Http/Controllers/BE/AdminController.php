<?php

namespace App\Http\Controllers\Be;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $products= Product::all();
        // dd($product);
        return view('Be.product.index');
    }
    public function login()
    {
       
        return view('BE.auth.login');
    }
    
    public function handleLogin(Request $request)
    {
      
        if (Auth::attempt(request(['email', 'password']))) {
            if(Auth::user()->name == "nhan"){ 
                return redirect()->route('BE.index');
            }
            else{
            return redirect()->route('BE.login');
            }
        } else {
            return redirect()->route('BE.login')
                ->withInput($request->input())
                ->withErrors('Tên đăng nhập và mật khẩu không tồn tại');
        }
     
    }
}
