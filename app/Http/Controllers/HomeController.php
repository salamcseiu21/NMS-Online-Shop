<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["product_detals_by_Id"]=\App\Product::where('category_row_id','=',56)->First();
       $data["all_products_by_category_id"]=\App\Product::get()->where('category_row_id','=',56);
       $data["featured_products"]=\App\Product::get()->where('is_featured','=',1);
       $data["all_categories"]= \App\Category::get();
       $data["artisans"]=DB::table('merchants')->where('is_featured', '=',1)->get();
       return view('home',['data'=>$data]);
    }
   public function logout() {
       Auth::logout();
  return redirect('/login');
 }
}
