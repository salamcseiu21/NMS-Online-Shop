
@include ('header');

<div class="container">
    @if( isset($data['temp_orders']) && count($data['temp_orders'] ) )
    <form method="post" action="{{ url('/') }}/update-cart">
          {!! csrf_field() !!} <!-- this is a helper method =input typr=hidddden, name="". value=""-->
	<div class="row">
           
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-9">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span>Cart ({{$data['temp_orders']->sum('product_qty')}}) </h5>
							</div>
							<div class="col-sm-3">
                                                            <button type="button" class="btn btn-primary btn-sm btn-block" style="border-radius: 5px">
									<span class="glyphicon glyphicon-share-alt"></span> 
                                                                        <a href="{{ url('/') }}/continue-shoping" style="color: white;" /> 
				Coninue Shopping </a>		
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
	                          @foreach($data['temp_orders'] as $temp_order)	
					<div class="row" id="cart-item-{{ $temp_order->temp_order_row_id }}">
                                            <div class="col-sm-2"><img class="img-responsive" src="{{asset("/public/images/products/thumbs")}}/{{$temp_order->product_image}}" height="70" width="100">
						</div>
						<div class="col-sm-4">
							<h4 class="product-name"><strong>{{ $temp_order->product_name }}</strong></h4><h4><small>{{ $temp_order->product_short_description}}</small></h4>
						</div>
						<div class="col-sm-6">
							<div class="col-sm-6 text-right">
								<h6><strong>{{ $temp_order->product_price }}<span class="text-muted"> x</span></strong></h6>
							</div>
							<div class="col-sm-4">
                                                            <input type="number" class="form-control" name="product_qty_{{ $temp_order->temp_order_row_id }}" value="{{ $temp_order->product_qty }}" /> 
								&nbsp;
							</div>
							<div class="col-sm-2">
								
									
                                                                            <a href="javascript:void(0)" temp_order_row_id="{{ $temp_order->temp_order_row_id }}" class="remove-item"><span class="glyphicon glyphicon-trash"></span></a>
                                                                        
								
							</div>
						</div>
					</div>
					<hr>
                                        <input type="hidden" name="temp_order_row_id[]" value="{{ $temp_order->temp_order_row_id }}" />	
				   @endforeach
					<div class="row cart-content">
						<div class="text-center">
                                                    <div class="col-sm-8"></div>
							<div class="col-sm-2">
								<a href="javascript:void(0)" class="btn btn-info btn-sm btn-block" temp_order_row_id="{{ $temp_order->temp_order_row_id }}" id="remove-all" /> 
				                                 Remove All</a>
							</div>
							<div class="col-sm-2">
                                                           
								<button type="submit" class="btn btn-info btn-sm btn-block">
									Update cart
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total: <strong>{{ $data['total_price'] }} Tk</strong></h4>
						</div>
						<div class="col-xs-3">
                                                    <button type="button" class="btn btn-success btn-block">
								<a href="{{ url('/') }}/checkout" style="color: white"><i class="fa fa-crosshairs"></i> Checkout</a>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </form>
       @else
	<div class="row">
		<div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div>
	</div>	
	@endif
</div>

	
<br>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {

 $('.remove-item').click( function() {
    var temp_order_row_id = $(this).attr('temp_order_row_id');
  
   
	if( !confirm('Are you sure to remove this item ? '))
	{
		return false;
	}
	
	var dataString = 'temp_order_row_id=' + temp_order_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDelete",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    $('#cart-item-' + temp_order_row_id) . remove(); 
              window.location.href = '{{url('/')}}/mycart';
               
        }
    });
	
    	
 });
 
  $('#remove-all') . click( function() {
  
	//var dataString = 'temp_order_row_id=' + temp_order_row_id;
	if( !confirm('Are you sure to remove all items from cart ? '))
	{
		return false;
	}
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/cartItemDeleteAll",
        //data : dataString,                    
        success : function(status) {
		 $('.cart-content') . hide();
		 //$('.container').html('<div class="row"><div id="cart-container"> Cart is empty!  Please Select Product to Buy!</div></div>'); 
                  window.location.href = '{{url('/')}}/mycart';
        }
    });
	
    	
 });
 
 
 }); 
</script>

@include ('footer');