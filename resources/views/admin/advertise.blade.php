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
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-area">
            <form method="POST" action="{{route('addpost')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Advertise Form</h3>
                <div class="form-group">
                    <label for="exampleInputFile">Image Add File To Advertisement</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name="image" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">All Type Image Supported.</small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="link" placeholder="Image Add Link" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="script" placeholder="Script Add" required>
                </div>
                <button name="submit" class="btn btn-primary pull-right">Post</button>
            </form>
        </div>
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Advertise List</div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                        <thead>
                        <tr>
                            <th> Id </th>
                            <th> Image Link </th>
                            <th> Image </th>
                            <th> Script </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($add as $key => $adds)
                            <tr>
                                <td> {{$key+1}} </td>
                                <td> {{$adds->link}} </td>
                                <td><img src="{{asset('images/' . $adds->image)}}" height="50px"></td>
                                <td> {{$adds->script}} </td>
                                <td>
                                    <a href="">Edit</a>
                                    <a href=" {{'advertisement/delete/'.$adds->id}} ">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
    </div>
@endsection