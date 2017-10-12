@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-4">
        <h3 class="sbold blog-comments-title">Logo Update Form</h3>
        <form action="#">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                        <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> Select image </span>
                        <span class="fileinput-exists"> Change </span>
                        <input type="file" name="..."> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <h3 class="sbold blog-comments-title">Icon Form</h3>
        <form action="#">
            <div class="form-group">
                <div class="col-md-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                        <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> Select image </span>
                        <span class="fileinput-exists"> Change </span>
                        <input type="file" name="..."> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
@endsection
