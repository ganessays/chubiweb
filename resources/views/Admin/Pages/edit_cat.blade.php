@extends('Admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
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
            </div>

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">{{__('language.Update_Category')}}</h3>
                </div>
                <div class="block-content block-content-full">
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-2"><label for="cat_name">{{__('language.Category_Name')}}</label></div>
                                <div class="col-md-8"><input type="text" name="name" class="form-control form-control-sm" value="{{$category->name}}"></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary btn-sm">{{__('language.Update')}}</button></div>
                            </div>
                        </form>
                </div>
            </div>
                <!-- Dynamic Table Full -->
        </div>
        <!-- END Page Content -->

    </main>


    </main>
    <!-- END Main Container -->
@endsection