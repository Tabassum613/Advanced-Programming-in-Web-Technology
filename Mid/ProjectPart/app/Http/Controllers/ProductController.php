<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('ValidVendor');
    }

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


    public function Pro_Add(){
        return view('Product.addproduct');
    }

    public function AddProduct(Request $request){
      

        $request->validate([
            'name' => 'required|min:3|max:20',
            'weight' => 'required',
            'price' => 'required',
        ]);
     
          $product = new Product();
          $product->name = $request->name;
          $product->weight = $request->weight;
          $product->price = $request->price;   
          $pro=$product->save();
  
          if($pro){
            return redirect()->route('productlist');
          }
          else{
            return back()->with('Fail','Something Wrong');
          }

        }

          public function ProductList()
           {
               $products = Product::all();
              return view('Product.productList')->with('products',$products);
              return $products;
           }

           public function VendorDelete(Request $request)
    {
        $customer = Product::where('id', $request->id)->first();
        $customer->delete();
        
        return redirect()->route('productlist');
    }
      

}
    