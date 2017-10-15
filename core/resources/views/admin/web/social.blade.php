@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">

        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Social Account Table</span>
                </div>
            </div>
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a class="btn green" data-toggle="modal" href="#basic">Add New Social Account<i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a class="btn green" href="http://fontawesome.io/icons/">
                                    <i class="fa fa-font-awesome" aria-hidden="true"></i>
                                    Find Icon from Font Awesome</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add Service Items</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="post" action="{{route('social.post')}}">
                                    {{ csrf_field() }}
                                    <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <p class="icheck-inline">fa fa-</p>
                                                    </span>
                                        <input type="text" name="icon" class="form-control" required> </div>
                                    <div class="from-group">
                                        <label for="exampleSelect1">Title</label>
                                        <input class="form-control" type="text" name="title" required>
                                    </div>
                                    <div class="from-group">
                                        <label for="exampleSelect1">Link/ Url</label>
                                        <input class="form-control" type="text" name="link" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                        <button class="btn green">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>

                    <tr>
                        <th> Service Icon </th>
                        <th> Title </th>
                        <th> Link </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($social as $data)
                    <tr>
                        <td><i class="fa fa-{{$data->icon}}"></i></td>
                        <td> {{$data->title}} </td>
                        <td> {{$data->link}} </td>
                        <td>
                            <a class="edit" data-toggle="modal" href="#edit{{$data->id}}"> Edit </a>
                        </td>
                        <td>
                            <a class="delete" href="{{route('social.delete', $data->id )}}"> Delete </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="edit{{$data->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Edit Service Items</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="post" action="{{route('social.update', $data->id)}}">
                                        {{ csrf_field() }}
                                        {{method_field('put')}}
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <p class="icheck-inline">fa fa-</p>
                                                    </span>
                                            <input type="text" name="icon" class="form-control" value="{{$data->icon}}" required> </div>
                                        <div class="from-group">
                                            <label for="exampleSelect1">Title</label>
                                            <input class="form-control" type="text" name="title" value="{{$data->title}}" required>
                                        </div>
                                        <div class="from-group">
                                            <label for="exampleSelect1">Link </label>
                                            <input class="form-control" type="text" name="link" value="{{$data->link}}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                            <button class="btn green">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection