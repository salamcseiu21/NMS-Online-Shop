
@extends('superadmin.pages.super-admin-home')
@section('content-section')
<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Pending Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 
                    <th>Order No</th>
                    <th>Total Price</th>
                   <th>Order Date</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Order No</th>
                    <th>Total Price</th>
                   <th>Order Date</th>
                </tr>
              </tfoot>
              <tbody>
                  
                  @foreach($data['all_orders'] as $row)
                   <tr>
              <td>{{$row->order_id}}</td>
                       
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
@endsection