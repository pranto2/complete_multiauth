@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <h3 class="sbold blog-comments-title">General Setting</h3>
        @foreach($general as $general)
        <form action="{{route('general.update', $general->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="form-group">
                <input class="form-control c-square" type="text" value="{{$general->name}} " name="name"> </div>
            <div class="form-group">
                <input  class="form-control c-square" type="text" value="{{$general->color}}" name="color"> </div>
            <div class="form-group">
                <input class="form-control c-square" type="text" value="{{$general->mobile}}" name="mobile"> </div>
            <div class="form-group">
                <input  class="form-control c-square" type="text" value="{{$general->email}}" name="email"> </div>
            <div class="form-group">
                <input  class="form-control c-square" type="text" value=" {{$general->pay_email}}" name="pay_email"> </div>
            <div class="form-group">
                <input class="form-control c-square" type="text" value=" {{$general->footer}}" name="footer"> </div>
            <h4>Top Text</h4>
            <div class="form-group">
                <textarea rows="8" name="top_text"  class="form-control c-square">{{ $general->top_text }}</textarea>
            </div>
            <h4>Footer Text</h4>
            <div class="form-group">
                <textarea rows="8" name="footer_text"  class="form-control c-square">{{ $general->footer_text}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
            </div>
        </form>
            @endforeach
    </div>
@endsection