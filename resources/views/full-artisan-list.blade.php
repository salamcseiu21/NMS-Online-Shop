 @include('header')
<section style="padding:30px">
    <h2 class="title text-center" style="margin: 0;">NMS Artisans</h2>
</section>
 <div class="container">    

       
         <div class="row">
      @foreach($artisan['artisans'] as $row)
        <div class="col-sm-3" style="margin: 0;padding:5px;">
                                        

                                        <div class="panel-body text-center" style="background-color: white">

                                                <a href="{{asset("/")}}merchants-details/{{$row->merchant_id}}" title=" {{$row->merchant_name}}"> 

                                                    <img src="{{asset("/public/images/merchants")}}/{{$row->merchant_image}}"  style="width:200px;height: 220px;" alt="Image">
                                                </a><br>
                                                <div class="row" style="margin-top:30px">
                                                      <h2>{{$row->merchant_name}}</h2>  
                                                   <a style="text-transform: uppercase;font-weight: bold;" href="{{$row->merchant_website_url}}">See story</a>
                                                </div>
                                                
                                               
                                            </div>

                                     
                                    </div>
      @endforeach
   
  

         </div>
 </div>

  @include('footer')

