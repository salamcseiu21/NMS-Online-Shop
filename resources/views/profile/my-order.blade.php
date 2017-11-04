@extends('layouts.user-layout') 
@section('usermaincontent')
<div class="row">
    
     <div class="box">
            <div class="box-header">
                <h3 class="box-title text-center"><strong>My Order List</strong></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Price</th>
                 
                </tr>
                </thead>
                <tbody>
                 
                    
                    @foreach($data['my-orders'] as $row)	
                    
                        <tr>
                          
                 
                  <td> {{ $row->product_total_price }} Tk</td>
                  
                </tr>
				   @endforeach
                    
               
              
                </tbody>
                <tfoot>
                <tr>
                  
                  <th>Price</th>
                
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    
    
    
    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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