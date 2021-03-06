
@include('header')
<section>
    <div class="container">
        <div class="row" style="padding-right: 30px">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active" style="padding:15px 30px">
                            <div class="col-sm-12">


                                <div class="row">
                                    <img src="{{asset('/public/AdminAssets/images/home/image -3.jpg')}}" alt="" />

                                </div>


                            </div>
                        </div>

                        <div class="item" style="padding:15px 30px">
                            <div class="col-sm-12">


                                <div class="row">

                                    <img src="{{asset('/public/AdminAssets/images/home/image-2.jpg')}}" alt="" />

                                </div>




                            </div>
                        </div>
                        <div class="item" style="padding:15px 30px">
                            <div class="col-sm-12">


                                <div class="row">

                                    <img src="{{asset('/public/AdminAssets/images/home/image-1.jpg')}}" alt="" />

                                </div>




                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-arrow-circle-o-left" style="font-size:30px;margin-left: 100px"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-arrow-circle-o-right" style="font-size:30px;margin-right:50px"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section style="padding:0 40px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold">Spread some happiness-shop today!</h3>
    <h5 class="text-center" style="text-transform: uppercase;font-weight: bold">Here are a few of our most popular items this week</h5>
</section>

<section id="slider"  style="padding:0"><!--slider-->
    <div class="container">
       <div class="row">
    <div class="col-sm-12" id="fetured_product_list">
        <div id="slider-carousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="padding: 30px;">
                    <div class="col-sm-5">
                        <div class="row">
                          
                            <div class="panel-body text-center" style="background-color: white;height: 490px">
                                  <img src="{{asset("/public/images/products/")}}/{{$data['product_detals_by_Id']->product_image}}"  class="img-responsive" alt="Image">
                             <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            @foreach($data['all_products_by_category_id'] as $row)
                            <div class="col-sm-4" style="margin: 0;padding:0 5px">


                                <div class="panel-body text-center" style="background-color: white">

                                    <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                                        <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:110px;height: 170px;" alt="Image">
                                   </a>    <div class="row" style="margin-top:20px;padding: 0">
                                       <div class="col-sm-6" style="padding-left:0">{{$row->product_name}}</div>
                                            <div class="col-sm-6">{{$row->product_price}} Tk</div>
                                              
                                                </div>
                                </div>
                                <div style="height: 10px">
                                   
                                 
                                   
                                </div>
                            </div>
                            @endforeach

                        </div>




                    </div>
                </div>
                <div class="item" style="padding: 30px">
                    <div class="col-sm-5">
                        <div class="row">
                          
                            <div class="panel-body text-center" style="background-color: white;height: 490px">
                                  <img src="{{asset("/public/images/products/")}}/{{$data['product_detals_by_Id']->product_image}}"  class="img-responsive" alt="Image">
                        <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-sm-7">


                        <div class="row">
                            @foreach($data['all_products_by_category_id'] as $row)
                            <div class="col-sm-4" style="margin: 0;padding:0 5px;">


                                <div class="panel-body text-center" style="background-color: white">

                                    <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                                        <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:110px;height: 170px;" alt="Image">
                                    </a>  <div class="row" style="margin-top:20px;padding: 0">
                                        <div class="col-sm-6" style="padding-left: 0">{{$row->product_name}}</div>
                                            <div class="col-sm-6">{{$row->product_price}} Tk</div>
                                              
                                                </div>
                                </div>
                                <div style="height: 10px">
                                   
                                 
                                   
                                </div>

                            </div>
                            @endforeach

                        </div>




                    </div>
                </div>

                <div class="item" style="padding: 30px">
                     <div class="col-sm-5">
                        <div class="row">
                          
                            <div class="panel-body text-center" style="background-color: white;height: 490px">
                                  <img src="{{asset("/public/images/products/")}}/{{$data['product_detals_by_Id']->product_image}}"  class="img-responsive" alt="Image">
                        <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-sm-7">


                        <div class="row">
                            @foreach($data['all_products_by_category_id'] as $row)
                            <div class="col-sm-4" style="margin: 0;padding:0 5px;">


                                <div class="panel-body text-center" style="background-color: white">

                                    <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                                        <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:110px;height: 170px;" alt="Image">
                                    </a>
                                     <div class="row" style="margin-top:20px;padding: 0">
                                              <div class="col-sm-6">{{$row->product_name}}</div>
                                            <div class="col-sm-6">{{$row->product_price}} Tk</div>
                                              
                                                </div>
                                </div>
                                <div style="height: 10px"></div>

                            </div>
                            @endforeach

                        </div>




                    </div>
                </div>

            </div>

            <a href="#slider-carousel1" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-arrow-circle-o-left" style="font-size:30px"></i>
            </a>
            <a href="#slider-carousel1" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-arrow-circle-o-right" style="font-size:30px"></i>
            </a>
        </div>

    </div>
</div>
    </div>
</section><!--/slider-->
<section style="padding:0px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold">Featured Products</h3>
    <h5 class="text-center" style="text-transform: uppercase;font-weight: bold">This is the houseful of all Products</h5>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel-featured" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active" style="padding:15px 30px">
                            <div class="col-sm-12">


                <div class="row">
                                    @foreach($data['featured_products']->slice(0, 8) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                   
                                            <div class="panel-body text-center" style="background-color: white">

                                                <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:200px;height: 200px;" alt="Image">
                                                </a><br>
                                                  <div class="row" style="margin-top:50px;">
                                                    <div class="col-sm-6">Price:{{$row->product_price}} Tk</div>
                                                   <div class="col-sm-6"><a href="{{asset("/")}}product-details/{{$row->product_row_id}}">BUY NOW</a></div>
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
                        
                                    @foreach($data['featured_products']->take(-8) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                        

                                        <div class="panel-body text-center" style="background-color: white">

                                                <a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title=" {{$row->product_name}}"> 

                                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:200px;height: 200px;" alt="Image">
                                                </a><br>
                                                <div class="row" style="margin-top:50px">
                                                    <div class="col-sm-6">Price:{{$row->product_price}} Tk</div>
                                                    <div class="col-sm-6"><a href="{{asset("/")}}product-details/{{$row->product_row_id}}">BUY NOW</a></div>
                                                </div>
                                                
                                               
                                            </div>

                                     
                                    </div>
                                    @endforeach

                                </div>




                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel-featured" class="left control-carousel hidden-xs" data-slide="prev">
                         <i class="fa fa-arrow-circle-o-left" style="font-size:30px"></i>
                    </a>
                    <a href="#slider-carousel-featured" class="right control-carousel hidden-xs" data-slide="next">
                         <i class="fa fa-arrow-circle-o-right" style="font-size:30px"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section style="padding:15px 20px">
    <p class="text-center"><a href="{{ url('/') }}/product-list"  class="btn btn-default" style="background-color: #63C6A7;color: white;border-radius: 20px;text-transform: uppercase;font-weight: bold">MORE PRODUCTS</a></p>
</section>
<section style="padding:0 30px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold;padding-top: 0;margin: 0">Explore THe NMS Marketplace</h3>
    <h5 class="text-center" style="text-transform: uppercase;font-weight: bold">your hunt for global treasures starts here</h5>
</section>
<section>

    <div class="container">
       <div class="row">
    <div class="col-sm-12">
        <div id="slider-carousel-featured" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="padding: 30px">
                    <div class="col-sm-12">


                        <div class="row">

                            @foreach($data['all_categories']->slice(0,3) as $row)
                            <div class="col-sm-4" style="margin: 0;padding:5px;">


                                <div class="panel-body text-center" style="background-color: white">



                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->category_image}}"  style="width:250px;height: 250px;" alt="Image">
                                    <div class="row text-left" style="padding-top: 15px">
                                        <h3 style="padding-left: 15px;margin: 0;color: darkcyan;text-transform: uppercase;font-weight: bold">{{$row->category_name}}</h3>

                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0;">
                                                    <li><a href="#">Online Help</a></li>
                                                    <li><a href="#">Contact Us</a></li>
                                                    <li><a href="#">Order Status</a></li>
                                                    <li><a href="#">Change Location</a></li>
                                                    <li><a href="#">FAQ’s</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0;">
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Mens</a></li>
                                                    <li><a href="#">Womens</a></li>
                                                    <li><a href="#">Gift Cards</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            @endforeach

                        </div>




                    </div>
                </div>



            </div>

        </div>

    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div id="slider-carousel-featured" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="padding: 30px">
                    <div class="col-sm-12">


                        <div class="row">

                            @foreach($data['all_categories']->take(-3) as $row)
                            <div class="col-sm-4" style="margin: 0;padding:5px;">


                                <div class="panel-body text-center" style="background-color: white">



                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->category_image}}"  style="width:250px;height: 250px;" alt="Image">

                                    <div class="row text-left" style="padding-top: 15px">
                                        <h3 style="padding-left: 15px;margin: 0;color: darkcyan;text-transform: uppercase;font-weight: bold">{{$row->category_name}}</h3>

                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0px;">
                                                    <li><a href="#">Online Help</a></li>
                                                    <li><a href="#">Contact Us</a></li>
                                                    <li><a href="#">Order Status</a></li>
                                                    <li><a href="#">Change Location</a></li>
                                                    <li><a href="#">FAQ’s</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0;">
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Mens</a></li>
                                                    <li><a href="#">Womens</a></li>
                                                    <li><a href="#">Gift Cards</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            @endforeach

                        </div>




                    </div>
                </div>



            </div>

        </div>

    </div>
</div>
<br>
    </div>
</section>
<section style="padding:15px 20px">
    <p class="text-center"><a href="{{ url('/') }}/categories"  class="btn btn-default" style="background-color: #63C6A7;color: white;border-radius: 20px;text-transform: uppercase;font-weight: bold">MORE Categories</a></p>
