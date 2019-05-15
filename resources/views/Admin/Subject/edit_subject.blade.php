@extends('Admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Edit Subject
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">Edit Subject</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{url('admin/add_subject')}}">Add Subject</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{url('admin/list_subject')}}">List Subject</a>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <p class="font-size-sm text-muted">
                        @if(session('success'))
                            <span class="alert alert-success"> {{session('success')}}</span>
                    @endif
                    @if($errors->any())
                        <ul  class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        @endif
                        </p>
                </div>
            </div>
        </div>
        <!-- END Hero -->
        <!-- Page Content -->
        <div class="content">
            <!-- Partial Table -->
            <div class="block" style="padding:20px;">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="student_name">Subject Name<font color="#ff0000">*</font></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$subject->name}}">
                            {{$errors->first('name')}}
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="subject_type">Subject Type <font color="#ff0000">*</font></label>
                            <select name="subject_type" id="subject_type" class="form-control">
                                <option value="compulsary" <?php if ($subject->subject_type == 'compulsary') echo 'selected'?>>Compulsary</option>
                                <option value="optional" <?php if ($subject->subject_type == 'optional') echo 'selected'?>>Optional</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <button type="submit" class="btn  btn-success">Update</button>
                        </div>
                    </div>

                </form>
            </div>
            <!-- END Partial Table -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
@endsection