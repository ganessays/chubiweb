@extends('Admin.index')
@section('body')
    <!-- Main Container -->
  <div class="main_page" style="margin-top: 80px;">
      <div class="container">
          <div class="row">
                  @if(session('success'))
                      <div class="col-sm-12">
                          <div class="alert  alert-success alert-dismissible fade show" role="alert">
                              <span class="badge badge-pill badge-success">Success</span> {{session('success')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                      <div style="clear: both;"></div>
                  @endif
                  @if($errors->any())
                      <div class="col-sm-12">
                          <div class="alert  alert-success alert-dismissible fade show" role="alert">
                              @foreach($errors->all() as $error)
                                  <span class="badge badge-pill badge-danger">Error</span> {{$error}}<br>
                              @endforeach
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                      </div>
                      <div style="clear: both;"></div>
                  @endif

              <div class="col-md-12">
                  <div class="block-content block-content-full">
                      <form action="" method="POST" enctype="multipart/form-data">
                          {{csrf_field()}}
                          <div class="row push">
                              <div class="col-md-12">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey; margin-bottom: 10px;">
                                    <h4>{{__('language.Edit_Event')}}<a href="{{url('admin/list_events')}}" class="btn btn-primary btn-sm" style="float: right;"><i class="fa fa-list-alt"></i> {{__('language.List_Event')}}</a></h4>
                                  </div>
                              </div>
                              <div class="col-md-9 col-xl-9">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                      <div class="form-group">
                                          <label for="title">{{__('language.Event_Title')}}</label>
                                          <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
                                      </div>
                                      <div class="row">
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="start_date">{{__('language.Event_Start_Date')}}</label>
                                                  <input type="date" class="form-control" id="start_date" name="start_date"  value="{{$event->start_date}}">
                                              </div>
                                          </div>
                                          <div class="col-md-3"><div class="form-group">
                                                  <label for="end_date">{{__('language.Event_End_Date')}}</label>
                                                  <input type="date" class="form-control" id="end_date" name="end_date" value="{{$event->end_date}}">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="post_date">{{__('language.Publish_Date')}}</label>
                                                  <input type="date" class="form-control" id="post_date" name="post_date" value="{{$event->post_date}}">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="expiry_date">{{__('language.Expiry_Date')}}</label>
                                                  <input type="date" class="form-control" id="expiry_date" name="expiry_date"  value="{{$event->expiry_date}}">
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="event_details">{{__('language.Content')}}</label>
                                          <textarea id="js-ckeditor" name="event_details">{{$event->event_details}}</textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xl-3">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                  <div class="form-group">
                                      <label for="status">{{__('language.Post_Status')}}</label>
                                      <input type="radio" @if($event->status == 'publish') checked @endif name="status" value="publish">{{__('language.Publish')}}
                                      <input type="radio"  @if($event->status == 'draft') checked @endif name="status" value="draft">{{__('language.Draft')}}
                                  </div>
                                  <div class="form-group">
                                      <label for="cat_id">{{__('language.Event_Category')}}</label>
                                      <select name="cat_id" id="cat_id" class="form-control">
                                          @foreach($category as $cat)
                                              <option @if($cat->id == $event->cat_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                                              @endforeach
                                      </select>
                                      <i style="font-size: 12px; color:Red;">{{__('language.Category_Not_Found')}}? <a href="{{url('admin/categories')}}" target="_blank">{{__('language.Add_More_Category')}}</a></i>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_img_show">
                                          <label for="event_image"></label>
                                          @if(isset($event->event_image))
                                              <img  id="blah"  src="{{url('public/uploads/event').'/'.$event->event_image}}"   class="img-fluid" alt="Feature Image">
                                          @else
                                              <img id="blah" src="{{asset('public/client/images')}}/logo/default-image.jpg"  class="img-fluid" alt="Feature Image">
                                          @endif
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_image">
                                          <label for="event_image"></label>
                                          <input type='file' class="form-control" id="photo" name="event_image" onchange="readURL(this);" />
                                          <i style="color:Red; font-size: 14px;">{{__('language.Note')}}</i>
                                          {{$errors->first('student_name')}}
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="example-text-input"></label>
                                      <button type="submit" class="btn btn-primary btn-sm">{{__('language.Update')}}</button>
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