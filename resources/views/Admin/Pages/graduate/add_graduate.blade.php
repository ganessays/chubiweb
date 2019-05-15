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
                                    <h4>{{__('language.Add_New_Student')}}<a href="{{url('admin/list-graduate-student')}}" class="btn btn-primary btn-sm" style="float: right;"><i class="fa fa-list-alt"></i> {{__('language.List_graduate_Student')}}</a></h4>
                                  </div>
                              </div>
                              <div class="col-md-9 col-xl-9">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                      <div class="row">
                                          <div class="col-md-9">
                                              <div class="form-group">
                                                  <label for="title">{{__('language.Student_Name')}}</label>
                                                  <input type="text" class="form-control" id="student" name="student" placeholder="Full name of student">
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="form-group">
                                                  <label for="pass">{{__('language.Pass_Year')}}</label>
                                                  <input type="text" class="form-control" id="pass" name="pass" placeholder="2019">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="title">{{__('language.Courses_Name')}}</label>
                                                  <input type="text" class="form-control" id="courses" name="courses" placeholder="Courses of Student">
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="title">{{__('language.Url')}}</label>
                                                  <input type="url" class="form-control" id="link" name="link" placeholder="url">
                                              </div>
                                          </div>

                                      </div>
                                      <div class="form-group">
                                          <label for="details">{{__('language.Student_Details')}}</label>
                                          <textarea id="js-ckeditor" name="details">{{__('language.Write_about_Information')}}</textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-xl-3">
                                  <div style="clear: both; background-color: #fff; padding:10px; border: 1px solid lightgrey;">
                                  <div class="form-group">
                                      <label for="status">{{__('language.Status')}}</label>
                                      <input type="radio" checked name="status" value="publish">{{__('language.Publish')}}
                                      <input type="radio" name="status" value="draft">{{__('language.Draft')}}
                                  </div>

                                      {{--<div class="form-group">--}}
                                      {{--<label for="color">Date Color</label>--}}
                                      {{--<input type="radio" checked name="color" value="red">Red--}}
                                      {{--<input type="radio" name="color" value="blue">Blue--}}
                                  {{--</div>--}}

                                  <div class="form-group">
                                      <div class="student_img_show">
                                          <label for="image"></label>
                                          <img id="blah" src="{{asset('public/client/images/logo/default-image.jpg')}}"  class="img-fluid" alt="Feature Image">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="student_image">
                                          <label for="image"></label>
                                          <input type='file' class="form-control" id="photo" name="image" onchange="readURL(this);" />
                                          {{$errors->first('image')}}
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="example-text-input"></label>
                                      <button type="submit" class="btn btn-primary btn-sm">{{__('language.Submit')}}</button>
                                      <button type="reset" class="btn btn-warning btn-sm">{{__('language.Clear')}}</button>
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