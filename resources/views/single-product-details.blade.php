@include('header')
<br>
<section style="width: 100%;background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                 <div class="container">
    
      <div class="row">
           
     <div class="col-md-5" style="padding: 0px;margin: 0;">
        
         <div class="panel-body" style="font-weight: bold;">
             <div class="row">
                 <div class="col-sm-3">
                       <a href="{{asset("/")}}shop/{{$data["artisan"]->merchant_id}}" title="{{$data["artisan"]->shop_name}}"> <img src="{{asset("/public/images/merchants")}}/{{$data["artisan"]->shop_image}}"  style="width:100px;height: 110px;" alt="Image" /></a>
                 </div>
                 <div class="col-sm-9" style="margin: 0;padding:0;">
                     &nbsp; <p style="text-transform: uppercase;margin: 0;padding:0;">{{$data["artisan"]->shop_name}}</p>
                      <a href="#" class="btn">{{$data["artisan"]->shop_category}}</a>
                 </div>
             </div>
          
           
        </div>
         
     </div>
       <div class="col-md-7">
           
        
      </div> 
        
         </div>
  </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    
                    <div class="col-sm-10">
                          @foreach($data['all_products_by_category_id']->slice(0,4) as $row)
        <div class="col-sm-3" style="margin: 0;padding:0 5px">
            <div class="panel-body text-center" style="background-color: white">
               
                <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:100px;height: 110px;" alt="Image">
                </a>  
            </div>

        </div>
        @endforeach
                    </div>
        <div class="col-sm-2" style="background-color: white;height: 125px;margin-top: 15px;">
            <div class="text-center" style="border:1px solid palegoldenrod;height: 110px;width: 100px;padding-top:40px">
                            {{$data['all_products_by_category_id']->Count()}} + Items
                        </div>
                        
                    </div>
                </div>
       
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
         <div class="row" style="padding: 5px">

    <div class="col-md-5" style="padding-left:10px;padding-top: 30px">
        <div class="panel-body" style="padding:10px;background-color: white;">
            <a href="#" title="{{$data["product_detals_by_Id"]->product_name}}"> <img  data-toggle="modal" data-target="#myModal" src="{{asset("/public/images/products/thumbs")}}/{{$data["product_detals_by_Id"]->product_image}}"  style="width:250px;height: 290px;" alt="Image" /></a>
        </div>
        <br>
       
        <div class="panel-body" style="padding:10px;background-color: white;">
            <div class="row">
                <div class="col-sm-5">
                     <label>PRODUCT DESCRIPTION</label><br>
                  {{$data["product_detals_by_Id"]->product_name}}
                </div>
                <div class="col-md-7" style="padding-top: 30px;padding-left: 0">
                   
                </div>
            </div>
             
        </div>
        <br>
         <div class="panel-body" style="padding:10px;background-color: white;">
            <div class="row">
                <div class="col-sm-5">
                     <label>ABOUT MERCHANT</label><br>
                  
            <a href="{{asset("/")}}merchants-details/{{$data["artisan"]->merchant_id}}" title="{{$data["artisan"]->merchant_name}}"> <img src="{{asset("/public/images/merchants")}}/{{$data["artisan"]->merchant_image}}"  style="width:100px;height: 110px;" class="img-circle" alt="Image" /></a>
                </div>
                <div class="col-md-7" style="padding-top: 30px;padding-left: 0">
                    <label>{{$data["artisan"]->merchant_name}}</label><br>
                     {{$data["artisan"]->about_merchant}}
                </div>
            </div>
             
        </div>
         
    </div>
    <div class="col-md-7" style="padding-top:30px;padding-right: 24px">
        <table class="table table-bordered" style="background-color: white">
            <tr>
                <td>
                    <p style="font-size: 15px;padding:0;"> <label> {{$data["product_detals_by_Id"]->product_name}}</label><br>
                        NMS CODE : {{$data["product_detals_by_Id"]->product_sku}} <br>
                        PRICE : {{$data["product_detals_by_Id"]->product_price}} Tk
                    </p>        
                    <form action="{{url('/')}}/addToCart" method="post">
                        {{ csrf_field() }}
                        <label>Quantity</label>
                        <input type="number" name="quantity" value="1" class="form-control" style="width: 160px;"/>
                        <input type="hidden" name="product_row_id" value="{{$data["product_detals_by_Id"]->product_row_id}}"/><br>
                        <input type="submit" name="submit" value="Add to Cart" class="btn btn-cart" style="background-color: darkcyan;color: white;padding-top: 5px;" />
                    </form>
                </td>
            </tr>
        </table>
        <table class="table table-bordered" style="background-color: white">
            <tr>
                <td>
                    <label>
                        PRODUCT'S OVERVIEW
                    </label>
                    <br>
                    {{$data["product_detals_by_Id"]->product_short_description}}<br/>

                </td>
            </tr>
        </table>
        <div class="row"  style="background-color: white;margin: 0;padding: 0">
            <div class="col-sm-3" style="padding: 20px"> 
                <label>ABOUT SHOP</label>
                <br>
                  <a href="{{asset("/")}}shop/{{$data["artisan"]->merchant_id}}" title="{{$data["artisan"]->shop_name}}"> <img src="{{asset("/public/images/merchants")}}/{{$data["artisan"]->shop_image}}"  style="width:100px;height: 110px;" alt="Image" /></a>
                
            </div>
            <div class="col-sm-9" style="margin-top: 50px;padding-left: 0;padding-bottom: 20px">
                <label>{{$data["artisan"]->shop_name}}</label> <br>
                <i class="fa fa-location-arrow"></i> {{$data["artisan"]->shop_location}}<br><br>
                  {{$data["artisan"]->about_shop}}
            </div>
        </div>
        
    </div> 


</div>
<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{$data['product_detals_by_Id']->product_name}}</h4>
            </div>
            <div class="modal-body">
                <img  data-toggle="modal" data-target="#myModal" src="{{asset('/public/images/products')}}/{{$data['product_detals_by_Id']->product_image}}" class="img-responsive" style="width:100%" alt="Image">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
    </div>
   
</section>
<section style="padding:0px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold">Related Products</h3>
</section>
<section>
    <div class="container">
        <div class="row">
 <div id="slider-carousel-related" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active" style="padding:15px 30px">
                            <div class="col-sm-12">


                <div class="row">
                                    @foreach($data['all_products_by_category_id']->slice(0,4) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                   
                                          <div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a  href="{{asset("/")}}product-details/{{$row->product_row_id}}" title="{{$row->product_name}}"> 

                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:170px;height: 200px;" alt="Image">
                                </a>
                                <h2 style="margin:0;padding: 7px">{{$row->product_price}} Tk</h2>
                                <p style="margin:0;padding-bottom: 7px">{{$row->product_name}}</p>

                            </div>

                        </div>
                    </div>

                                        
                                    </div>
                                    @endforeach

                                </div>




                            </div>
                        </div>
                     
                        <div class="item" style="padding:15px 30px">
                              <div class="col-sm-12">


                <div class="row">
                        
                                    @foreach($data['all_products_by_category_id']->take(-4) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                        
                
                                          <div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <a  href="{{asset("/")}}product-details/{{$row->product_row_id}}" title="{{$row->product_name}}"> 

                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:170px;height: 200px;" alt="Image">
                                </a>
                                <h2 style="margin:0;padding: 7px">{{$row->product_price}} Tk</h2>
                                <p style="margin:0;padding-bottom: 7px">{{$row->product_name}}</p>

                            </div>

                        </div>
                    </div>

                                     
                                    </div>
                                    @endforeach

                                </div>




                            </div>
                        </div>

                    </div>

     <a href="#slider-carousel-related" class="left control-carousel hidden-xs" data-slide="prev" style="margin: 0;padding:0;">
                         <i class="fa fa-arrow-circle-o-left" style="font-size:30px;margin-top:0"></i>
                    </a>
                    <a href="#slider-carousel-related" class="right control-carousel hidden-xs" data-slide="next" style="margin: 0;padding:0;">
                         <i class="fa fa-arrow-circle-o-right" style="font-size:30px;margin-top:0"></i>
                    </a>
                </div>
   

</div>
    </div>
</section>
<section style="padding:15px 20px">
    <p class="text-center"><a href="{{ url('/') }}/product-list"  class="btn btn-default" style="background-color: #63C6A7;color: white;border-radius: 20px;text-transform: uppercase;font-weight: bold">MORE PRODUCTS</a></p>
</section>
@include('footer')