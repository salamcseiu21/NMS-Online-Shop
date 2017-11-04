@extends('layouts.marchant-layout')
@section('marchantcontent')

 <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>Product List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Qty</th>
                  <th>Price</th>
                  <th>Total Price</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
                
                    @foreach($data['all_orders'] as $row)	
                    <tr>
                   <td>Name</td>
                   <td>{{$row->product_sku}}</td>
                   <td>{{$row->qty}}</td>
                    <td>{{$row->qty}}</td>
                     <td>{{$row->qty}}</td>
                      <td>{{$row->order_date}}</td>
                        </tr>
				   @endforeach
                   
                    
               
              
                </tbody>
                <tfoot>
                 <tr>
                  <th>Name</th>
                  <th>SKU</th>
                  <th>Qty</th>
                  <th>Price</th>
                   <th>Total Price</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
}
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection