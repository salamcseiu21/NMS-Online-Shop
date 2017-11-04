<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {
		$this->middleware('auth');
       
    }
    
    public function login()
    {
        session()->forget('admin');
        return view('admin.pages.log-in');
    }
    public function postlogin(Request $request)
    {
        $product_existing = DB::table('admins')->where([ ['admin_email', $request->email], ['admin_password', $request->password] ])->first();
        
        if($product_existing)
        {
             session(['admin' => $request->email]);
             return redirect('admin/admin-panel'); 
           
        }
       else{
       
       return redirect('admin/log-in'); 
       }
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
    public function welcome()
    {
          $data['all_orders']= DB::table('orders');
          return view('admin.pages.admin-home',['data'=>$data]);
    }
    public function adminProfile()
    {
      $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['all_orders']= DB::table('orders');
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.admin-profile',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
    }

    public function sendMessage()
    {

        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();


        $data['users']=\App\User::get();
        $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
        //$data['messages']=DB::table('messages')->get();
         $page_content=view('admin.pages.messages',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
    }
    public function replayMessage(Request $request)
    {

      DB::table('messages')->where('id',$request->message_id)->update(['replay_message'=>$request->replymessage,'reply_status'=>1,'admin_id'=>Auth::user()->id]);
      return redirect('admin/messages');
    }
    public function sendMail()
  {
    $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
       $data['users']=\App\User::get();
        $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.send-mail',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
  }    /**
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
         $page_content=view('admin.pages.update-product',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
    }
    public function updateCategoryById($id){
      $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['category_by_id']= \App\Category::get()->where('category_row_id',$id)->First();
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.update-category',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
    }
    public function postUpdateCategoryById(Request $request)
    {
        $name =$request->name;
        $sd=$request->sd;
        $ld=$request->ld;
        $isfeatured=$request->isfeatured;
        //$image= $request->file('cte_image');
        
         $file = $request->file('cte_image');

            $destinationPath = public_path(). '/images/products/thumbs/';
            $filename = $file->getClientOriginalName();

            $file->move($destinationPath, $filename);

           // echo  $filename;
            
        //$image_name=$request->cte_image->getClientOriginalName();
          DB::table('categories')->where('category_row_id',$request->category_id)->update([ 'category_name' => $name, 'category_image' => $filename, 'category_short_description' => $sd, 'category_long_description' => $ld, 'is_featured' => $isfeatured, 'created_at' => date('Y-m-d H:i:s')]);
          $data['all_category']= \App\Category::orderby('category_row_id','DESC')->get();
          return redirect('/admin/category-list');
    }
public function userList()
    {
       $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
       $data['all_categories']= \App\Category::get();
       $data['users']=\App\User::get();
       $page_content=view('admin.pages.user-list',['data'=>$data]);
       return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdateProductById(Request $request)
    {
        $marchant_id=Auth::user()->id;
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
         return redirect('/admin/product-list');
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
     public function orderDetails() {
      $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
             $data['total_orders']= DB::table('orders')->count(DB::raw('DISTINCT created_at'));
             //$data['all_orders']= DB::table('my_orders_table')->get();     

            $data['all_orders']= DB::table('orders As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')
                               ->select('p.*', 'To.*')
                               ->get();


         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.order-list',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
         
        
 }
 
 public function fullProductList() {
  $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        $data["products"]=\App\Product::get();
        $data["all_categories"]= \App\Category::get();
        $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.product-list',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
 }
 public function fullCategoryList(){
  $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
       $data['all_categories']= \App\Category::get();
       $page_content=view('admin.pages.category-list',['data'=>$data]);
       return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
 }

 public function productInStock()
 {
  $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
       $data['all_categories']= \App\Category::get();
   $page_content=view('admin.pages.stock-product-list',['data'=>$data]);
       return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
 }
 public function deleteProductById(Request $request)
 {
     DB::table('products')->where('product_row_id', $request->product_row_id)->delete(); 
    
 }
   public function deleteCategoryById(Request $request){
        DB::table('categories')->where('category_row_id', $request->category_row_id)->delete();
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
                  $str .= '<div class="row">'.
                          '<div class="col-sm-2"><img class="img-responsive" src=" '. asset('/public/images/products/thumbs').'/'.$row->product_image. ' " height="70" width="100"></div>'.
                          '<div class="col-sm-4">
			<h4 class="product-name"><strong>'.$row->product_name.'</strong></h4><h4><small>'.$row->product_short_description.'</small></h4></div>'.
                          '<div class="col-sm-6">'.
                          '<div class="col-sm-6 text-right">
								<h6><strong>'.$row->product_price.' Tk</strong></h6>
							</div>'.
                          '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">'.
                                                               '<a href="javascript:void(0)" product_row_id="'.$row->product_row_id.'" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a>
                                                            </div>
                  
							</div>'.
                                                         '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">
                                                                <a href="'.asset('/').'update-product/'.$row->product_row_id.'"/><span class="glyphicon glyphicon-edit"></span></a>
                                                            </div>
                     
							</div>'.
                          '</div>
					</div>';
                          
				 
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
                  $str .= '<div class="row">'.
                          '<div class="col-sm-2"><img class="img-responsive" src=" '. asset('/public/images/products/thumbs').'/'.$row->product_image. ' " height="70" width="100"></div>'.
                          '<div class="col-sm-4">
			<h4 class="product-name"><strong>'.$row->product_name.'</strong></h4><h4><small>'.$row->product_short_description.'</small></h4></div>'.
                          '<div class="col-sm-6">'.
                          '<div class="col-sm-6 text-right">
								<h6><strong>'.$row->product_price.' Tk</strong></h6>
							</div>'.
                          '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">'.
                                                               '<a href="javascript:void(0)" product_row_id="'.$row->product_row_id.'" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a>
                                                            </div>
                  
							</div>'.
                                                         '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">
                                                                <a href="javascript:void(0)" product_row_id="'. $row->product_row_id.'" class="update-item"/><span class="glyphicon glyphicon-edit"></span></a>
                                                            </div>
                     
							</div>'.
                          '</div>
					</div>';
                          
				 
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
                  $str .= '<div class="row">'.
                          '<div class="col-sm-2"><img class="img-responsive" src=" '. asset('/public/images/products/thumbs').'/'.$row->product_image. ' " height="70" width="100"></div>'.
                          '<div class="col-sm-4">
			<h4 class="product-name"><strong>'.$row->product_name.'</strong></h4><h4><small>'.$row->product_short_description.'</small></h4></div>'.
                          '<div class="col-sm-6">'.
                          '<div class="col-sm-6 text-right">
								<h6><strong>'.$row->product_price.' Tk</strong></h6>
							</div>'.
                          '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">'.
                                                               '<a href="javascript:void(0)" product_row_id="'.$row->product_row_id.'" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a>
                                                            </div>
                  
							</div>'.
                                                         '<div class="col-sm-2">
								
                                                            <div style="padding: 7px">
                                                                <a href="javascript:void(0)" product_row_id="'. $row->product_row_id.'" class="update-item"/><span class="glyphicon glyphicon-edit"></span></a>
                                                            </div>
                     
							</div>'.
                          '</div>
					</div>';
                          
				 
	    }
		echo $str;
    }
}