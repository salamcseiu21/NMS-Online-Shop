<br>
    <footer id="footer" style="background-color: #FFFFFF !important"> <!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About</h2>
							<ul class="nav nav-pills nav-stacked">
                                                            
                                                             <li><a href="{{url('/')}}/about-us">Company Information</a></li>
								
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Contact</h2>
                                                        <ul class="nav nav-pills nav-stacked">
                                                            
                               
                                <li><a href="{{url('/')}}/contact-us">Contact Us</a></li>
								
								
							</ul>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
    <div class="footer-bottom" style="background-color: #2C2C2C !important;color: orange;">
			
        <div class="row">
            <p class="pull-left" style="color: orange;margin-left: 20px">All rights reserved by NMS Online Shop</p>
            <p style="margin-right: 20px" class="pull-right">Developed by <span><a target="_blank" href="http://www.salamcse.com">www.salamcse.com</a></span></p>
        </div>
             
       
                                     
				
			
		</div>
		
	</footer><!--/Footer-->


  
    <script src="{{asset('/public/AdminAssets/js/jquery.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/bootstrap.min.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/jquery.scrollUp.min.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/price-range.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/jquery.prettyPhoto.js')}}"></script>
    
    <script src="{{asset('/public/AdminAssets/js/main.js')}}"></script>
   <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '590328054691632',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>