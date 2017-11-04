 @extend('profile.admin-profile')
@section('maincontent')
  <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <div class="row" style="border: solid 1px;margin: 20px">
     
              <form action="{{url('/admin/post-add-product-category')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <h3 class="text-center title"><strong><u>Add Product Category</u></strong> </h3>
              <div class="col-sm-6">
                 
              <label>Category Name</label>
              <input type="text" name="name" class="form-control" required/>
              
               <label>Short Description</label>
               <textarea cols="40" rows="6" name="sd" class="form-control" required> </textarea>
              
              <label>Is Featured</label>
              <input type="radio" name="isfeatured"  value="1" required/>Yes &nbsp;&nbsp;<input type="radio" name="isfeatured" value="0" required/>No<br>
              <input type="submit" name="submit" value="Save" class="btn" style="background-color: orange;color: white" /><br><br>
              </div>
               <div class="col-sm-6">
                    <label>Category Image</label>
               <input type="file" name="cte_image" class="form-control" required/>
                <label>Long Description</label>
               <textarea cols="40" rows="6" name="ld"  class="form-control" required> </textarea>
              <br>
               </div>
                 </form>

         </div>
        
             
     <section>
      <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>Category List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Category  Name</th>
                   <th>Short Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['categories'] as $row) 
                    
                        <tr>
                            <td>
                                                             <img class="img-responsive" src="{{asset("/public/images/products/thumbs")}}/{{$row->category_image}}" height="70" width="100">
            
                            </td>
                  <td>{{ $row->category_name }}
                  </td>
                   <td>{{ $row->category_short_description }}
                  </td>
                  <td>
                      <a href="javascript:void(0)" category_row_id="{{ $row->category_row_id}}" class="remove-item"/><span class="glyphicon glyphicon-trash"></span></a> &nbsp;
                       <a href="{{asset('admin/update-category')}}/{{$row->category_row_id}}"/><span class="glyphicon glyphicon-edit"></span></a>
                  </td>
                </tr>
           @endforeach
                    
               
              
                </tbody>
                <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Short Description</th>
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
        url : "{{url ('/') }}" + "/admin/categoryToDelete",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
        //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin/category-list';
               
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
        url : "{{url ('/') }}" + "/admin/categoryToUpdate",
        data : dataString,                    
        success : function(status) {
               //console.log("as");
        //$('#cart-item-' + product_row_id) . remove(); 
              window.location.href = '{{url('/')}}/admin/category-list';
               
        }
    });
  
      
 });


</script>
@endsection