@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-8 offset-md-2 posts-card-homepage">
                <form action="{{route('posts')}}" method="POST" class="form-group">
                    @csrf <small class="form-alert">@error('postBody')  {{$message}} @enderror</small>   
                    <textarea name="postBody" id="" cols="30" rows="4" class="form-control"  placeholder="Enter Your Post Here"></textarea>
                   
                    <button class="btn btn-sm btn-outline-dark my-3 post-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection