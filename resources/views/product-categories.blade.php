 @include('header')
<section style="padding:30px">
    <h2 class="title text-center" style="margin: 0;">Our Marketplaces</h2>
</section>
 <div class="container">    

        
    
         <div class="row">
      @foreach($data['all_categories'] as $row)
       <div class="col-sm-4" style="margin: 0;padding:5px;">


                                <div class="panel-body text-center" style="background-color: white">



                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->category_image}}"  style="width:250px;height: 250px;" alt="Image">

                                    <div class="row text-left" style="padding-top: 15px">
                                          <a href="{{url('/')}}/product-list-by-id/{{$row->category_row_id}}"> <h3 style="padding-left: 15px;margin: 0;color: darkcyan;text-transform: uppercase;font-weight: bold">{{$row->category_name}}</h3></a>

                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0px;">
                                                    <li><a href="#">Online Help</a></li>
                                                    <li><a href="#">Contact Us</a></li>
                                                    <li><a href="#">Order Status</a></li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-widget">

                                                <ul class="nav nav-pills nav-stacked" style="padding-left: 0;">
                                                    <li><a href="#">T-Shirt</a></li>
                                                    <li><a href="#">Mens</a></li>
                                                    <li><a href="#">Womens</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
      @endforeach
   
  

         </div>
 </div>

  @include('footer')