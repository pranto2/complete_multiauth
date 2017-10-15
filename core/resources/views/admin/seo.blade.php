@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        <h3 class="sbold blog-comments-title">SEO Form</h3>
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        @foreach($seo as $seos)
        <form method="post" action="{{route('seo.update', $seos->id)}}">
            {{csrf_field()}}
            {{method_field('put')}}
            <div class="form-group">
                <input placeholder="Meta Keyword" class="form-control c-square" value="{{$seos->keyword}}" type="text" name="keyword"> </div>
            <h4>Meta Description</h4>
            <div class="form-group">
                <textarea rows="8" name="description" placeholder="Write comment here ..." class="form-control c-square">{{$seos->description}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
            </div>
            @endforeach
        </form>
    </div>
@endsection