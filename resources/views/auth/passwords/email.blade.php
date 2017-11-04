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
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
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