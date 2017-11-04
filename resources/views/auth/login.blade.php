
<link rel="shortcut icon" href="{{asset('/public/AdminAssets/images/home/NMS_BIG.png')}}" type="image/png" />
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/responsive.css')}}">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-lock"></i> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                              
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-4"></div> 
                        <div class="col-sm-6">
                                           <div class="social-auth-links text-center">
      <p>- OR -</p>
     
      <a href="{{url('auth/google')}}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
         <a href="{{url('auth/twitter')}}" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Sign in using
        Twitter</a>
         <a href="{{url('auth/github')}}" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in using
        Github</a>
    </div>
     <div class="col-sm-2"></div> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="{{asset('/public/AdminAssets/js/jquery.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/jquery.scrollUp.min.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/price-range.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/jquery.prettyPhoto.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/main.js')}}"></script>