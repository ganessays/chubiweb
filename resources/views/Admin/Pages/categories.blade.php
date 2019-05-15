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
                    <h3 class="block-title">{{__('language.Create_New_Category')}}</h3>
                </div>
                <div class="block-content block-content-full">
                        <form action="" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-2"><label for="cat_name">{{__('language.Category_Name')}}</label></div>
                                <div class="col-md-8"><input type="text" name="name" class="form-control form-control-sm" placeholder="Create New Category" required></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-primary btn-sm">{{__('language.Create')}}</button></div>
                            </div>
                        </form>
                </div>
            </div>
                <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">{{__('language.List_Categories')}}</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th>{{__('language.SN')}}</th>
                            <th>{{__('language.Category_Name')}}</th>
                            <th>{{__('language.Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key=>$category)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{url('admin/categories').'/'.$category->id}}"><i class="fa fa-edit"></i></a>
                                {{--<a href="{{url('admin/categories').'/'.$category->id.'/delete'}}"><i class="fa fa-trash-alt" style="color:red;"></i></a>--}}
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
        <!-- END Page Content -->

    </main>


    </main>
    <!-- END Main Container -->
@endsection