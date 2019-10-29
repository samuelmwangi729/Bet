@extends('layouts.baseLayout')

@section('content')
<section class="contact-us-section" id="contact-us-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card contact-form">
                <div class="card-header text-center text-success" style="font-size:20px;background-color:#1b1829;font-family:Arial, Helvetica, sans-serif;font-weight:bold;color:white !important">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" id="contactForm" method="post" class="contact-form-aqua">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email"  placeholder="Your Email Address" type="email" class="contact-frm active @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-0">
                                <button type="submit" class="contact-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                                <a class="btn btn-link" href="/login">
                                    {{ __('Sign In') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
@endsection
