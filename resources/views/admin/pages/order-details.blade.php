@extends('layouts.admin-layout')
@section('maincontent')
  <div class="row cart-content" style="padding: 0 14px">    
			<!-- product details -->   
			<div id="cart-container">
				
				 {!! csrf_field() !!} <!-- this is a helper method =input typr=hidddden, name="". value=""-->
					<table class="table table-bordered table-responsive">
                                           
						<thead>
                                                <caption class="text-center"><h3 style="margin: 0;padding: 0">Order List</h3></caption>
							<tr>
                                                       <th>Order No</th>
							<th>Order Details</th>
							<th>Customer Info</th>
                                                        <th>Order Date</th>
                                                         <th>Shipping Address</th>
                                                        <th>Payment Method</th>
							</tr>
						</thead>
						<tbody>	

											
						@foreach($data['all_orders'] as $order)	
                                               <?php $paymentId=json_decode($order->payment_method)->payment_id ?>
						 <tr>
                                                  <td>NMSORD# {{ $order->order_id }}</td>
						  <td>
						  	
						  	<table class="table">
						  		<thead>
						  			<tr>
						  			<th>Name</th>
						  			<th>SKU</th>
						  			<th>Qty</th>
						  		</tr>
						  		</thead>
						  		<tbody>
						  			@foreach(json_decode($order->order_details) as $od)
						  			<tr>
						  				<td>{{$od->product_name}}</td>
						  				<td>{{$od->product_sku}}</td>
						  				<td>{{$od->product_qty}}</td>
						  			</tr>
						  			
						       
						  	   @endforeach
						  	  
						  		</tbody>
						  		<tfoot>
						  			<tr>
						  				<td colspan="2">Total</td>
						  				<td> {{ $order->product_total_price }}</td>
						  			</tr>
						  		</tfoot>
						  		
						  	</table>	
						    </td>
						  <td>{{$order->name}}<br>
						  
						  	{{$order->email}}

						  </td>
						  <td>{{ $order->created_at}}</td>
						   <td>
						   	{{json_decode($order->shiping_address)->name}}<br>
						   	{{json_decode($order->shiping_address)->mobile}}<br>
						   	 	{{json_decode($order->shiping_address)->address}}
						   </td>
						   <td>
                                                      
                                                      @if($paymentId==1)
                                                      <strong>Method Name:</strong> {{json_decode($order->payment_method)->payment_method}}<br>
                                                      <strong>Tnx ID:</strong>    {{json_decode($order->payment_method)->txr_id}}<br>
                                                       @elseif($paymentId==2)
                                                      <strong>Method Name:</strong> {{json_decode($order->payment_method)->payment_method}}<br>
                                                        @elseif($paymentId==3)
                                                        <strong>Method Name:</strong>   {{json_decode($order->payment_method)->payment_method}}<br>
                                                        <strong>Card Name :</strong>  {{json_decode($order->payment_method)->card_name}}<br>
                                                        <strong>Card No :</strong>  {{json_decode($order->payment_method)->card_no}}<br>
                                                        <strong>CW :</strong>  {{json_decode($order->payment_method)->cw}}<br>
                                                        <strong>Exp Date:</strong>    {{json_decode($order->payment_method)->exp_month}}-{{json_decode($order->payment_method)->exp_year}}<br>
                                                      @endif
                                                   </td>
						</tr>
						@endforeach
											
					  </tbody>
					</table>
			</div>
		 <!-- End Normal Product -->           
		</div>
@endsection