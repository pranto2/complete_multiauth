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
        <form method="POST" action="{{url('admin/blogpost')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br style="clear:both">
            <h3 style="margin-bottom: 25px; text-align: center;">Blog Form</h3>
            <div class="form-group">
                <label for="exampleSelect1">Category select</label>
                <select class="form-control" id="exampleSelect1" name="category">
                    <option value="none">None</option>
                    <option value="sports">Sports</option>
                    <option value="music">Music</option>
                    <option value="news">News</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Blog Image File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" name="image" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">All Type Image Supported.</small>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" type="textarea" name="description" id="description" placeholder="Description"></textarea>
            </div>
            <button name="submit" class="btn btn-primary pull-right">Post</button>
        </form>
    </div>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Blog Content Chart</div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                    <tr>
                        <th> Id </th>
                        <th> Title</th>
                        <th> Image </th>
                        <th> Category </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blog as $key => $blogs)
                    <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$blogs->title}} </td>
                        <td><img src="{{asset('images/' . $blogs->image)}}" height="50px"></td>
                        <td> {{$blogs->category}} </td>
                        <td>
                            <a href=" {{'/edit/'.$blogs->id}} ">Edit</a>
                            <a href=" {{'/delete/'.$blogs->id}} ">Delete</a>
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


