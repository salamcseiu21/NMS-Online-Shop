<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use App\Product;
class ProductController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['products']=\App\Product::get()->where('deletion_status',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['categories']= \App\Category::get();
         $data['all_orders']= DB::table('orders');
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.add-product',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('marchantcontent',$page_content);
         
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $marchant_id=Auth::user()->id;
        $name =$request->name;
        $sd=$request->sd;
        $ld=$request->ld;
        $isfeatured=$request->isfeatured;
        $product_price= $request->product_price;
        $categoryId =$request->get('categoryid');
        $file = $request->file('product_image');
        
            $destinationPath = public_path(). '/images/products/thumbs/';
         
            $filename = $file->getClientOriginalName();
     

            $file->move($destinationPath, $filename);
    
            $product_no=\App\Product::get()->max('product_row_id')+1;
            $sku='NMS'.Auth::user()->id.'A'.$request->get('categoryid').$product_no;
            $product=new Product;

            $product->product_name=$name;
            $product->product_price=$product_price;
            $product->product_image=$filename;
            $product->category_row_id=$categoryId;
            $product->product_short_description=$sd;
            $product->product_long_description=$ld;
            $product->is_featured=$isfeatured;
            $product->parent_id=$marchant_id;
            $product->product_width=$request->product_width;
            $product->product_height=$request->product_height;
            $product->product_sku=$sku;
            $product->save();

         return redirect('admin/add-product');
        
       
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
