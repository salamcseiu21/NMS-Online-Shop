 @include('header')
 <div class="container">
    
      <div class="row">
           
     <div class="col-md-4" style="padding: 0px;margin: 0;">
        
        <div class="panel-body">
           
            <a href="#" title="{{$data['shop_info']->shop_name}}"> <img src="{{asset("/public/images/merchants")}}/{{$data['shop_info']->shop_image}}"  style="width:250px;height: 290px;" alt="Image" /></a>
            </div>
     
     </div>
       <div class="col-md-8">
           <section style="text-align: left;">
               <h3 style="margin: 0;padding: 10px">
                {{$data['shop_info']->shop_name}}
                  
            </h3>
                {{$data['shop_info']->about_shop}}
           </section>
      </div> 
        
         </div>
  </div>
 <section style="padding:0px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold">Our Products</h3>
    <h5 class="text-center" style="text-transform: uppercase;font-weight: bold">This is the houseful of Our Products</h5>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                  <div class="row">
                                    @foreach($data['product_by_marchant'] as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                   
                                                                                                       <div class="product-image-wrapper" style="border-style:solid;border-width: 1px;border-color: pink;background-color: white">
										<div class="single-products">
											<div class="productinfo text-center">
												 <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title="{{$row->product_name}}"> 
           
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
</section>
 @include('footer')