</section>
<section style="background-color: #FF9A66;width: 100%;padding-bottom: 20px">
  <h3 class="text-center" style="color: white;text-transform: uppercase;font-weight: bold;padding-top:25px;margin: 0">Featured Artisans</h3>
    <h5 class="text-center" style="color: white;text-transform: uppercase;font-weight: bold">NMS impacts over 10,000 artisans and their families</h5>
    <div class="container">
         <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel-artisan" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active" style="padding:30px">
                            <div class="col-sm-12">


                <div class="row">
                                    @foreach($data['artisans']->slice(0, 4) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                   
                                             <div class="panel-body text-center" style="background-color: white">

                                                <a href="{{asset("/")}}merchants-details/{{$row->merchant_id}}" title=" {{$row->merchant_name}}"> 

                                                    <img src="{{asset("/public/images/merchants")}}/{{$row->merchant_image}}"  style="width:200px;height: 220px;" alt="Image">
                                                </a><br>
                                                <div class="row" style="margin-top:30px">
                                                      <h2>{{$row->merchant_name}}</h2>  
                                                   <a style="text-transform: uppercase;font-weight: bold;" href="{{asset("/")}}merchants-details/{{$row->merchant_id}}">See story</a>
                                                </div>
                                                
                                               
                                            </div>
                                        
                                    </div>
                                    @endforeach

                                </div>




                            </div>
                        </div>
                     
                        <div class="item" style="padding:30px">
                              <div class="col-sm-12">


                <div class="row">
                        
                                    @foreach($data['artisans']->take(-4) as $row)
                                    <div class="col-sm-3" style="margin: 0;padding:5px;">
                                        

                                        <div class="panel-body text-center" style="background-color: white">

                                                <a href="{{asset("/")}}merchants-details/{{$row->merchant_id}}" title=" {{$row->merchant_name}}"> 

                                                    <img src="{{asset("/public/images/merchants")}}/{{$row->merchant_image}}"  style="width:200px;height: 220px;" alt="Image">
                                                </a><br>
                                                <div class="row" style="margin-top:30px">
                                                      <h2>{{$row->merchant_name}}</h2>  
                                                   <a style="text-transform: uppercase;font-weight: bold;" href="{{asset("/")}}merchants-details/{{$row->merchant_id}}">See story</a>
                                                </div>
                                                
                                               
                                            </div>

                                     
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel-artisan" class="left control-carousel hidden-xs" data-slide="prev">
                         <i class="fa fa-arrow-circle-o-left" style="font-size:30px"></i>
                    </a>
                    <a href="#slider-carousel-artisan" class="right control-carousel hidden-xs" data-slide="next">
                         <i class="fa fa-arrow-circle-o-right" style="font-size:30px"></i>
                    </a>
                </div>

            </div>
        </div>
    </div><br><br>
    <p class="text-center"><a href="{{ url('/') }}/full-artisan-list"  class="btn btn-default" style="color: orange;border-radius: 20px;text-transform: uppercase;font-weight: bold">All Artisans</a></p>
</section>
<section style="padding:0 30px">
    <h3 class="text-center" style="color: green;text-transform: uppercase;font-weight: bold;padding-top: 30px;margin: 0">stay in touch with artists</h3>
    <h5 class="text-center" style="text-transform: uppercase;font-weight: bold">receive exclusive offers & artist/products update!</h5>
 
</section>

        <section id="lab_social_icon_footer" style="margin:0;padding:10px;">
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="text-center center-block" style="font-size:20px">
                    <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                   <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	           
    </div>
</div>
</section>
@include('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
                                                                                
                                                                                $('#electroincs').click(function () {
                                                                                    var districtid = $(this).val();

                                                                                    $('#fetured_product_list').empty();

                                                                                    //call ajax send this selected_district_id
                                                                                    $.ajax({
                                                                                        url: "{{ url('category/') }}" + '/' + districtid,
                                                                                        type: "GET",
                                                                                        dataType: "html",
                                                                                        success: function (data) {
                                      
                                                                                            alert('Ok');
        //$('#upazilla').append(data);
                                                                                        }
                                                                                    });

                                                                                });
                                                                                    
                                                                                
                                                                                


</script>


<style type="text/css"> 
    .intro {
        border:1px solid red;
        border-radius: 5px;
        color: green;
    }  
    
    #lab_social_icon_footer {
  padding: 40px 0;
  background-color: #dedede;
}

#lab_social_icon_footer a {
  color: #333;
}

#lab_social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

#lab_social_icon_footer .social {
  -webkit-transform: scale(0.8);
  /* Browser Variations: */
  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}
/*
    Multicoloured Hover Variations
*/

#lab_social_icon_footer #social-fb:hover {
  color: #3B5998;
}

#lab_social_icon_footer #social-tw:hover {
  color: #4099FF;
}

#lab_social_icon_footer #social-gp:hover {
  color: #d34836;
}

#lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}
</style>
