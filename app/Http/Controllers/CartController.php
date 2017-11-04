<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
		//$this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart($product_row_id) {        
		//echo  date('Y-F/j h:i:s a');
		
        $tracking_number = Session::getId();
			
		$data['product_details'] = DB::table('products')->where('product_row_id', $product_row_id)->first();

	  
	  //$count = DB::table('temp_orders')->where([ ['product_row_id', $product_row_id], ['tracking_number', $tracking_number] ])->count();
		
	
	     DB::table('temp_orders')->insert([ 'product_row_id' => $data['product_details']->product_row_id, 'tracking_number' => $tracking_number, 'product_price' => $data['product_details']->product_price, 'product_qty' => 1, 'product_total_price' => $data['product_details']->product_price, 'created_at' => date('Y-m-d H:i:s'), ]);
		
        
        return redirect('/mycart');                      
       
    }
   public function checkout()
    {
     $tracking_number = Session::getId();
       
     $data = array();
     $data['district'] = \App\District::get();
         $data['upazila'] = \App\Upazila::get();
     $data["orders"]=DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
     $data['product_total_price'] = DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_total_price');   
     return view('jquery-checkout', ['data'=>$data]);   
     
    }
	  public function postAddToCart(Request $request ) {
        
		$product_row_id =$request->product_row_id;
		$new_product_qty = $request->quantity;
        $tracking_number = Session::getId();
			
			$data['product_details'] = DB::table('products')->where('product_row_id', $product_row_id)->first();
	      
		  //$count = DB::table('temp_orders')->where([ ['product_row_id', $product_row_id], ['tracking_number', $tracking_number] ])->count();
			
			$product_existing = DB::table('temp_orders')->where([ ['product_row_id', $product_row_id], ['tracking_number', $tracking_number] ])->first();
		
			if( $product_existing )
			{
				//do update 45
				//$product_existing = DB::table('temp_orders')->where([ ['product_row_id', $product_row_id], ['tracking_number', $tracking_number] ])->first();
				echo $product_qty = $product_existing->product_qty;
				echo'<br>' .  $product_price = $product_existing->product_price;
				
				$product_qty = $product_qty + $new_product_qty;
				
				 DB::table('temp_orders')->where([ ['product_row_id', $product_row_id], ['tracking_number', $tracking_number] ])->update([ 'product_qty' => $product_qty, 'product_total_price' => ($product_price * $product_qty) ]);
			}
			else
			{
				 //assign
				DB::table('temp_orders')->insert([ 'product_row_id' => $data['product_details']->product_row_id, 'tracking_number' => $tracking_number, 'product_price' => $data['product_details']->product_price, 'product_qty' => $new_product_qty, 'product_total_price' => $data['product_details']->product_price * $new_product_qty , 'created_at' => date('Y-m-d H:i:s'), ]);
			}
			
	    $total=DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_qty');
        session(['total_qty' => $total]);
         $temp_order= DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        session(['total_order'=>$temp_order]);
        return redirect('/mycart');                      
       
    }
	
    public function mycart() {
       
       $tracking_number = Session::getId();
       //echo $tracking_number;
       $temp_order= DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();

       				$data['temp_orders']=$temp_order;
	                $data['total_price']=DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get()->sum('product_total_price');  
	                 return view('cart', ['data'=>$data]);   
       				
       			     

    }
       
     public function updateCart(Request $request) 
     {
        $tracking_number = Session::getId();
	    if($request->temp_order_row_id) 
            {
                 $temp_order_row_id_arr = $request->temp_order_row_id;

                 for($i=0; $i<count($temp_order_row_id_arr); $i++) 
                 {                 
                     $product_info = DB::table('temp_orders')->where('temp_order_row_id', $temp_order_row_id_arr[$i])->first();
                     $product_price = DB::table('products')->where('product_row_id', $product_info->product_row_id)->first()->product_price;                       
                     $product_qty_txt_box_name = 'product_qty_' . $temp_order_row_id_arr[$i];
                     $product_qty = $request->$product_qty_txt_box_name;
                    
                     DB::table('temp_orders')->where('temp_order_row_id', $temp_order_row_id_arr[$i])->update([
                      'product_qty'=> $product_qty,
                      'product_total_price'=> ($product_price * $product_qty)
                      ]);
                 }             
            
        }
       $total=DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_qty');
       session(['total_qty' => $total]);
       $temp_order= DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        session(['total_order'=>$temp_order]);
       return redirect('/mycart');                          
     }

   
    public function cartItemDelete(Request $request)
    {
        $tracking_number = Session::getId();  

		if($request->temp_order_row_id) 
		{
			DB::table('temp_orders')->where('temp_order_row_id', $request->temp_order_row_id)->delete(); 
                        $total=DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_qty');
          session(['total_qty' => $total]);
          $temp_order= DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        session(['total_order'=>$temp_order]);
		}
	 
    } 
	
	public function cartItemDeleteAll()
    {
		$tracking_number = Session::getId();  

		if($tracking_number) 
		{
			DB::table('temp_orders')->where('tracking_number', $tracking_number)->delete(); 
                        $total=DB::table('temp_orders')->where('tracking_number', $tracking_number)->where('order_status',0)->sum('product_qty');
          session(['total_qty' => $total]);
          $temp_order= DB::table('temp_orders As To')
                               ->join('products As p', 'To.product_row_id', '=', 'p.product_row_id')
                               ->where('To.tracking_number', $tracking_number)->where('order_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        session(['total_order'=>$temp_order]);
		}
    } 
	
	
	
	
	
	public function getUpazilas($district_id) {
		 $upazillas = DB::table('upazilas')->where('district_id', $district_id)->get();
		 
		 $str = '';
		 foreach($upazillas as $row) 
		 {
			 
			 $str .= "<option value=".$row->id.">".$row->full_name."</option>";
			
			 
		 }
		echo $str;
		
		
		 
	}
    
}
