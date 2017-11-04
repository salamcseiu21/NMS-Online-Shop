<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        session()->forget('super_admin');
        return view('superadmin.pages.super-admin-login');
    }
    public function postlogin(Request $request)
    {
        $super_admin_existing = DB::table('super_admin')->where([ ['email', $request->email], ['password', $request->password] ])->first();
        
        if($super_admin_existing)
        {
             session(['super_admin' => $request->email]);
             return redirect('/super-admin'); 
           
        }
       else{
       
       return redirect('/super-log-in'); 
       }
    }
    public function welcome()
    {
        if(session()->get('super_admin')!=null)
        {
            //DB::table('tablename')->distinct('name')->count('name');
            //$count = DB::table('orders')->count(DB::raw('DISTINCT tracking_number'));
          $data['all_orders']= DB::table('orders')->where('order_status','=','0')->get();
         // $data_content=view('superadmin.pages.show-data',['data'=>$data]);
          
 
          return view('superadmin.pages.super-admin-home',['data'=>$data]);
        }
          else
          {
               return redirect('/super-log-in'); 
          }
    }
     public function orderdetails() {
         
         
          if(session()->get('super_admin')!=null)
        {
            $data['total_orders']= DB::table('orders')->count(DB::raw('DISTINCT created_at'));
                  $data['all_orders']= DB::table('orders')->get();  
                  // $data_content=view('superadmin.pages.show-data',['data'=>$data]);
                 return view('superadmin.pages.order-details',['data'=>$data]);
        }
          else
          {
               return redirect('/super-log-in'); 
          }
         
		
		 
	}
        
        public function logout()
        {
             return redirect('/super-log-in'); 
        }

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
