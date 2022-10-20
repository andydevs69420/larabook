@extends("layouts.app")

@section("content")
    <div id="login__wrapper" class="container-fluid py-4">
        <div class="container my-0 my-md-5 py-2 py-md-3 pb-md-5 w-auto text-center">
            <div class="row">
                <div class="col-10 col-md-5 offset-1 offset-md-1 text-center text-md-start">
                    <img id="login__image" class="img mt-1 mt-md-5 mx-auto ms-md-0" src="{{ asset('images/facebook.svg') }}" alt="Facebook" />
                    <p class="d-inline-block ps-4 fs-3 lead w-100">
                        Connect with friends and the world around you on Facebook.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div id="login__card-wrapper" class="d-inline-block">
                        {{-- login panel --}}
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        {{-- email or phone --}}
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control form-control-lg rounded-1 @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" placeholder="Email or phone number" required autofocus autocomplete="email"/>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- password --}}
                                        <div class="col-12 mb-3">
                                            <input type="text" class="form-control form-control-lg rounded-1 @error('error') is-invaid @enderror" type="password" placeholder="Password" required/>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                        {{--submit--}}
                                        <div class="col-12">
                                            <button class="btn btn-lg btn-primary w-100 fw-bold rounded-1">
                                                {{ __('Log In') }}
                                            </button>
                                        </div>
                                        {{-- forgot password --}}
                                        @if(Route::has('password.update'))
                                            <div class="col-form-label mt-3 mb-2">
                                                <a class="text-decoration-none" href="{{ route('password.update') }}">Forgot password?</a>
                                            </div>
                                        @endif
                                        {{-- hr --}}
                                        <div class="col-12">
                                            <hr class="m-0 opacity-25">
                                        </div>
                                        {{-- create --}}
                                        <div class="col-12 mt-4 mb-2">
                                            <button class="btn btn-lg btn-warning text-light fw-bold rounded-1">
                                                {{ __('Create new account') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- create page label --}}
                        <span class="d-block mt-4" style="font-size: 1em !important; font-family: Helvetica, sans-serif !important;">
                            <a class="fw-bold text-decoration-none text-dark" href="#">Create a Page</a> for a celebrity, brand or business.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <x-auth.footer></x-auth.footer>
@endsection
