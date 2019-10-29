@extends('layouts.baseLayout')

@section('content')
<section class="contact-us-section" id="contact-us-section">
    <div class="row">
        <div class="col-lg-6 ">
            <div class="container">
    <div class="row justify-content-center" style="margin-top:50px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-success text-center" style="font-family:Arial, Helvetica, sans-serif;fomt-weight
                :bold;font-size:20px">Login</div>
                <div class="contact-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Enter your Email" class="contact-frm active @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="contact-frm active @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" class="contact-btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <div class="col-lg-6 ">
                <div class="row">
                        <div class="col-lg-12 ">
                            <div class="container">
                    <div class="row justify-content-center" style="margin-top:50px">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-success text-center" style="font-family:Arial, Helvetica, sans-serif;fomt-weight
                                :bold;font-size:20px">Sign Up</div>
                                <div class="contact-form">
                                    <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="name" type="text" placeholder="Your Name" class="contact-frm active @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <input id="email" type="email" placeholder="Your Email Address" class="contact-frm active @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password" type="password" placeholder="Your Password" class="contact-frm active @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input id="password-confirm" placeholder="Confirm Password"  type="password" class="contact-frm active" name="password_confirmation" required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="contact-btn">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>

@endsection
