<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 shadow">
                <form method="post" action="{{route('forgot-password')}}" class="m-3 p-5">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                     <h2 class="text-center pb-3">Reset Your Password</h2>

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
                        value="{{$email ?? old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}" id="exampleFormControlInput1">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}" id="exampleFormControlInput1">
                        <span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
                    </div>

                    <button type="submit" name="submit"
                        class="btn btn-primary me-2 justify-items-center">Reset Password</button>
                    <br>
                    <br>
                    <a href="login">Login</a>
                </form>
            </div>
        </div>

    </div>

</body>
</html>
