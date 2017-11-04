<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;
use App\Category;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    public function __construct() {
		$this->middleware('auth');
       
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
        $data['messages']= DB::table('messages As To')
                               ->join('users As p', 'To.user_id', '=', 'p.id')->where('reply_status',0)
                               ->select('p.*', 'To.*')
                               ->get();
         $data['categories']= \App\Category::get();
         $data['all_prducts']=\App\Product::orderBy('product_row_id','DESC')->get();
         $data['profile_info']= \Illuminate\Foundation\Auth\User::get()->where('id',Auth::user()->id)->First();
         $page_content=view('admin.pages.add-product-category',['data'=>$data]);
         return view('layouts.admin-layout',['data'=>$data])->with('maincontent',$page_content);
        
         
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['categories']= \App\Category::get();
        $name =$request->name;
        $sd=$request->sd;
        $ld=$request->ld;
        $isfeatured=$request->isfeatured;
        $file = $request->file('cte_image');

            $destinationPath = public_path(). '/images/products/thumbs/';
            $filename = $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            $category = new Category;
            $category->category_name=$name;
            $category->category_image=$filename;
            $category->category_short_description=$sd;
            $category->category_long_description=$ld;
            $category->is_featured=$isfeatured;
            $category->save();
            $data['all_category']= \App\Category::orderby('category_row_id','DESC')->get();
            return redirect('admin/add-product-category');
          
        
       
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
