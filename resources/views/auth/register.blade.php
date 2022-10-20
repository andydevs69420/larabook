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
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                {{-- firstname --}}
                                <div class="col-6 mb-3 pe-1">
                                    <input class="form-control rounded-1 @error('firstname') is-invalid @enderror" type="text" name="firstname" value="{{ old('firstname') }}" placeholder="First name" required autofocus autocomplete="email"/>
                                    @error('firstname')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- lastname --}}
                                <div class="col-6 mb-3">
                                    <input class="form-control rounded-1 @error('lastname') is-invalid @enderror" type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Last name" required autofocus autocomplete="lastname"/>
                                    @error('lastname')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- email --}}
                                <div class="col-12 mb-3">
                                    <input class="form-control rounded-1 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="email"/>
                                    @error('email')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- password --}}
                                <div class="col-12">
                                    <input class="form-control rounded-1 @error('error') is-invalid @enderror" type="password" name="password" placeholder="Password" required/>
                                    @error('password')
                                        <span class="invalid-feedback text-start" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
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
                                            <select class="form-select" name="bmonth" required>
                                                <option selected value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Mar</option>
                                                <option value="4">Apr</option>
                                                <option value="5">May</option>
                                                <option value="6">Jun</option>
                                                <option value="7">Jul</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <select class="form-select" name="bday">
                                                @for ($day=1; $day <= 31; $day++)
                                                    <option {{($day == 1)?"selected":""}} value="{{ $day }}">{{ $day }}</option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-4">
                                            <select class="form-select" name="byear">
                                                @for ($year=\Illuminate\Support\Carbon::now()->year; $year >= 1905; $year--)
                                                    <option {{($year == \Illuminate\Support\Carbon::now()->year)?"selected":""}} value="{{ $year }}">{{ $year }}</option>
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

                                <div class="container-fluid">
                                    <div class="row" role="group">
                                        {{-- male --}}
                                        <div class="col-4">
                                            <span class="btn w-100 border">
                                                <div class="form-check px-2">
                                                    <label class="float-start" for="register__male-radio">Male</label>
                                                    <input id="register__male-radio" class="form-check-input float-end" type="radio" value="male" name="gender" autocomplete="off" />
                                                </div>
                                            </span>
                                        </div>
                                        {{-- female --}}
                                        <div class="col-4">
                                            <span class="btn w-100 border">
                                                <div class="form-check px-2">
                                                    <label class="float-start" for="register__female-radio">Female</label>
                                                    <input id="register__female-radio" class="form-check-input float-end" type="radio" value="female" name="gender" autocomplete="off" />
                                                </div>
                                            </span>
                                        </div>
                                        {{-- other --}}
                                        <div class="col-4">
                                            <span class="btn w-100 border">
                                                <div class="form-check px-2">
                                                    <label class="float-start" for="register__other-radio">Other</label>
                                                    <input id="register__other-radio" class="form-check-input float-end" type="radio" value="other" name="gender" autocomplete="off" />
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                {{-- text-0 --}}
                                <div class="col-12 mt-3 mb-2">
                                    <p class="small m-0 p-0 text-start text-muted lh-sm"
                                        style="font-size: 11px !important;">
                                        People who use our service may have uploaded your contact information to Larabook. <a class="small text-decoration-none text-link-sm" href="#">Learn more.</a>
                                    </p>
                                </div>

                                {{-- text-1 --}}
                                <div class="col-12">
                                    <p class="small text-start text-muted lh-sm"
                                        style="font-size: 11px !important;">
                                        By clicking Sign Up, you agree to our <a class="small text-decoration-none text-link-sm" href="#">Terms</a>, <a class="small text-decoration-none text-link-sm" href="#">Privacy Policy</a> and <a class="small text-decoration-none text-link-sm" href="#">Cookies Policy</a>. You may receive SMS Notifications from us and can opt out any time.
                                    </p>
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

                    {{-- card footer --}}
                    <div class="card-footer pt-0 pb-3 border-0 bg-transparent text-center">
                        <a href="{{ route('login') }}" class="lead text-decoration-none text-link-sm">Already have an account?</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <x-auth.footer></x-auth.footer>
@endsection
