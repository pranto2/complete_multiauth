@extends('layouts.master')
@section('head')
    <style>
        .red{
            color:red;
        }
        .form-area
        {
            background-color: #FAFAFA;
            padding: 10px 40px 60px;
            margin: 10px 0px 60px;
            border: 1px solid GREY;
        }
    </style>
@endsection
@section('content')
<br>
<div class="col-md-12">
<div class="form-area">
<form method="POST" action="{{route('postmenu')}}">
    {{ csrf_field() }}
    <br style="clear:both">
    <h3 style="margin-bottom: 25px; text-align: center;">Category Create</h3>
    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <div class="form-group">
        <input type="text" class="form-control" id="menu" name="name" placeholder="Menu" required>
    </div>
    <button name="submit" class="btn btn-primary pull-right">Post</button>
</form>

{{--table--}}

<table class="table table-striped">
    <thead>
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($menu as $menus)
        <tr>
            <td>{{$menus->id}}</td>
            <td>{{$menus->name}}</td>
            <td>
                <a class="btn btn-success" data-toggle="modal" href="#basic{{$menus->id}}"> Edit </a>
                <a class="btn btn-danger" href="{{'menu/delete/'.$menus->id}}"> Delete </a>
            </td>
        </tr>
        <div class="modal fade" id="basic{{$menus->id}}" tabindex="-1" role="basic{{$menus->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Menu Update</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('menu.update',$menus->id)}}">
                            {{ csrf_field() }}
                            {{method_field('put')}}
                            <div class="from-group">
                                <label for="exampleSelect1">{{$menus->name}} Name Update</label>
                                <input class="form-control" type="text" name="name" value="{{$menus->name}}" required>
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
<!-- BEGIN EXAMPLE TABLE PORTLET-->
@endsection


