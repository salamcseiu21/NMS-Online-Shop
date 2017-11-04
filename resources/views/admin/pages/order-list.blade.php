 @extend('profile.admin-profile')
 
  @section('maincontent')
 <!-- Content Wrapper. Contains page content -->
 <section>
      <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>Order List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Order No</th>
                  <th>Total Amount</th>
                  <th>Order Date</th>
                  <th>Order Status</th>
                  <th>Send for Siping</th>
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['all_orders'] as $row)	
                    <?php $paymentId=json_decode($row->payment_method)->payment_id;
                    $order_status=$row->order_status;
                     ?>
                        <tr>
                            
                  <td> NMSORD# {{ $row->order_id }}
                  </td>
                  
                  <td> {{ $row->product_total_price  }} Tk</td>
                  <td>{{$row->created_at}}</td>
                  <td>
                      @if($order_status==0)
                     <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> Pending 
                      @elseif($order_status==1)
                     <i class="fa fa-check text-success" aria-hidden="true"></i> Deliverd
                      @endif
                      
                  </td>
                  <td>
                  	 <a href="#"/><span class="fa fa-paper-plane"></span></a>
                  </td>
                </tr>
				   @endforeach
                    
               
              
                </tbody>
                <tfoot>
               
                  <tr>
                  <th>Order No</th>
                  <th>Price</th>
                  <th>Order Date</th>
                   <th>Order Status</th>
                   <th>Send For Siping</th>
                </tr>
               
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
 </section>
  <!-- /.content-wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script type="text/javascript">
$('a.remove-item').click( function() {
    var product_row_id = $(this).attr('product_row_id');
   
	if( !confirm('Are you sure to remove this item ? '))
	{
		return false;
	}
	
	var dataString = 'product_row_id=' + product_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/productToDelete",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin-product-list';
               
        }
    });
	
    	
 });
 $('a.update-item').click( function() {
    var product_row_id = $(this).attr('product_row_id');
   
	if( !confirm('Are you sure to update this item ? '))
	{
		return false;
	}
	
	var dataString = 'product_row_id=' + product_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/productToUpdate",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin-product-list';
               
        }
    });
	
    	
 });


</script>
@endsection