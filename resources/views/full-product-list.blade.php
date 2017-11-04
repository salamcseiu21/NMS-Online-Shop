@include('header')
<br>
<section>

    <div class="container">  
        <div class="row" style="padding:0">
            <div class="col-sm-3" style="margin: 0;padding-left: 13px;">
                <form action="{{url('/')}}/confirm-order" method="post">
                    {{ csrf_field() }}

                    <select class="form-control" id="catergory_dropdown">
                        <option value="0">All</option>
                        @foreach($data1['all_categories'] as $row)
                        <option value="{{$row->category_row_id}}">{{$row->category_name}}</option>
                        @endforeach
                    </select><br>


                </form>
            </div>
            <div class="col-sm-3">
                <form action="{{url('/')}}/confirm-order" method="post">
                    {{ csrf_field() }}

                    <select class="form-control" id="short_by_price">
                        <option value="0">Short By</option>
                        <option value="1">Price Low to High</option>
                        <option value="2">Price  High to Low</option>
                    </select><br>

                </form>
            </div>
            <div class="col-sm-3">
                <form action="{{url('/')}}/confirm-order" method="post">
                    {{ csrf_field() }}

                    <select class="form-control" id="short_by_price_range">
                        
                         <option value="0">Price Range</option>
                         <option value="1">100-500</option>
                        <option value="2">500-1000</option>
                        <option value="3">1000-10000</option>
                        <option value="4">10000-20000</option>
                         <option value="5">20000-Up</option>
                    </select><br>

                </form>
            </div>
            <div class="col-sm-3 text-center">

                TOTAL  {{  $data['all_products']->count()}}+ ITEMS

            </div>
        </div>
        <div class="row">

            <div class="col-sm-3">
              @include('left-sidebar')
            </div>
            <div class="col-sm-9" id="full_product_list">

                @foreach($data['all_products'] as $row)
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
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

$('#catergory_dropdown').change(function () {
    var categoryId = $(this).val();

    $('#full_product_list').empty();

    //call ajax send this selected_district_id
    $.ajax({
        url: "{{ url('product-list-by-id/') }}" + '/' + categoryId,
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#full_product_list").append(data)
        }
    });

});
$('#short_by_price').change(function () {
    var sortVal = $(this).val();

    $('#full_product_list').empty();

    //call ajax send this selected_district_id
    $.ajax({
        url: "{{ url('product-list-by-price/') }}" + '/' + sortVal,
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#full_product_list").append(data)
        }
    });

});

$('#short_by_price_range').change(function () {
    var sortVal = $(this).val();

    $('#full_product_list').empty();

    //call ajax send this selected_district_id
    $.ajax({
        url: "{{ url('product-list-by-price-range/') }}" + '/' + sortVal,
        type: "GET",
        dataType: "html",
        success: function (data) {
            $("#full_product_list").append(data)
        }
    });

});

</script>

@include('footer')