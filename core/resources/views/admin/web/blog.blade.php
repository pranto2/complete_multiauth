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
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                <div class="form-group">
                    <label for="exampleSelect1">Category select</label>
                    <select class="form-control" id="exampleSelect1" name="category">
                        @foreach($cetagory_select as $key => $cetagory)
                            <option value="{{ $cetagory }}">{{$cetagory->name}}</option>
                        @endforeach
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
    </div>
@endsection


