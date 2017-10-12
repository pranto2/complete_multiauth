@extends('layouts.master')
@section('content')
    <br>
    <div class="col-md-12">
        <h3 class="sbold blog-comments-title">Contact Form</h3>
            <form action="#">
                <div class="form-group">
                    <input placeholder="Your Name" class="form-control c-square" type="text"> </div>
                <div class="form-group">
                    <input placeholder="Your Email" class="form-control c-square" type="text"> </div>
                <div class="form-group">
                    <input placeholder="Your Website" class="form-control c-square" type="text"> </div>
                <div class="form-group">
                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn blue uppercase btn-md sbold btn-block">Update</button>
                </div>
            </form>
    </div>
@endsection