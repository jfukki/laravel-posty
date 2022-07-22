@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 registeration-card my-3">
                <h3>Register Here</h3>
            <form action="{{route('userregister')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" >                     
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Username" >                     
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Your Email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Repeat Your Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Please Repeat Your Password">
                </div>
                
                <button type="submit" class="btn btn-outline-secondary register-btn">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection