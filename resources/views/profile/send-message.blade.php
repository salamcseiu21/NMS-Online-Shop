
@extends('layouts.user-layout') 
@section('usermaincontent')
  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Send Message</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/')}}/post-send-message.user" method="post" enctype="multipart/form-data">
            	 {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="type" class="form-control" name="subject" id="subject" placeholder="Message heading here...(Maximum 50 character)" maxlength="50" required>
                </div>
                 <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="4" placeholder="Enter your Message... (Maximum 200 character)" maxlength="200" required></textarea>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
@endsection()