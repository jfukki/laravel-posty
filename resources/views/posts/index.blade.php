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

    <div class="container my-3">
        <div class="row">
            <div class="col-md-8 offset-md-2 posts-card-homepage">
                @if($posts->count())
                
                @foreach($posts as $post)
                    
                    <div class="card-body">
                    <h5 class="card-title">{{$post->user->name}}</h5>
                    <p class="card-text">{{$post->body}} <br> 
                    <small>{{$post->created_at->diffForHumans()}}</small>
                    </p>
                    
                    <hr>
            </div>
                @endforeach

                @else
                    <p>no posts here</p>
                @endif
                
            </div>
        </div>
    </div>
@endsection