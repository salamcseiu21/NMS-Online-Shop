 @extend('layouts.marchant-layout')
@section('marchantcontent')

<section>
      <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>Sub Category List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category  Name</th>
                   <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['all_categories'] as $row)	
                    
                        <tr>
                            
                  <td>{{ $row->sub_category_name }}
                  </td>
                   <td>{{ $row->description }}
                  </td>
                  <td>
                      <a href="javascript:void(0)" category_row_id="{{ $row->id}}" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a> &nbsp;
                       <a href="{{asset('/update-category')}}/{{$row->id}}"/><span class="glyphicon glyphicon-edit"></span></a>
                  </td>
                </tr>
				   @endforeach
                    
               
              
                </tbody>
                <tfoot>
                <tr>
                 
                  <th>Name</th>
                  <th>Description</th>
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
    var category_row_id = $(this).attr('category_row_id');
   
	if( !confirm('Are you sure to remove this category ? '))
	{
		return false;
	}
	
	var dataString = 'category_row_id=' + category_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/categoryToDelete",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin-category-list';
               
        }
    });
	
    	
 });
 $('a.update-item').click( function() {
    var category_row_id = $(this).attr('product_row_id');
   
	if( !confirm('Are you sure to update this category ? '))
	{
		return false;
	}
	
	var dataString = 'category_row_id=' + category_row_id;
    $.ajax({
        type: "POST",
		headers: {'X-CSRF-Token': $('meta[name=csrf-token]').attr('content')},
        url : "{{url ('/') }}" + "/categoryToUpdate",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
		    //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin-category-list';
               
        }
    });
	
    	
 });


</script>
@endsection