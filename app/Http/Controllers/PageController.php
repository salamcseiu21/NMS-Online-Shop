<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      
       $data["product_detals_by_Id"]=\App\Product::where('category_row_id','=',56)->First();
       $data["all_products_by_category_id"]=\App\Product::get()->where('category_row_id','=',56);
       $data["featured_products"]=\App\Product::get()->where('is_featured','=',1);
       $data["products"]=\App\Product::get()->where('deletion_status',0);
       $data["all_categories"]= \App\Category::get();
       $data["all_artisans"]= DB::table('merchants')->get();
       $data["artisans"]=DB::table('merchants')->where('is_featured', '=',1)->get();
       return view('welcome',['data'=>$data]);
    }
    
     public function continueShoping()
    {
       $arr['all_products']= \App\Product::get();
      //$arr['custom_value']=0;
       $arr1['all_categories']= \App\Category::get();
       return view('full-product-list',['data'=>$arr],['data1'=>$arr1]);
    }
     public function productlistbyCategoryId($category_id)
    {
         $products="";
         if($category_id!=0)
         {
             $products=\App\Product::get()->where('category_row_id','=',$category_id);
         }
         else if($category_id==0)
         {
             $products=\App\Product::get();
         }
          //$data["all_products_by_category_id"]= 
       
           $str = '';
		 foreach($products as $row) 
		 {  
                  $str .= '<div class="col-sm-3" style="margin: 0;padding:5px;">'.
                          '<div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">'.
                          '<div class="single-products">'.
                          '<div class="productinfo text-center">'.
                          '<a href="'.asset('/').'product-details/'.$row->product_row_id.'" title="'.$row->product_name.'"><img src=" ' . asset('/public/images/products/thumbs').'/'. $row->product_image . ' "  style="width:200px;height: 200px;" alt="Image"></a>'.
                          '<h2 style="margin:0;padding: 7px">'.$row->product_price.' Tk</h2>'.
                          '<p style="margin:0;padding-bottom: 7px">'.$row->product_name.'</p>'.
                          '</div></div></div></div>';
				 
	    }
		echo $str;
       
       
      // return view('full-product-list',['data'=>$data]);
    }
    
    
    public function productListByPrice($sortid)
    {
         $products="";
          if($sortid==0){
              $products=\App\Product::get();
         }
         else if($sortid==1)
         {
             $products=\App\Product::orderBy('product_price')->get();
         }
         else if($sortid==2)
         {
             $products=\App\Product::orderBy('product_price', 'DESC')->get();
         }
         
        
          //$data["all_products_by_category_id"]= 
       
           $str = '';
		 foreach($products as $row) 
		 {  
                  $str .= '<div class="col-sm-3" style="margin: 0;padding:5px;">'.
                          '<div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">'.
                          '<div class="single-products">'.
                          '<div class="productinfo text-center">'.
                          '<a href="'.asset('/').'product-details/'.$row->product_row_id.'" title="'.$row->product_name.'"><img src=" ' . asset('/public/images/products/thumbs').'/'. $row->product_image . ' "  style="width:200px;height: 200px;" alt="Image"></a>'.
                          '<h2 style="margin:0;padding: 7px">'.$row->product_price.' Tk</h2>'.
                          '<p style="margin:0;padding-bottom: 7px">'.$row->product_name.'</p>'.
                          '</div></div></div></div>';
				 
	    }
		echo $str;
    }
  public function productListByPriceRange($sortid)
    {
         $products="";
         if($sortid==0){
              $products=\App\Product::get();
         }
         else if($sortid==1){
              $products=\App\Product::get()->where('product_price','>',100)->where('product_price','<',500);
         }
         else if($sortid==2)
         {
            $products=\App\Product::get()->where('product_price','>',500)->where('product_price','<',1000);
         }
         else if($sortid==3)
         {
             $products=\App\Product::get()->where('product_price','>',1000)->where('product_price','<',10000);
         }
         
          else if($sortid==4)
         {
             $products=\App\Product::get()->where('product_price','>',10000)->where('product_price','<',20000);
         }
          else if($sortid==5)
         {
             $products=\App\Product::get()->where('product_price','>',20000);
         }  
          //$data["all_products_by_category_id"]= 
       
           $str = '';
		 foreach($products as $row) 
		 {  
                  $str .= '<div class="col-sm-3" style="margin: 0;padding:5px;">'.
                          '<div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">'.
                          '<div class="single-products">'.
                          '<div class="productinfo text-center">'.
                          '<a href="'.asset('/').'product-details/'.$row->product_row_id.'" title="'.$row->product_name.'"><img src=" ' . asset('/public/images/products/thumbs').'/'. $row->product_image . ' "  style="width:200px;height: 200px;" alt="Image"></a>'.
                          '<h2 style="margin:0;padding: 7px">'.$row->product_price.' Tk</h2>'.
                          '<p style="margin:0;padding-bottom: 7px">'.$row->product_name.'</p>'.
                          '</div></div></div></div>';
				 
	    }
		echo $str;
    }
    public function products_by_category_Id($category_id)
    {
         
             $data["all_products_by_category_id"]=\App\Product::get()->where('category_row_id','=',$category_id);
         

          return view('product_list_by_category_id',['data'=>$data]);
    }
    
    
    
     public function category()
    {
     
    }
   public function test()
    { 
//        $tracking_number = Session::getId();
//        $data = array();
//	 $data['district'] = \App\District::get();
//         $data['upazila'] = \App\Upazila::get();
//	 $data["orders"]=DB::table('temp_orders As To')
//                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
//                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
//                               ->select('p.*', 'To.*')
//                               ->get();
//	 $data['product_total_price'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_total_price');	 
//	// return view('checkout', ['data'=>$data]);   
//        return view('jquery-checkout',['data'=>$data]);
       
      echo 'Face book';
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function product_details($id)
    {
        $product_info=DB::table('products')
                ->where('product_row_id', '=', $id)->First();
         $product_arr['all_products_by_category_id0'] = DB::table('products As p')->where('p.category_row_id','=',$product_info->category_row_id)
                               ->where('p.parent_id','=',$product_info->parent_id)
                               ->get();
        $data["all_products_by_category_id"] = DB::table('products As p')->where('p.category_row_id','=',$product_info->category_row_id)
                               ->where('p.parent_id','=',$product_info->parent_id)
                               ->get();
         $data["artisan"]=DB::table('merchants')->where('merchant_id', '=',$product_info->parent_id)->get()->first();
         $data["ab"]=DB::table('merchants')->where('merchant_id','=',$product_info->parent_id)->get()->First();
         $data["product_detals_by_Id"]=\App\Product::where('product_row_id','=',$id)->First();
         return view('single-product-details',['data'=>$data]);
    }
    public function artisandetails($id)
    {
        $arrartisan['artisan']=DB::table('merchants')->where('merchant_id', '=',$id)->get()->first();
        return view('artisan-details',['data'=>$arrartisan]);
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
    public function categories()
    {
       $arr['all_categories']= \App\Category::get();
       return view('product-categories',['data'=>$arr]);
     
    } 
     public function category_by_id($category_id)
    {
         
       $data["all_products_by_category_id"]= \App\Product::get()->where('category_row_id','=',$category_id);
       $data["product_detals_by_Id"]=\App\Product::where('category_row_id','=',$category_id)->First();
       $data["featured_products"]=\App\Product::get()->where('is_featured','=',1);
       $data["all_categories"]= \App\Category::get();
       $data["artisans"]=DB::table('merchants')->where('is_featured', '=',1)->get();
       return view('welcome',['data'=>$data]);
    }
      public function shop_by_marchant_id($marchent_id)
    {

       $data["shop_info"]=DB::table('merchants')->where('merchant_id', '=',$marchent_id)->get()->First();
       $data["product_by_marchant"]=\App\Product::get()->where('parent_id','=',$marchent_id);
       return view('individual-shop',['data'=>$data]);
    }
    
    public function artisanlist()
    {
       $arrartisan['artisans']=DB::table('merchants')->get();
       return view('full-artisan-list',['artisan'=>$arrartisan]);
       // return view('product-categories');
    } 
     public function about()
    {
        return view('about-us');
    }
     public function contact()
    {
        return view('contact-us');
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
