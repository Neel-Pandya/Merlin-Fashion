@extends('guest.master')

@section('titles')
    login page
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <body>
        <div class="container col-4">
            <input type="checkbox" id="check">
            <div class="login form">
                <header>Login</header>
                <form action="{{ route('guest.login.validate') }}" method="POST">
                    @csrf
                    <input type="text" placeholder="Enter your email" name="customer_email" class="mt-5"
                        value="{{ old('customer_email') }}">
                    <span class="text-danger">
                        @error('customer_email')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="password" placeholder="Enter your password" name="customer_password" class="mt-5"
                        value="{{ old('customer_password') }}">
                    <span class="text-danger">
                        @error('customer_password')
                            {{ $message }}
                        @enderror
                    </span>
                    <br><br>

                    <input type="submit" class="button" value="Login">
                </form>
                <div class="signup">
                    <span class="signup">Don't have an account?
                        <a href="{{ route('guest.register') }}">Register</a>
                    </span>
                </div>
            </div>
        </div>
    </body>
@endsection
