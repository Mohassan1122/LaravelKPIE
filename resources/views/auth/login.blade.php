@extends('layouts.app')

@section('content')
<div class="row img2">
    <div class="col-md-6 offset-md-3 mt-5 ">
        <form method="post" action="{{route('login-user')}}" class="m-3 p-5">
            @csrf

            <h1 class="display-5 text-white pb-3">RAKTAPP</h1>
            <p class="text-white"> <small> Share what's new and life moments with your friends.</small></p>

            @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if (Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                    value="{{old('email')}}">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="{{old('password')}}"
                    id="exampleFormControlInput1">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <button type="submit" name="submit" class="btn btn-primary me-2 justify-items-center">Login</button>
            <a class="btn btn-danger justify-items-center" href="{{route('home')}}">Back</a>
            <br>
            <br>
            <a href="{{route('password.confirm')}}">Forgot Password</a>

            <p class="mt-3"><small class="text-info">Login with Social Links</small></p>
            <i class="bi bi-google"><button type="button" class="btn btn-lg btn-primary" disabled>Sign
                    in</button></i>
            <br>
            <br>
            <a class="text-light" href="registration">New User ?? Register Here</a>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-md-11 bg-secondary">
        <video width="100%" height="100%" autoplay muted>
            <source src="../IMAGES/video.mp4" type="video/mp4">
        </video>
    </div>
</div>

@endsection
