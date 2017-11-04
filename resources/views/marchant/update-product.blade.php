 @extend('layouts.marchant-layout')
@section('marchantcontent')
   <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <div class="row" style="border: solid 1px;margin: 20px">
         <h3 class="text-center"><strong><u>Update Product</u></strong> </h3>
               <form action="{{url('/')}}/update-product.nm" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
             
       <div class="col-md-6">
           
             
           <input type="hidden" value="{{$data['prduct_by_id']->product_row_id}}" name="product_id"/>
                 <label>Product Category</label>
                 <select class="form-control" name="categoryid" required>
               @foreach($data['categories'] as $row)
               
                   <option  value="{{$row->category_row_id}}" @if($row->category_row_id==$data['prduct_by_id']->category_row_id) selected="selected" @endif>{{$row->category_name}}</option>
              
                @endforeach
              </select>
              <label>Product Name</label>
              <input type="text" value="{{$data['prduct_by_id']->product_name}}" name="name" class="form-control" required/>
               <label>Product Price</label>
              <input type="number" value="{{$data['prduct_by_id']->product_price}}" name="product_price" class="form-control" required/>
               <label>Product Image</label>
               <input type="file" name="product_image" class="form-control" required/>
               <label>Short Description</label>
               <textarea cols="40" value="{{$data['prduct_by_id']->product_short_description}}" rows="4" name="sd" class="form-control" required> </textarea>
               <label>Long Description</label>
               <textarea cols="40" rows="6" value="{{$data['prduct_by_id']->product_long_description}}" name="ld"  class="form-control" required> </textarea><br>
             
                 
     </div>
     <div class="col-md-6">
         
         <label>Product Width</label>
         <input type="text" name="product_width" value="{{$data['prduct_by_id']->product_width}}" class="form-control" required/>
               <label>Product Height</label>
               <input type="text" name="product_height" value="{{$data['prduct_by_id']->product_height}}" class="form-control" required/>
               <label>Product Color</label>
               <input type="text" name="product_color"  class="form-control" required/><br>
              
              <label>Is Featured</label>
              <input type="radio" name="isfeatured"  value="1" required/>Yes &nbsp;&nbsp;<input type="radio" name="isfeatured" value="0" required/>No<br>
               
                 <input type="submit" name="submit" value="Update" class="btn" style="background-color: orange;color: white" />
     </div>
        </form>
 </div>
       
@endsection
     <script src="{{asset('/public/superadmin/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/public/superadmin/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('/public/superadmin/js/sb-admin-datatables.min.js')}}"></script>