 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Super Admin-NMS online Shop</title>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('/public/superadmin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('/public/superadmin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('/public/superadmin/css/sb-admin.css')}}" rel="stylesheet">
</head>
<body>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Pending Orders</div>
        <div class="card-body">
          <div class="table-responsive">
              
             
              
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 
                    <th>SL#</th>
                    <th>Product Name</th>
                   <th>Price</th>
                   <th>Image</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                   <th>SL#</th>
                    <th>Product Name</th>
                   <th>Price</th>
                   <th>Image</th>
                </tr>
              </tfoot>
              <tbody>
                  
                  @foreach($data['all_prducts'] as $row)

             <tr>
              <td>{{$row->product_row_id}}</td>
                       
                  <td>{{$row->product_name}}</td>
                 <td>{{$row->product_price}}</td>
                 <td><a href="{{asset("/")}}product-details/{{$row->product_row_id}}" title="{{$row->product_name}}"> 

                                    <img src="{{asset("/public/images/products/thumbs")}}/{{$row->product_image}}"  style="width:170px;height: 200px;" alt="Image">
                                </a></td>
                </tr>
           
                  @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
<!-- Bootstrap core JavaScript-->
    <script src="{{asset('/public/superadmin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/public/superadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('/public/superadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('/public/superadmin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/public/superadmin/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('/public/superadmin/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('/public/superadmin/js/sb-admin.min.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('/public/superadmin/js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('/public/superadmin/js/sb-admin-charts.min.js')}}"></script>
  </div>
</body>

</html>