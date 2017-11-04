@extends('layouts.admin-layout')
@section('maincontent')

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
                  <th>Email</th>
                  <th>User Type</th>
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['users'] as $row)	
                   
                        <tr>
                            <td>
                                                             <img class="img-responsive" src="{{asset("/public/images/Admin")}}/{{$row->image}}" height="70" width="100">
						
                            </td>
                  <td>{{ $row->name }}
                  </td>
                  <td>{{ $row->email}}</td>
                  <td> 
                  	@if($row->user_type==0)

                  	User
                  	@elseif($row->user_type==1)
                  	Editor
                  	@elseif($row->user_type>1)
                  	Admin

                  	@endif
                  </td>
                  
                </tr>
				   @endforeach
                    
               
              
                </tbody>
                <tfoot>
                <tr>
                   <th>Image</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>User Type</th>
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
        url : "{{url ('/') }}" + "/admin/productToDelete",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin/product-list';
               
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
        url : "{{url ('/') }}" + "/admin/productToUpdate",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin/product-list';
               
        }
    });
	
    	
 });


</script>
@endsection