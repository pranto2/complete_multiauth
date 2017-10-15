@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">About Us Field</span>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{{route('about.update', $about->id)}}" id="form_sample_1" class="form-horizontal" method="post">
                            {{csrf_field()}}
                            {{method_field('put')}}
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-12">Title
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-12">
                                        <input type="text" name="title" value="{{$about->title}}" data-required="1" class="form-control" /> </div>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-12">Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-12">
                                        <textarea type="text" name="description" class="form-control">{{$about->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn green">Update</button>
                                        <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
@endsection


