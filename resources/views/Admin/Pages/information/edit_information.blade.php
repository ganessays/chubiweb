@extends('Admin.index')
@section('body')
    <!-- Main Container -->
  <div class="main_page" style="margin-top: 80px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="block-content block-content-full">
                      <form action="" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="row push">
                              <div class="col-md-12">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey; margin-bottom: 10px;">
                                    <h4>Create New Information<a href="{{url('admin/list-information')}}" class="btn btn-primary btn-sm" style="float: right;"><i class="fa fa-list-alt"></i> List Information</a></h4>
                                  </div>
                              </div>
                              <div class="col-md-9 col-xl-9">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                      <div class="row">
                                          <div class="col-md-9">
                                              <div class="form-group">
                                                  <label for="title">Information Title</label>
                                                  <input type="text" class="form-control" id="title" name="title" value="{{$information->title}}">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="info_date">Date</label>
                                                  <input type="date" class="form-control" id="info_date" name="info_date" value="{{$information->info_date}}">
                                              </div>
                                          </div>

                                      </div>
                                      <div class="form-group">
                                          <label for="event_details">Information Date</label>
                                          <textarea id="js-ckeditor" name="info_details">{{$information->info_details}}</textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xl-3">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                  <div class="form-group">
                                      <label for="status">Post Status</label>
                                      <input type="radio" @if($information->status == 'publish') checked @endif name="status" value="publish">Publish
                                      <input type="radio" @if($information->status == 'draft') checked @endif name="status" value="draft">Draft
                                  </div><div class="form-group">
                                      <label for="color">Date Color</label>
                                      <input type="radio" @if($information->color == 'red') checked @endif name="color" value="red">Red
                                      <input type="radio" @if($information->color == 'blue') checked @endif name="color" value="blue">Blue
                                  </div>

                                  <div class="form-group">
                                      <div class="student_img_show">
                                          <label for="image"></label>

                                          @if(isset($information->image))
                                              <img  id="blah"  src="{{url('public/uploads/information').'/'.$information->image}}"   class="img-fluid" alt="Feature Image">
                                          @else
                                              <img id="blah" src="{{asset('public/client/images/logo/default-image.jpg')}}"  class="img-fluid" alt="Feature Image">
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_image">
                                          <label for="image"></label>
                                          <input type='file' class="form-control" id="photo" name="image" onchange="readURL(this);" />
                                          <i style="color:Red; font-size: 14px;">(Note : Width:80px Height:85px)</i>
                                          {{$errors->first('Image')}}
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="example-text-input"></label>
                                      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                      <button type="reset" class="btn btn-warning btn-sm">Clear</button>
                                  </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <!-- END Main Container -->
@endsection