 @extend('layouts.marchant-layout')
 
  @section('marchantcontent')
 <!-- Content Wrapper. Contains page content -->
 <section>
      <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>Product List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['products'] as $row)	
                    
                        <tr>
                            <td>
                                                             <img class="img-responsive" src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}" height="70" width="100">
						
                            </td>
                  <td>{{ $row->product_name }}
                  </td>
                  <td>{{ $row->product_sku}}</td>
                  <td> {{ $row->product_price }} Tk</td>
                  <td>
                      <a href="javascript:void(0)" product_row_id="{{ $row->product_row_id}}" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a> &nbsp;
                       <a href="{{asset('/update-product.nm')}}/{{$row->product_row_id}}"/><span class="glyphicon glyphicon-edit"></span></a>
                  </td>
                </tr>
				   @endforeach
                    
               
              
                </tbody>
                <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Short Description</th>
                  <th>Price</th>
                  <th>Action</th>
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
              window.location.href = '{{url('/')}}/product-list.nm';
               
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
              window.location.href = '{{url('/')}}/product-list.nm';
               
        }
    });
	
    	
 });


</script>
@endsection