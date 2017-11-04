@include ('header');
<!-- Include SmartWizard CSS -->
    <link href="{{asset('/public/dist/css/smart_wizard.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="{{asset('/public/dist/css/smart_wizard_theme_circles.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/public/dist/css/smart_wizard_theme_arrows.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/public/dist/css/smart_wizard_theme_dots.css')}}" rel="stylesheet" type="text/css" />
    <div class="container">
        <form method="post" action="confirmOrder">
        {!! csrf_field() !!}
      
         <div class="form-inline">
            <div class="form-group" style="display: none">
              <label >Choose Theme:</label>
              <select id="theme_selector" class="form-control">
                    <option value="arrows">arrows</option>
              </select>
            </div>           
            
          
            <div class="btn-group navbar-btn text-right" role="group" style="display: none;">
         
                <button class="btn btn-default" id="prev-btn" type="button">Go Previous</button>
                <button class="btn btn-default" id="next-btn" type="button">Go Next</button>
            </div>
        </div>

        <br />
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1</a></li>
                <li><a href="#step-2">Step 2</a></li>
                <li><a href="#step-3">Step 3</a></li>
            </ul>
            
      <div>
         
<div id="step-1" class="">
 
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
                                    
                                     @foreach($data["orders"] as $temp_order) 
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

               
                <div id="step-2" class="">
                     <div class="row">
                           <div class="col-sm-8">
                <div class="panel panel-heading panel-title">
                 <h3 class="text-center">Shipping Address</h3>
               </div>

              <label>Full Name</label> 
                <input type="text"  name="full_name" value="Noyon"  class="form-control">
                 <label>Mobile Number</label> 
                <input type="text"  name="mobile"  class="form-control">
              <label>  District:</label>

                <select id ="district_shiping" class="form-control" name="district_shiping"> 
                    <option>Seelct district</option>

                    @foreach( $data['district'] as $ditrict)
                    <option value="{{ $ditrict->id }}">{{ $ditrict->full_name }}</option>
                    @endforeach

                </select>


               <label> Upazilla</label>
                <select id="upazilla_shiping" class="form-control" name="upazilla_shiping"> 
                    <option>Seelct Upazilla</option>


                </select>

               <label> Address</label>

                <textarea name="shiping_address" cols="40" rows="5" class="form-control"></textarea><br>
                           </div>
                         <div class="col-sm-4">
                             <div class="panel panel-heading panel-title">
                 <h3 class="text-center">Sign In</h3>
                 </div>
                             <div class="text-center" style="background-color: #F3F3F3;min-height: 300px">
                                 <p style="color: green;padding-top: 20px">You are currently in Guest user mode.<br> Please Sign In for better buying experience.</p>
                                 <a href="{{ route('login')}}" class="btn btn-primary">Sign In</a>
                                  
                             </div>
                         </div>
                     </div>
              

                  
            </div>
                <div id="step-3" class="">
                   
                    <div class="panel panel-default">
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
                            <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary btn-block" style="border-radius:0px"/>
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
        </form>
    </div>
@include ('footer');
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script type="text/javascript" src="{{asset('/public/dist/js/jquery.smartWizard.js')}}"></script>
   <script type="text/javascript">
        $(document).ready(function(){
            
            // Step show event 
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });
            
            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ alert('Finish Clicked'); });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });                         
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'default',
                    transitionEffect:'fade',
                    showStepURLhash: true,
                    toolbarSettings: {toolbarPosition: 'top'
                                      
                                    }
            });
                                         
            
            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });
            
            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            
            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });
            
            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });
            
            // Set selected theme on page refresh
            $("#theme_selector").change();
        });   
        
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
    