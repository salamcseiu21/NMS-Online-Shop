<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use Auth;
use Redirect;
use DB;
class ProfileController extends Controller
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
      $id=Auth::user()->user_type;
      //echo "Your Profile information";
      if($id==0)
      {
        $data['users']=\App\User::get()->where('id','>',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['account-info']=  \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $content=view('profile.user-main-content',['data'=>$data]);
         return view('layouts.user-layout',['data'=>$data])->with('usermaincontent',$content);
      }
       elseif ($id==1) {

        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        $data['all_orders']= DB::table('orders')->where('order_status',0)->get();
        $data['users']= \Illuminate\Foundation\Auth\User::all()->where('user_type',0);
        $data['account-info']=  \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
        $page_content=view('marchant.my-profile',['data'=>$data]);
        return view('layouts.marchant-layout',['data'=>$data])->with('marchantcontent',$page_content);

          
      }
         else{
         $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
        $data['all_orders']= DB::table('orders')->where('order_status',0)->get();
        $data['users']= \Illuminate\Foundation\Auth\User::all();
        $data['account-info']=  \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
        $page_content=view('profile.main-content',['data'=>$data]);
        return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
         }
	
    }
    public function myProfile() {
         $data['users']=\App\User::get()->where('id','>',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
        $data['account-info']=  \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
        $data['my-orders']=DB::table('orders')->where('id',Auth::user()->id);
        $page_content=view('profile.my-profile',['data'=>$data]);
        //$content=view('layouts.admin_app');
        return view('layouts.user-layout',['data'=>$data])->with('content',$page_content);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myOrder() {
        $data['users']=\App\User::get()->where('id','>',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
        $data['my-orders']=DB::table('orders')->where('user_id',Auth::user()->id)->get();
        $page_content=view('profile.my-order',['data'=>$data]);
        return view('layouts.user-layout',['data'=>$data])->with('content',$page_content);
    }
    public function create()
    {
        //
    }
    public function changePassword() {
        $data['users']=\App\User::get()->where('id','>',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
         $page_content=view('profile.change-password');
         return view('layouts.user-layout',['data'=>$data])->with('content',$page_content);
    }

    public function sendMessage()
    {
        $data['users']=\App\User::get()->where('id','>',0);
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
         $page_content=view('profile.send-message',['data'=>$data]);
         return view('layouts.user-layout',['data'=>$data])->with('content',$page_content);
    }
    public function postSendMessage(Request $request)
    {
        $user_id=Auth::user()->id;
        $user_type=Auth::user()->user_type;
        $subject=$request->subject;
        $message=$request->message;
    
        DB::table('messages')->insert([ 'user_id' => $user_id,'subject' => $subject, 'message' => $message]);
        return redirect('/send-message.user');
    }
    public function viewMessage()
    {
           //$data['messages']=DB::table('messages')->where('user_type','>',0)->where('receiver_id',Auth::user()->id)->get();
           
          $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',1)->where('user_id',Auth::user()->id)
                               ->select('p.*', 'To.*')
                               ->get();
          $data['users']=\App\User::get()->where('id','>',0);
                               

         $page_content=view('profile.view-message',['data'=>$data]);
         return view('layouts.user-layout',['data'=>$data])->with('content',$page_content);
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
