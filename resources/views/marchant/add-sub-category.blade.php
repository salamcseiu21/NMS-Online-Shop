 @extend('layouts.marchant-layout')
@section('marchantcontent')
  <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <div class="row" style="border: solid 1px;margin: 20px">
              <form action="{{url('/')}}/post-add-sub-category.nm" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <h3 class="text-center title"><strong><u>Add Product Sub Category</u></strong> </h3>
               <div class="col-sm-3">
                    
               </div>
              <div class="col-sm-6">
                 
              <label>Category Name</label>
              <input type="text" name="name" class="form-control" required/>
              
               <label>Description</label>
               <textarea cols="40" rows="6" name="sd" class="form-control" required> </textarea>
              <br>
              <input type="submit" name="submit" value="Save" class="btn" style="background-color: orange;color: white" /><br><br>
              </div>
               <div class="col-sm-3">
                    
               </div>
                 </form>

         </div>
        
             
   @endsection
  