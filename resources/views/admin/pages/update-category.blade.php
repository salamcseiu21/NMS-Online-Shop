 @extend('profile.admin-profile')
@section('maincontent')
   <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
 <div class="row" style="border: solid 1px;margin: 20px">
              <form action="{{url('/')}}/update-category" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <h3 class="text-center title"><strong><u>Update Product Category</u></strong> </h3>
              <div class="col-sm-6">
                   <input type="hidden" value="{{$data['category_by_id']->category_row_id}}" name="category_id"/>
              <label>Category Name</label>
              <input type="text" name="name" value="{{$data['category_by_id']->category_name}}" class="form-control" required/>
              
               <label>Short Description</label>
               <textarea cols="40" rows="6" name="sd" class="form-control" required> </textarea>
              
              <label>Is Featured</label>
              <input type="radio" name="isfeatured"  value="1" required/>Yes &nbsp;&nbsp;<input type="radio" name="isfeatured" value="0" required/>No<br>
              <input type="submit" name="submit" value="Update" class="btn" style="background-color: orange;color: white" /><br><br>
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
        
       
@endsection
     <script src="{{asset('/public/superadmin/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/public/superadmin/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('/public/superadmin/js/sb-admin-datatables.min.js')}}"></script>