@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-6 mx-auto p-0">
                <div class=" loginContainer">
                    <div class="login-box">
                        <div class="login-snip">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                            <label for="tab-1" class="tab">Login</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up" onclick="window.location='register'" >
                            <label for="tab-2" class="tab">SignUp</label>

                            <div class="login-space ">
                                <div class="login mt-5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="group"> <label for="user"
                                                class="label">Username</label>
                                            <input id="email" type="email" placeholder="Enter your username"
                                                class="input @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="group"> <label for="pass" class="label">Password</label>
                            <input id="password" type="password" data-type="password" placeholder="Enter your password"
                                class="input @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="group">
                            <input class="check text-white" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="text-light">
                                <span class="icon"></span> &nbsp;&nbsp;{{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="group"> <input type="submit" class="button " value="Sign In"> </div>
                        <div class="hr"></div>
                        <div class="foot">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        </form>
                    </div>
                    <div class="sign-up-form mt-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input id="name" type="text" placeholder="Create your Username"
                                    class="input @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                                <input id="password" type="password" data-type="password" placeholder="Create your password"
                                    class="input @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="password-confirm" data-type="password" placeholder="Repeat your password"
                                    type="password" class="input" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input id="email" type="email" placeholder="Enter your email address"
                                    class="input @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
