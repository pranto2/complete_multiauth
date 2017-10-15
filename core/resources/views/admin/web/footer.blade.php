@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <h3 class="sbold blog-comments-title">Footer Control</h3>
        <form action="{{route('footer.update', $footer->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="form-group">
                <input class="form-control c-square" type="text" value="{{$footer->title}}" name="title"> </div>
            <div class="form-group">
                <textarea rows="8" name="detail" class="form-control c-square">{{$footer->detail}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
            </div>
        </form>
    </div>
@endsection