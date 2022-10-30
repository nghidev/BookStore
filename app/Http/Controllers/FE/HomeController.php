<?php

namespace App\Http\Controllers\FE;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\Storage;
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

        return view('FE.order');
    }

    public function viewProfile()
    {
        return view('FE.profile');
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
}
