<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use App\Product; 
use App\ProductPage; 

class ProductsController extends Controller
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
        $search = Input::get('search');
        $id = Input::get('edit');
        $page = new ProductPage();  
        $page->is_edit = false; 
        if(isset($id)){
            $page->product = Product::find($id); 
            $page->is_edit = true;
            if($page->product == null){
                return redirect('/products')->with('error','Product Not Found');;
            } 
        }
        else{
            $page->product = new Product;
        }
        
        $page->products = Product::where('name', 'like', '%'.$search.'%')->paginate(10); 
        $page->search_key = $search;
         
        return view('products.index')->with('page', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'product_code' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->product_code = $request->input('product_code');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
  
        $product->save();

        return redirect('/products')->with('success','Product Addedd Successfully');
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
        return redirect('/products?edit='.$id);
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'product_code' => 'required'
        ]); 

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->product_code = $request->input('product_code');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
  
        $product->save();

        return redirect('/products')->with('success','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $product = Product::find($id);    
        $product->delete();
        return "true";
    }
}
