@extends("layouts.app")

@section("content")
    <div id="login__wrapper" class="container-fluid py-4">
        <div class="container py-3 w-auto text-center">
            <div id="login__card-wrapper" class="d-inline-block">

                <img id="login__image" class="img my-2" src="{{ asset('images/icon.png') }}" alt="Larabook">

                {{-- login panel --}}
                <div class="card border-0 shadow">

                    <div class="card-header pb-0  border-0 bg-transparent">
                        <h5 class="mt-3 mb-2">
                            {{ __('Log Into Larabook') }}
                        </h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- email or phone --}}
                                <div class="col-12 mb-3">
                                    <input class="form-control form-control-lg rounded-1 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="email"/>
                                    @error('email')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- password --}}
                                <div class="col-12 mb-3">
                                    <input class="form-control form-control-lg rounded-1 @error('error') is-invalid @enderror" type="password" name="password" placeholder="Password" required/>
                                    @error('password')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{--submit--}}
                                <div class="col-12">
                                    <button class="btn btn-lg btn-primary w-100 fw-bold rounded-1">
                                        {{ __('Log In') }}
                                    </button>
                                </div>
                                <div class="col-form-label my-2 text-center text-muted">
                                    {{-- forgot password --}}
                                    @if(Route::has('password.update'))
                                        <a class="text-decoration-none text-link" href="{{ route('password.update') }}">{{ __('Forgot password?') }}</a>
                                    @endif
                                    .
                                    {{-- register --}}
                                    @if(Route::has('register'))
                                        <a class="text-decoration-none text-link" href="{{ route('register') }}">{{ __('Sign up for Larabook') }}</a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <x-auth.footer></x-auth.footer>
@endsection
