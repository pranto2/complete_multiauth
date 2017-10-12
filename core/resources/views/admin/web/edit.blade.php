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
            <form method="POST" action="{{url('update/'.$blog->id )}} " enctype="multipart/form-data">
                {{ csrf_field() }}
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Edit Form</h3>
                <div class="form-group">
                    <label for="exampleSelect1">Category select</label>
                    <select class="form-control" id="exampleSelect1" name="category" >
                        <option value="none" {{ $blog->category == "none" ? 'selected' : '' }} >{{ $blog->category }}</option>
                        <option value="sports"{{ $blog->category == "sports" ? 'selected' : '' }}>Sports</option>
                        <option value="music" {{ $blog->category == "music" ? 'selected' : '' }} >Music</option>
                        <option value="news" {{ $blog->category == "news" ? 'selected' : '' }} >News</option>
                        <option value="others" {{ $blog->category == "others" ? 'selected' : '' }}>Others</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Blog Image File input</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" name="image" value="" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">All Type Image Supported.</small>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" name="description" id="description" >{{$blog->description}}</textarea>
                </div>
                <button name="submit" class="btn btn-primary pull-right">Update</button>
            </form>
        </div>
@endsection


