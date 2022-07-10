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



                <form method="POST" action="{{route('password.confirm.link')}}" class="m-3 p-5">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <h2 class="text-center pb-3">Reset Password</h2>
<p>Enter your email address and we will send you a link to reset your password</p>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            value="{{old('name')}}">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>

                        <button type="submit" name="submit"
                        class="btn btn-primary me-2 justify-items-center">Send Password Reset Link</button>

                       <br>
                       <br>
                        <a href="login">Login </a>
                </form>
            </div>
        </div>
    </div>

    </div>

</body>
</html>
