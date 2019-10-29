@extends('layouts.baseLayout')

@section('content')
<section class="contact-us-section" id="contact-us-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card contact-form">
                <div class="card-header text-center text-success" style="font-size:20px;background-color:#1b1829;font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:white !important">{{ __('Register') }} For An Account With  {{config('app.name')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="contactForm" method="post" class="contact-form-aqua">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Your Names" class="contact-frm active @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="password" type="password" placeholder="Password" class="contact-frm active @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Confirm the Password" type="password" class="contact-frm active" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" class="contact-btn">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-link" href="/login">
                                    {{ __('Already A Member? Sign In') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
