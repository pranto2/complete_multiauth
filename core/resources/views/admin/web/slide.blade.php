@extends('layouts.master')
@section('head')
    <style>
        .container{
            margin-top:20px;
        }
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }
    </style>
@endsection
@section('content')
    <br>
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-red"></i>
                    <span class="caption-subject font-red sbold uppercase">Slider Table</span>
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
                                <a class="btn green" data-toggle="modal" href="#basic">Add New <i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add Slide Items</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form" method="post" action="{{route('slide.post')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                                            <!-- image-preview-input -->
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image" required/> <!-- rename it -->
                                    </div>
                                </span>
                                    </div><!-- /input-group image-preview [TO HERE]-->
                                    <div class="from-group">
                                        <label for="exampleSelect1">Bold Text</label>
                                        <input class="form-control" type="text" name="b_text" required>
                                    </div>
                                    <div class="from-group">
                                        <label for="exampleSelect1">Small Text</label>
                                        <input class="form-control" type="text" name="s_text" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                        <button class="btn green">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                    <thead>
                    <tr>
                        <th> Slide Image </th>
                        <th> Bold Text </th>
                        <th> Small Text </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($slide as $data)
                    <tr>
                        <td><img style="height: 60px;" src="{{asset('images/slide/' . $data->image)}}"></td>
                        <td> {{$data->b_text }} </td>
                        <td> {{$data->s_text }} </td>
                        <td>
                            <a class="edit" data-toggle="modal" href="#edit{{$data->id}}"> Edit </a>
                        </td>
                        <td>
                            <a class="delete" href="{{route('slide.delete', $data->id)}}"> Delete </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit{{$data->id}}" tabindex="-1" role="edit{{$data->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title">Edit Service Items</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form" method="post" action="{{route('slide.update', $data->id)}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{method_field('put')}}
                                        <div class="input-group image-preview">
                                            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                            <span class="input-group-btn">
                                    <!-- image-preview-clear button -->
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="glyphicon glyphicon-remove"></span> Clear
                                    </button>
                                                <!-- image-preview-input -->
                                    <div class="btn btn-default image-preview-input">
                                        <span class="glyphicon glyphicon-folder-open"></span>
                                        <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="image"/> <!-- rename it -->
                                    </div>
                                </span>
                                        </div><!-- /input-group image-preview [TO HERE]-->
                                        <div class="from-group">
                                            <label for="exampleSelect1">Bold Text</label>
                                            <input class="form-control" type="text" value="{{$data->b_text}}" name="b_text">
                                        </div>
                                        <div class="from-group">
                                            <label for="exampleSelect1">Small Text</label>
                                            <input class="form-control" type="text" value="{{$data->s_text}}" name="s_text">
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
@section('scripts')
    <script>
        $(document).on('click', '#close-preview', function(){
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
            // Set the popover default content
            $('.image-preview').popover({
                trigger:'manual',
                html:true,
                title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
                content: "There's no image",
                placement:'bottom'
            });
            // Clear event
            $('.image-preview-clear').click(function(){
                $('.image-preview').attr("data-content","").popover('hide');
                $('.image-preview-filename').val("");
                $('.image-preview-clear').hide();
                $('.image-preview-input input:file').val("");
                $(".image-preview-input-title").text("Browse");
            });
            // Create the preview image
            $(".image-preview-input input:file").change(function (){
                var img = $('<img/>', {
                    id: 'dynamic',
                    width:250,
                    height:200
                });
                var file = this.files[0];
                var reader = new FileReader();
                // Set preview image into the popover data-content
                reader.onload = function (e) {
                    $(".image-preview-input-title").text("Change");
                    $(".image-preview-clear").show();
                    $(".image-preview-filename").val(file.name);
                    img.attr('src', e.target.result);
                    $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
                }
                reader.readAsDataURL(file);
            });
        });
    </script>
    @endsection