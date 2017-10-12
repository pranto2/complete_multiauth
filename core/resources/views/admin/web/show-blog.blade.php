@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
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
                        <th> Image </th>
                        <th> Title</th>
                        <th> Category </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blog as $key => $blogs)
                        <tr>
                            <td> {{$key+1}} </td>
                            <td><img src="{{asset('images/' . $blogs->image)}}" height="50px"></td>
                            <td> {{$blogs->title}} </td>
                            <td> {{$blogs->category}} </td>
                            <td>
                                <a class="btn green btn-outline btn-circle btn-sm active" href=" {{'blog-edit/'.$blogs->id}} ">Edit</a> 	&nbsp; 	&nbsp; 	&nbsp;
                                <a class="btn red btn-outline btn-circle btn-sm active" href="{{'post-delete/' .$blogs->id}}">Delete</a>
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