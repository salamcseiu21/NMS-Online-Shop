 @include('header')
 <div class="container">
    
      <div class="row">
           
     <div class="col-md-5" style="padding: 0px;margin: 0;">
        
        <div class="panel-body">
           
            <a href="#" title="{{$data["artisan"]->merchant_name}}"> <img src="{{asset("/public/images/merchants")}}/{{$data["artisan"]->merchant_image}}"  style="width:250px;height: 290px;" alt="Image" /></a>
            </div>
     <h3 style="margin: 0;padding: 10px">
                {{$data["artisan"]->merchant_name}}
                  
            </h3>
     </div>
       <div class="col-md-7">
           <section>
                {{$data["artisan"]->about_merchant}}
           </section>
      </div> 
        
         </div>
  </div>
 @include('footer')