 @include('header')

<div class="container">    
  <div class="row" style="margin: 0;padding:0;">
    
    
      <div class="panel panel-primary">
        <div class="panel-heading text-center">Thank you</div>
        <div class="panel-body">
           Your order Id is:ODR-{{ $data["order_id"]}}
            <h1>Thank you!! stay connected</h1>
      </div>
     

  </div>
</div>
   @include('footer')
