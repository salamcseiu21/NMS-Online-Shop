 @include('superadmin.pages.s-a-header')
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Pending Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 
                    <th>Customer Info</th>
                    <th>Total Price</th>
                   <th>Order Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>User ID</th>
                    <th>Total Price</th>
                   <th>Order Date</th>
                </tr>
              </tfoot>
              <tbody>
                  
                  @foreach($data['all_orders'] as $row)
                   <tr>
                  <td>{{json_decode($row->customer_address)->name}}</br>{{json_decode($row->customer_address)->phone}}</br>{{json_decode($row->customer_address)->email}}</td>
                  <td>{{$row->product_total_price}}</td>
                 <td>{{$row->created_at}}</td>
                </tr>
                  @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
   @include('superadmin.pages.s-a-footer')