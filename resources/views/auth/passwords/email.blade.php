@extends('layouts.app-with-nav')

@section('main')
    <div id="email__wrapper" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 col-md-6 col-lg-5">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="card border-0 shadow-sm">

                        <div class="card-header py-3 fw-bold fs-5 bg-transparent"
                            style="font-family: Helvetica, sans-serif">
                            {{ __('Reset Your Account') }}
                        </div>

                        <div class="card-body">

                            <p class="card-text lead">
                                Please enter your email to send a reset link in your account.
                            </p>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row mb-3">
                                <div class="col-12">
                                    <input id="email" type="email" class="form-control form-control-lg rounded-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus />

                                    @error('email')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="card-footer py-3 bg-transparent">
                            <div class="row justify-content-end">
                                {{-- cancel --}}
                                <div class="col-auto px-1">
                                    <a type="button" class="btn btn-light fw-bold"
                                        href="{{ route('login') }}"
                                        style="background-color: #eeeeee !important">
                                        <span class="opacity-75 text-dark">
                                            {{ __('Cancel') }}
                                        </span>
                                    </a>
                                </div>
                                {{-- submit --}}
                                <div class="col-auto px-1">
                                    <button type="submit" class="btn btn-primary fw-bold">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <x-auth.footer></x-auth.footer>
@endsection
