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
                    <h3 class="block-title">{{__('language.List_Events')}}<small style="float:right;"><a href="{{url('admin/create_event')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> {{__('language.Create_New')}}</a></small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th>{{__('language.SN')}}</th>
                            <th>{{__('language.Event_Title')}}</th>
                            <th>{{__('language.Event_Start')}}</th>
                            <th>{{__('language.Event_End')}}</th>
                            <th>{{__('language.Image')}}</th>
                            <th>{{__('language.Post_Status')}}</th>
                            <th>{{__('language.Expiry_Date')}}</th>
                            <th>{{__('language.Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list_events as $key=>$event)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->start_date}}</td>
                            <td>{{$event->end_date}}</td>
                            <td>
                                @if(isset($event->event_image))
                                    <img src="{{url('public/uploads/event').'/'.$event->event_image}}" alt="" class="img-thumbnail" style="max-width:100px;">
                                    @endif
                            </td>
                            <td>
                                @if($event->status=='draft')
                                    <span class="badge badge-success">Draft</span>
                                    @else
                                <span class="badge badge-info">Published</span>
                                @endif
                            </td>
                            <td>{{$event->expiry_date}}</td>
                            <td>
                                <a href="{{url('admin/list_events/edit_events').'/'.$event->id}}"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/list_events/edit_events').'/'.$event->id.'/delete'}}"><i class="fa fa-trash-alt" style="color:red;"></i></a>
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