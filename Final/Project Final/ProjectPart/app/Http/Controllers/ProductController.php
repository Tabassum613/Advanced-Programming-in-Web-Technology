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



      
    public function ProductEdit(Request $request)
        {
        
        //    return $id;
           $product = Product::where('id', $request->id)->first();
            
           return view('Product.productEdit')->with('product', $product);
    
        }

        
           public function ProductEditSubmitted(Request $request){
    
           $product = Product::where('id', $request->id)->first();

           $product->name = $request->name;
           $product->weight = $request->weight;
           $product->price = $request->price;
           $product->save();
    
           return redirect()->route('productlist');
       }


       public function ProductDelete(Request $request)
       {
           $product = Product::where('id', $request->id)->first();
           $product->delete();
           
           return redirect()->route('productlist');
       }



       //............Api

        public function Showproducts($id=null){
            //return VendorAuth::all();
            if($id==''){
              $products = Product::get();
              return response()->json(['products'=>$products],200);
            }
            else{
             $products = Product::find($id);
             return response()->json(['products'=>$products],200);
            }
           }

           public function addProducts(Request $request){
      

            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->weight = $request->weight;
            
            $product->save();
            $p="Product successfully added";
            return $p;
          
        }
      
        public function update_Product(Request $request,$id){
            if($request->isMethod('put')){
      
              $data = $request->all();
              $product = Product::findOrFail($id);
              $product->name = $data['name'];
              $product->email = $data['email'];
              $product->number = $data['number'];
              
              $product->save();
              $pp="Product successfully updated";
               return $pp;
            }
        
      }
      
      
      public function deleteProduct($id=null){
          Product::findOrFail($id)->delete();
         $message = 'Product Successfully deleted';
         return response()->json(['message'=>$message],200);
      }




       //.........................

      }