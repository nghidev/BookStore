<?php

namespace App\Http\Controllers\Be;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cat;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view('BE.product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Cat::all();
        return view("BE.product.create",['cats'=>$cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $createProduct = new Product();
        // dd($request->cats_id);
        $file = $request->feature_image;
        $filename = $file->getClientOriginalName();
        $file->storeAs(('public/img/product'), $filename);
        
        $createProduct->cats_id = $request->cats_id;
        $createProduct->code = $request->code;
        $createProduct->name = $request->name;
        $createProduct->description = $request->description;
        $createProduct->detail = $request->detail;
        $createProduct->real_price = $request->real_price;
        $createProduct->sale_price = $request->sale_price;

        // step1 get image name value
        
        $createProduct->feature_image = $filename;//fix cho nay
        $createProduct->inventory_number = $request->inventory_number;

        $createProduct->save();
        return redirect()->route('BE.product.index');

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
    {   $product = Product::find($id);
        $cats = Cat::all();
        return view("BE.product.edit",["product"=>$product, 'cats'=>$cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product_update = Product::find($request->id);
        $product_update->cats_id = $request->cats_id;
        $product_update->name = $request->name;
        $product_update->code = $request->code;
        $product_update->name = $request->name;
        $product_update->description = $request->description;
        $product_update->detail = $request->detail;
        $product_update->real_price = $request->real_price;
        $product_update->sale_price = $request->sale_price;

        if($request->hasFile('feature_image')){
             Storage::disk('public')->exists('img/product/' .$product_update->feature_image) ? Storage::disk('public')->delete('img/product/' .$product_update->feature_image):'';
            $file = $request->file('feature_image');
            $file_name = $file->getClientOriginalName();
            $filename = uniqid().'-'.$file_name;
            $file->storeAs('public/img/product',$filename);
            $product_update->feature_image = $filename;//fix cho nay
        }
        $product_update->inventory_number = $request->inventory_number;
        $product_update->save();
        return redirect()->route('BE.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_product = Product::find($id);
        $delete_product->delete();
        return redirect()->route('BE.index');

    }
}
