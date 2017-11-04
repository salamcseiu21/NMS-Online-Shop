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
  <!-- Custom styles for this template-->
  <link href="{{asset('/public/superadmin/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><i class="fa fa-lock"></i> Login</div>
      <div class="card-body">
          <form  action="{{url('/')}}/super-admin-home" method="post">
               {{ csrf_field() }}
          <div class="form-group">
            
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
          
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Log In"/>
        </form>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/public/superadmin/ vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/public/superadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{asset('/public/superadmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>

</html>
