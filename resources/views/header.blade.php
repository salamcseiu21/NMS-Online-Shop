<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Md.Abdus Salam">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>NMS-Online Shop</title>  
        <link rel="shortcut icon" href="{{asset('/public/AdminAssets/images/home/NMS_BIG.png')}}" type="image/png" />
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/prettyPhoto.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/main.css')}}">
        <link rel="stylesheet" href="{{asset('/public/AdminAssets/css/responsive.css')}}">
        
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->   


    </head><!--/head-->

    <body style="background-color: #F3F3F3 !important;">
     <section>
        <div class="container">
            
      
        <header id="header" style="background-color:#FFFFFF"><!--header-->
            <div class="header_top"><!--header_top-->
               
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo" style="padding: 0 5px">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +88015201026</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> info@nmsonlineshop.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                
                    <div class="row" style="padding: 5px">
                        <div class="col-sm-4">
                            <div class="logo pull-left">

                                <a href="{{url('/')}}"><img src="{{asset('/public/AdminAssets/images/home/NMS_BIG.png')}}" alt="" /></a>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                           
                                <ul class="nav navbar-nav">
                                  
                                   <li><a href="{{url('/my-account')}}"><i class="fa fa-user"></i> Account</a></li>
                                                            
                                    <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="{{ url('/') }}/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><a href="{{url('/')}}/mycart"><i class="fa fa-shopping-cart"></i> Cart({{session('total_qty')}})</a></li>
                                      @if (Auth::guest())
                                      <li><a href="{{ route('login') }}"> <i class="fa fa-lock"></i>Login</a></li>
                            <li><a href="{{ route('register') }}"> <i class="fa fa-user"></i>Register</a></li>
                              @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu>
                                    <li >
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                                              
                                       
                                </ul>
                            </div>
                        </div>
                    </div>
              
            </div><!--/header-middle-->

        </header><!--/header-->
          </div>   
     </section>