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
            if(Auth::user()->role == 1){ 
                return redirect()->route('BE.index');
            }
            else{
                // $rules = [
                //     'email' => 'required'|'email',
                //     'code' => 'unique:products|required|max:10',
                //     'name' => 'required'
                // ];
                
                // // $messages = [
                // //     'code.required' => 'Mã sách không được bỏ trống !',
                // //     'code.max' => 'Trường này chỉ tối đa 6 ký tự',
                // //     'name.required' => 'Tên sách không được bỏ trống!'
                // // ];
        
                // $request->validate($rules);
            return redirect()->route('BE.index');
            // return redirect()->route('BE.login');
            }
        } 
        else{
            $request->session()->flash('errors', 'Tên tài khoản hoặc mật khẩu không tồn tại !');
            return redirect()->route('BE.login');
        }
        // else {
        //     return redirect()->route('BE.login')
        //         ->withInput($request->input())
        //         ->withErrors('Tên đăng nhập và mật khẩu không tồn tại');
        // }
     
    }
    public function logout (Request $request) {
        //logout user
        auth()->logout();
        $request->session()->flash('logout', 'Đăng xuất thành công !');

        // redirect to homepage
        return redirect()->route('BE.login');
    }
}
