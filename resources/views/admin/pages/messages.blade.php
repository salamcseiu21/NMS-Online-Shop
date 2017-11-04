@extend('profile.admin-profile')
 
  @section('maincontent')
  <h3 class="text-center"><u>User Messages</u></h3> 
  <div class="row">
    
  @foreach($data['messages'] as $row)
  <!-- Post -->
    <div class="col-sm-6">
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{asset("/public/images/admin")}}/{{ $row->image }}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$row->name}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">{{$row->message_date}}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {{$row->message}}
                  </p>

                  <form action="{{url('/')}}/replay-message" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div class="form-group">
                      <div class="col-sm-12">
                          <input type="hidden" name="user_id" value="{{$row->user_id}}">
                        <input type="hidden" name="message_id" value="{{$row->id}}">
                        <textarea class="form-control" name="replymessage" rows="4" placeholder="Write a reply" required></textarea>
                      <br>
                         <button type="submit" class="btn btn-info pull-right  btn-sm">Reply</button>
                      </div>
                     
                    </div>
                  </form>
                </div>
                </div>
                <!-- /.post -->
  @endforeach
    
  </div>
  @endsection