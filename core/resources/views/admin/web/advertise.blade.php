@extends('layouts.master')
@section('content')
    <br>
    <br>
    <br>
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-purple-soft"></i>
                        <span class="caption-subject font-purple-soft bold uppercase">Advertisement</span>
                    </div>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                <div class="portlet-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1_1" data-toggle="tab"> Script Advertise </a>
                        </li>
                        <li>
                            <a href="#tab_1_2" data-toggle="tab"> Affiliate Advertise </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab_1_1">
                            <form class="form-horizontal" role="form" method="post" action="{{route('affiatepost')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="type" value="0">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Image Size </label>
                                    <div class="col-md-10">
                                        <label for="exampleSelect1">Image Size Select</label>
                                        <select class="form-control" id="exampleSelect1" name="image_size">
                                            <option value="0">300 * 255</option>
                                            <option value="1">300 * 600</option>
                                            <option value="2">728 * 90</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <label for="inputEmail1" class="col-md-2 control-label">Script</label>
                                        <textarea class="form-control"  id="inputEmail1" placeholder="Script" name="script" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn green">Save</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_1_2">
                            <form class="form-horizontal" role="form" method="post" action="{{route('affiatepost')}}"  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="type" value="1">
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Url/Link</label>
                                    <div class="col-md-10">
                                        <input class="form-control" id="inputEmail1" placeholder="Url" type="text" name="link" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Image Size Select</label>
                                    <div class="col-md-10">
                                        <label for="exampleSelect1">Image Size select</label>
                                        <select class="form-control" id="exampleSelect1" name="image_size">
                                            <option value="0">300 * 255</option>
                                            <option value="1">300 * 600</option>
                                            <option value="2">728 * 90</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-md-2 control-label">Advertise Image</label>
                                    <div class="col-md-4">
                                        <input type="file" class="form-control-file" id="exampleInputFile" name="image" required="required">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn green">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

@endsection