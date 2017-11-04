
@include('header')
<br>
<section>
   
  <div class="row">
     <div class="container">   
      @foreach($data['all_products_by_category_id'] as $row)
     <div class="col-sm-3" style="margin: 0;padding: 0;">

                    <div class="product-image-wrapper" style="background-color: white">
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
    </section>
@include('footer')