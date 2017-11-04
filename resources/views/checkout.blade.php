 
@include ('header');
<div class="container">
     <form method="post" action="confirmOrder">
        {!! csrf_field() !!} <!-- this is a helper method =input typr=hidddden, name="". value=""--> 
        <div class="panel panel-info" style="margin: 0;padding: 0;">
            <div class="panel panel-heading text-center" style="margin: 0;padding: 10px;" >CHECKOUT</div>
    <div class="panel panel-body" style="margin: 0;padding: 0;border: none;">
   
    <div class="panel-group" id="accordion">
        <div class="panel panel-default" style="border-radius: 0;">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Order Details</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="row">

                        <div class="col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h4 class="text-center">Your Order Details </h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-primary btn-sm btn-block" style="border-radius: 5px">
                                                    <span class="glyphicon glyphicon-share-alt"></span> 
                                                    <a href="{{ url('/') }}/mycart" style="color: white;" /> 
                                                    Update Cart </a>		
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                     @if(session()->get('total_order') !=null )
                                     @foreach(session()->get('total_order') as $temp_order)	
                                    <div class="row" id="cart-item-{{ $temp_order->temp_order_row_id }}">
                                        <div class="col-sm-2"><img class="img-responsive" src="{{asset("/public/images/products/thumbs")}}/{{$temp_order->product_image}}" height="70" width="100">
                                        </div>
                                        <div class="col-sm-4">
                                            <h4 class="product-name"><strong>{{ $temp_order->product_name }}</strong></h4><h4><small>{{ $temp_order->product_short_description}}</small></h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-8 text-right">
                                                <h6><strong>{{ $temp_order->product_price }}<span class="text-muted"> x </span></strong>{{ $temp_order->product_qty }} =</h6>
                                            </div>
                                            <div class="col-sm-4">


                                                <input type="text" readonly="true" class="form-control" name="product_qty_{{ $temp_order->temp_order_row_id }}" value="{{ $temp_order->product_price*$temp_order->product_qty}}" /> 
                                                &nbsp;
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="temp_order_row_id[]" value="{{ $temp_order->temp_order_row_id }}" />	
                                    @endforeach
                                    @endif
                                    <div class="row cart-content">
                                        <div class="text-center">
                                            <div class="col-sm-6"></div>

                                            <div class="col-sm-5">

                                                <h4 class="text-right">Total: <strong>{{ $data['product_total_price'] }} Tk</strong></h4>
                                            </div><div class="col-sm-1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
  </div>
  <div class="panel panel-default"  style="border-radius: 0;">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Address Details</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
            <div id="address_details" class='row' >

               <div class="col-sm-6">

                 
                     <a href="{{ route('login') }}"> <i class="fa fa-lock"></i>Login</a>
                   


               </div>
            <div class="col-sm-6">
                <h3 class="text-center">Shipping Address</h3>
                First name:<br>
                <input type="text"  name="sfname" value="Noyon" class="form-control"><br>
                Last name:<br>
                <input type="text"  name="slname" value="Miah" class="form-control"><br>
                District: 

                <select id ="district_shiping" class="form-control" name="district_shiping"> 
                    <option>Seelct district</option>

                    @foreach( $data['district'] as $ditrict)
                    <option value="{{ $ditrict->id }}">{{ $ditrict->full_name }}</option>
                    @endforeach

                </select>


                Upazilla: 
                <select id="upazilla_shiping" class="form-control" name="upazilla_shiping"> 
                    <option>Seelct Upazilla</option>


                </select>

                Address:<br>

                <textarea name="shiping_address" cols="40" rows="5" class="form-control"></textarea><br>

            </div>

        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default"  style="border-radius: 0;">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Payment Method</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
               <div id="payment_method_details" class='row'>
            <div class="panel panel-info">

                <div class="panel panel-heading text-center">Payment Method</div>

                <div class="panel panel-body">
                    
                    <div class="row">
                        <div class="col-sm-6">

                             <input type="radio" name="payment_method" value="1" id="bKash"> bkash
                             <div id="bKashdiv">
                         Transaction Id:<input type="text" name="bkashtrxid" placeholder="Enter your transaction id" class="form-control"><br>
                       </div>
                    <input type="radio" name="payment_method" value="2" id="cashondelivery"> Cash On Delivery<br>
                        </div>
                        <div class="col-sm-6">
                             <input type="radio" name="payment_method" value="3" id="creditcard"> Credit Card
                               <div>
                        Card Number:<input type="text" name="card_no" placeholder="Card No" class="form-control"><br>
                        Card Hosting  Name:<input type="text" name="card_name" placeholder="Card Name" class="form-control"><br>
                        CW:<input type="text" name="cw" placeholder="CW" class="form-control"><br>
                        Expire Date:
                        <div class="row">

                            <div class="col-xs-3">
                                <select class="form-control col-sm-2"
                                        id="card-exp-month" name="exp_month" style="margin-left:5px;">
                                            <?php $now = date('m'); ?>
                                    <option value="null">Month</option>
                                    <option value="01" @if($now==1) selected="selected" @endif>Jan (01)</option>
                                    <option value="02" @if($now==2) selected="selected" @endif>Feb (02)</option>
                                    <option value="03" @if($now==3) selected="selected" @endif>Mar (03)</option>
                                    <option value="04" @if($now==4) selected="selected" @endif>Apr (04)</option>
                                    <option value="05" @if($now==5) selected="selected" @endif>May (05)</option>
                                    <option value="06" @if($now==6) selected="selected" @endif>June (06)</option>
                                    <option value="07" @if($now==7) selected="selected" @endif>July (07)</option>
                                    <option value="08" @if($now==8) selected="selected" @endif>Aug (08)</option>
                                    <option value="09" @if($now==9) selected="selected" @endif>Sep (09)</option>
                                    <option value="10" @if($now==10) selected="selected" @endif>Oct (10)</option>
                                    <option value="11" @if($now==11) selected="selected" @endif>Nov (11)</option>
                                    <option value="12" @if($now==12) selected="selected" @endif>Dec (12)</option>
                                </select>
                            </div>
                            <div class="col-xs-3">
                                <select class="form-control" 
                                        id="exp-year" name="exp_year">

                                    <option value="null">Year</option>
                                    <?php $now = date('Y'); ?>

                                    @for ($i = 2015; $i <= 2040; $i++)
                                    <option  value="{{ $i }}" @if($now==$i) selected="selected" @endif>{{ $i }}</option>

                                    @endfor 


                                </select>
                            </div>
                        </div>
                      
                    </div>
                        </div>
                         
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary btn-block" style="border-radius:15px"/>
                        </div>
                         <div class="col-sm-4"></div>
                    </div>
                 
                </div>
            </div>
        </div>
        </div>
    </div>
  </div>
</div>
    </div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$('#payment_amount').click(function () {
    $('#payment_amount_details').toggle();
})

$('#address').click(function () {
    $('#address_details').toggle();

})
$('#payment_method').click(function () {
    $('#payment_method_details').toggle();

})
$('#district').change(function () {
    var districtid = $(this).val();

    $('#upazilla').empty();

    //call ajax send this selected_district_id
    $.ajax({
        url: "{{ url('getUpazilas/') }}" + '/' + districtid,
        type: "GET",
        dataType: "html",
        success: function (data) {
            $('#upazilla').append(data);
        }
    });

});
$('#district_shiping').change(function () {
    var districtid = $(this).val();

    $('#upazilla_shiping').empty();

    //call ajax send this selected_district_id
    $.ajax({
        url: "{{ url('getUpazilas/') }}" + '/' + districtid,
        type: "GET",
        dataType: "html",
        success: function (data) {
            $('#upazilla_shiping').append(data);
        }
    });

});


</script>

@include ('footer');
