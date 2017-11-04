<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
class CheckoutController extends Controller
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
      public function __construct() {
		$this->middleware('auth');
       
    }
     
      function confirmOrder(Request $request)
	{
            
         Auth::user()->id;
		 $tracking_number = Session::getId();
		 $tempOrders = DB::table('temp_orders')->where('tracking_number', $tracking_number)->get();
                  $data['product_total_price'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_total_price');
		// retrieve temp orders by tracking number
		        $fname=$request->fname;
                $lname=$request->lname;
                $arr['name']=$fname ." ". $lname;
                $arr['district']=$request->district;
                $arr['upazila']=$request->upazilla;
	            $arr['address']=$request->address;
                $arr['email']=$request->pemail;
                $arr['phone']=$request->pphone;
                $coustomer_address=  json_encode($arr);
                
               
                $shiping['name']=$request->full_name;
                $shiping['mobile']=$request->mobile;
                $shiping['district']=$request->district_shiping;
                $shiping['upazila']=$request->upazilla_shiping;
	            $shiping['address']=$request->shiping_address;
                $shiping_address=  json_encode($shiping);
                
                $payment_info='';
                $order_details[]=array();
               // $product_sku='';
                //$payment_method_id=$request->payment_method;
                
                if($request->payment_method==1)
                {
                     $arr1["payment_method"]='bKash';
                     $arr1["txr_id"]=$request->bkashtrxid;
                       $arr1["payment_id"]=$request->payment_method;
                     $payment_info=json_encode($arr1);
                }
                else if($request->payment_method==2)
                {
                     $arr1["payment_method"]='Cash on Delivery';
                       $arr1["payment_id"]=$request->payment_method;
                      $payment_info=json_encode($arr1);
                }
                else if($request->payment_method==3){
                $arr1["payment_method"]='Credit Card';
                $arr1["payment_id"]=$request->payment_method;
                $arr1["card_no"]=$request->card_no;
                $arr1["card_name"]=$request->card_name;
                $arr1["cw"]=$request->cw;
                $arr1["exp_month"]=$request->exp_month;
                $arr1["exp_year"]=$request->exp_year;
                $payment_info=json_encode($arr1);
                }
                
                foreach (session()->get('total_order')  as $order) {
                    
                    $product=DB::table('products')->where('product_row_id','=',$order->product_row_id)->First();
                    $order_details[] = [
						'product_row_id' => $order->product_row_id,
                        'product_sku'=>$product->product_sku,
                        'product_name'=>$product->product_name,
						'product_price' => $order->product_price,
						'product_qty' => $order->product_qty,
						'product_total_price' => $order->product_total_price,
                                             
				       ];
                   // $product_sku[]=['product_sku'=>$product->product_sku,'qty'=>$order->product_qty];   
                }

                
                $order_detailss =json_encode($order_details);
			
			
			            $insert[]=
                                [
                                    'user_id'=>  Auth::user()->id,
                                    'product_total_price'=>$data['product_total_price'],
                                    'order_details'=>$order_detailss,
                                    'shiping_address'=> $shiping_address,
                                    'payment_method'=>$payment_info
                                    
                                ];
			
		
		
			if(!empty($insert)){
					DB::table('orders')->insert($insert);	
                   // DB::table('sells_products_sku')->insert($product_sku);
				} 
	        DB::table('temp_orders')
            ->where('tracking_number', $tracking_number)
            ->update(['order_status' => 1]);
         
     // $id= DB::table('users')->insertGetId(
      //['name' => $arr['name'], 'email' => $arr['email'],'password'=> md5($arr['phone'])]
   
    //);
     return redirect('/thankyou');
		
		
	}
        
        public function thankyou() {
		//Session::flush();
                session()->forget('total_qty');
                session()->forget('total_order');
                $data["order_id"]=DB::table("orders")->max('order_id');
                
             return view('thanks-message',['data'=>$data]);
		 
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
