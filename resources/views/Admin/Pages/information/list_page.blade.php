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

            <!-- Dynamic Table Full -->
            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">{{__('language.List_Information')}}<small style="float:right;"><a href="{{url('admin/create-information')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> {{__('language.Create_New')}}</a></small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th>{{__('language.SN')}}</th>
                            <th>{{__('language.Information_Title')}}</th>
                            <th>{{__('language.Date')}}</th>
                            <th>{{__('language.Image')}}</th>
                            <th>{{__('language.Status')}}</th>
                            <th>{{__('language.Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($information as $key=> $info)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$info->title}}</td>
                            <td>
                            @if($info->color=='red')
                                    <span style="color: red">{{$info->info_date}}</span>
                                @else
                                    <span style="color: dodgerblue">{{$info->info_date}}</span>
                                @endif
                            </td>
                            <td>
                                @if(isset($info->image))
                                    <img src="{{url('public/uploads/information').'/'.$info->image}}" alt="" class="img-thumbnail" style="max-width:100px;">
                                    @endif
                            </td>
                            <td>
                                @if($info->status=='draft')
                                    <span class="badge badge-success">{{__('language.Draft')}}</span>
                                    @else
                                <span class="badge badge-info">{{__('language.Published')}}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{url('admin/list-information/edit-information').'/'.$info->id}}"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/list-information/').'/'.$info->id.'/delete'}}" onclick="return confirm('You are sure | Do want Delete')"><i class="fa fa-trash-alt" style="color:red;"></i></a>
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