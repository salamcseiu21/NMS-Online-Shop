 @extend('layouts.marchant-layout')
@section('marchantcontent')
   <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <div class="row" style="border: solid 1px;margin: 20px">
         <h3 class="text-center"><strong><u>Add Product</u></strong> </h3>
               <form action="{{url('/')}}/post-add-product.nm" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
             
     <div class="col-md-6">
         
             
           
                 <label>Product Category</label>
                 <select class="form-control" name="categoryid" required>
               @foreach($data['categories'] as $row)
              
                   <option value="{{$row->category_row_id}}">{{$row->category_name}}</option>
              
                @endforeach
              </select>
              <label>Product Name</label>
              <input type="text" name="name" class="form-control" required/>
               <label>Product Price</label>
              <input type="number" name="product_price" class="form-control" required/>
               
               <label>Short Description</label>
               <textarea cols="40" rows="4" name="sd" class="form-control" required> </textarea><br>
               
             
                 
     </div>
     <div class="col-md-6">
         <label>Product Image</label>
               <input type="file" name="product_image" class="form-control" required/>
         <label>Product Width</label>
              <input type="text" name="product_width" class="form-control" required/>
               <label>Product Height</label>
               <input type="text" name="product_height" class="form-control" required/>
              <label>Long Description</label>
               <textarea cols="40" rows="4" name="ld"  class="form-control" required> </textarea><br>
              
              <label>Is Featured</label>
              <input type="radio" name="isfeatured"  value="1" required/>Yes &nbsp;&nbsp;<input type="radio" name="isfeatured" value="0" required/>No<br>
               
              <input type="submit" name="submit" value="Save" class="btn" style="background-color: orange;color: white" /><br><br>
     </div> 
        </form>
        
 </div>
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
        url : "{{url ('/') }}" + "/product-To-Delete.nm",
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
     