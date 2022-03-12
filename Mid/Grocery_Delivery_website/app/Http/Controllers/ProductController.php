<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function Pro_create(){
        return view('Product.productCreate');
    }

     public function ProductCreate(Request $request)
     {
    //    $postData = $request->image;
    //    $file = $postData['image'];
    //    $fileArray = array('image' => $file);
    //    $r_image = array(
    //     'image'=>'image|required'
    //    ); 'image.required'=> 'Please Upload This Photo',

        // $rules= [
        
        //     'name'=> 'required|min:5|max:25|string:A-Z,a-z',
        //     'weight'=> 'required|numeric',
        //     'price'=> 'required|numeric'
        // ];
        // $messages= [
           
        //     'required'=> 'Please Fill Out This Field',
        //     'name.min'=> 'Minimum 5 Character',
        //     'name.max'=> 'Maximum 25 Character',
        //     'string'=> 'Name Should Be String',
        //     'weight.numeric'=> 'The Weight must be Numeric',
        //     'price.numeric'=> 'The Price must be Numeric',
        // ];
          $validate = $request->validate([
            'name'=> 'required|min:5|max:25|string:A-Z,a-z',
            'weight'=> 'required|numeric',
            'price'=> 'required|numeric'
          ],
          [
            'required'=> 'Please Fill Out This Field',
            'name.min'=> 'Minimum 5 Character',
            'name.max'=> 'Maximum 25 Character',
            'string'=> 'Name Should Be String',
            'weight.numeric'=> 'The Weight must be Numeric',
            'price.numeric'=> 'The Price must be Numeric',
          ]
          );
             $product = new Product();
             $product->name = $request->name;
             $product->weight = $request->weight;
             $product->price = $request->price;
             $product->save();
            //  return view('Product.productList');
             return $product;

        //   $this->validate($request,$rules,$messages);
        //    $output ="<h1>Submited</h1>";
            
     }

     public function ProductList()
     {
         $products = Product::all();
        return view('Product.productList')->with('products',$products);
        // return $products;
     }




}
