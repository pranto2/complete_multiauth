@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Statistic Account Table</span>
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
                                <a class="btn green" href="http://fontawesome.io/icons/">
                                    <i class="fa fa-font-awesome" aria-hidden="true"></i>
                                    Find Icon from Font Awesome</a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                    <tr>
                        <th> Font-Awesome Icon </th>
                        <th> Bold Text </th>
                        <th> Small Text </th>
                        <th> Edit </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stas as $st )
                    <tr>
                        <td><i class="fa fa-{{$st->icon}}"></i></td>
                        <td>{{$st->b_text}}</td>
                        <td>{{$st->s_text }}</td>
                        <td>
                            <a class="edit" data-toggle="modal" href="#edit{{$st->id}}"> Edit </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit{{$st->id}}" tabindex="-1" role="edit{{$st->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Edit Statistics Items</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="post" action="{{route('statistics.update', $st->id)}}">
                                        {{ csrf_field() }}
                                        {{method_field('put')}}
                                        <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <p class="icheck-inline">fa fa-</p>
                                                    </span>
                                            <input type="text" name="icon" class="form-control" value="{{$st->icon}}"> </div>
                                        <div class="from-group">
                                            <label for="exampleSelect1">Bold Text</label>
                                            <input class="form-control" type="text" name="b_text" value="{{$st->b_text}}" required>
                                        </div>
                                        <div class="from-group">
                                            <label for="exampleSelect1">Small Text</label>
                                            <input class="form-control" type="text" name="s_text" value="{{$st->s_text}}" required>
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