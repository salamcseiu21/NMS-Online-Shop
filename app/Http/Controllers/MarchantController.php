<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class MarchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
        $this->middleware('auth');
       
    }
    public function index()
    {
        $data['all_prducts']=\App\Product::get()->orderBy('product_row_id','DESC');
        return view('view-product',['data'=>$data]);
    }
    public function fullProductList() {
   $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        $data["products"]=\App\Product::get()->where('parent_id',Auth::user()->marchant_id)->where('deletion_status',0);
        $data["all_categories"]= \App\Category::get();
        $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('marchant.product-list',['data'=>$data]);
         return view('layouts.marchant-layout',['data'=>$data])->with('maincontent',$page_content);
 }
 public function fullSubCategoryList(){
  $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
       $data['all_categories']= DB::table('sub_categories')->get();
       $page_content=view('marchant.sub-category-list',['data'=>$data]);
       return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);
 }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        $data['products']=\App\Product::get()->where('parent_id',Auth::user()->marchant_id)->where('deletion_status',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['categories']= \App\Category::get();
         $data['all_prducts']=\App\Product::orderBy('product_row_id','DESC')->get();
         $data['all_orders']= DB::table('orders');
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('marchant.add-product',['data'=>$data]);
         return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAddProduct(Request $request)
    {
        $product_no=\App\Product::get()->max('product_row_id')+1;
        $marchant_id=Auth::user()->marchant_id;
        $name =$request->name;
        $sd=$request->sd;
        $ld=$request->ld;
        $sku='NMS'.Auth::user()->marchant_id.Auth::user()->id.$request->get('categoryid').$product_no;
        $isfeatured=$request->isfeatured;
        $product_price= $request->product_price;
        $categoryId =$request->get('categoryid');
        $file = $request->file('product_image');
        //$file1 = $request->file('product_image');
            $destinationPath = public_path(). '/images/products/thumbs/';
            //$destination = public_path(). '/images/products/';
            $filename = $file->getClientOriginalName();
             //$filename1 = $file1->getClientOriginalName();

            $file->move($destinationPath, $filename);
            //$file1->move($destination, $filename1);

           // echo  $filename;
            
        //$image_name=$request->cte_image->getClientOriginalName();
         DB::table('products')->insert([ 'product_name' => $name,'product_price' => $product_price, 'product_image' => $filename, 'category_row_id' => $categoryId,'product_sku'=>$sku,'product_short_description' => $sd, 'product_long_description' => $ld, 'is_featured' => $isfeatured,'parent_id' => $marchant_id,'product_width' =>$request->product_width,'product_height'=>$request->product_height,'created_at' => date('Y-m-d H:i:s')]);
         return redirect('/add-product.nm');
        
    }

public function addProductSubCategory()
    {
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['categories']= \App\Category::get();
         $data['all_prducts']=\App\Product::orderBy('product_row_id','DESC')->get();
        
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('marchant.add-sub-category',['data'=>$data]);
         return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);
        
         
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postAddProductSubCategory(Request $request)
    {
        $data['categories']= \App\Category::get();
        $name =$request->name;
        $sd=$request->sd;
        $parent_id=Auth::user()->marchant_id;
        
       
            
        //$image_name=$request->cte_image->getClientOriginalName();
         DB::table('sub_categories')->insert([ 'sub_category_name' => $name,'description' => $sd, 'parent_id' => $parent_id]);
          $data['all_category']= DB::table('sub_categories')->get();
          //return view('admin.pages.add-product-category',['data'=>$data]);
          return redirect('/add-sub-category.nm');
          
        
       
    }
     public function deleteProductById(Request $request)
 {
     DB::table('products')->where('product_row_id', $request->product_row_id)->update(['deletion_status'=>1]); 
    
 }
   public function deleteCategoryById(Request $request){
        DB::table('categories')->where('category_row_id', $request->category_row_id)->delete();
  }


   public function updateProductById($id)
    {
       $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['categories']= \App\Category::get();
         $data['prduct_by_id']=\App\Product::get()->where('product_row_id',$id)->First();
         $data['all_orders']= DB::table('orders');
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('marchant.update-product',['data'=>$data]);
         return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);
    }
    public function postUpdateProductById(Request $request)
    {
         $marchant_id=Auth::user()->marchant_id;
        $name =$request->name;
        $sd=$request->sd;
        $ld=$request->ld;
        $isfeatured=$request->isfeatured;
        $product_price= $request->product_price;
        $categoryId =$request->get('categoryid');
        $file = $request->file('product_image');
        //$file1 = $request->file('product_image');
            $destinationPath = public_path(). '/images/products/thumbs/';
            //$destination = public_path(). '/images/products/';
            $filename = $file->getClientOriginalName();
             //$filename1 = $file1->getClientOriginalName();

            $file->move($destinationPath, $filename);
            //$file1->move($destination, $filename1);

           // echo  $filename;
            
        //$image_name=$request->cte_image->getClientOriginalName();
         DB::table('products')->where('product_row_id',$request->product_id)->update([ 'product_name' => $name,'product_price' => $product_price, 'product_image' => $filename, 'category_row_id' => $categoryId,'product_short_description' => $sd, 'product_long_description' => $ld, 'is_featured' => $isfeatured,'parent_id' => $marchant_id,'product_width' =>$request->product_width,'product_height'=>$request->product_height,'created_at' => date('Y-m-d H:i:s')]);
         return redirect('/product-list.nm');
    }
 public function orderDetails() {
         $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['total_orders']= DB::table('orders')->count(DB::raw('DISTINCT created_at'));
             //$data['all_orders']= DB::table('my_orders_table')->get();     
           $order_details='';
          // $data['all_orders']= DB::table('orders')->get();
           $data['abc']=DB::table('orders')->pluck('order_details');
           $sku='NMS'.Auth::user()->marchant_id;
           $data['all_orders']=  DB::table('sells_products_sku') ->where('product_sku', 'like', $sku.'%')->get();
          

         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('marchant.order-details',['data'=>$data]);
         return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);
         
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
