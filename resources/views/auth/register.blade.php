@extends("layouts.app")

@section("content")
    <div id="register__wrapper" class="container-fluid py-4">
        <div class="container w-auto text-center">
            <div id="register__card-wrapper" class="d-inline-block">

                <img id="register__image" class="img mb-3" src="{{ asset('images/icon.png') }}" alt="Larabook">

                {{-- register panel --}}
                <div class="card border-0 shadow">

                    <div class="card-header pb-0 bg-transparent">
                        <h5 class="mt-2 mb-0 pb-0 fs-3 fw-bold"
                            style="font-family: Helvetica, sans-serif !important;">
                            {{ __('Create a new account') }}
                        </h5>
                        <div class="mb-2">
                            <span class="text-center text-muted"
                                style="font-size: 15px !important;">
                                It’s quick and easy.
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- firstname --}}
                                <div class="col-6 mb-3 pe-1">
                                    <input type="text" class="form-control rounded-1 @error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First name" required autofocus autocomplete="email"/>
                                    @error('firstname')
                                        <div class="invalid-feedback">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                {{-- lastname --}}
                                <div class="col-6 mb-3">
                                    <input type="text" class="form-control rounded-1 @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Last name" required autofocus autocomplete="lastname"/>
                                    @error('lastname')
                                        <div class="invalid-feedback">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                {{-- email --}}
                                <div class="col-12 mb-3">
                                    <input type="text" class="form-control rounded-1 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="email"/>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>
                                {{-- password --}}
                                <div class="col-12">
                                    <input type="text" class="form-control rounded-1 @error('error') is-invalid @enderror" type="password" name="password" placeholder="Password" required/>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                {{-- label bday --}}
                                <div class="col-form-label text-start">
                                    <span class="text-muted small">
                                        Birthday <i class="fa-solid fa-circle-question"></i>
                                    </span>
                                </div>

                                {{-- birthday group --}}
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4">
                                            <select class="form-select" name="bmonth">
                                                <option value="0">Jan</option>
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <select class="form-select" name="bday">
                                                @for ($day=1; $day <= 31; $day++)
                                                    <option value="{{ $day }}">{{ $day }}</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <select class="form-select" name="bday">
                                                @for ($year=\Illuminate\Support\Carbon::now()->year; $year >= 1905; $year--)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                 {{-- label gender --}}
                                 <div class="col-form-label text-start">
                                    <span class="text-muted small">
                                        Gender &nbsp; <i class="fa-solid fa-circle-question"></i>
                                    </span>
                                </div>

                                {{--submit--}}
                                <div class="col-12">
                                    <button class="btn btn-sm btn-warning px-5 text-light fw-bold fs-5">
                                        {{ __('Sign Up') }}
                                    </button>
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
