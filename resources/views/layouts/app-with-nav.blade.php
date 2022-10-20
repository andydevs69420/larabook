@extends('layouts.app')


@section('content')

    {{-- nav --}}
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid justify-content-start justify-content-md-between">

            <button class="navbar-toggler text-primary" data-bs-toggle="collapse" data-bs-target="#app-with-nav__collapse-nav">
                <i class="navbar-toggler-icon"></i>
            </button>

            <div>
                <a class="text-decoration-none" href="{{ route('login') }}"><img class="navbar-brand img" src="{{ asset('images/icon.png') }}" alt="Larabook" width="130px"></a>
            </div>

            <div id="app-with-nav__collapse-nav" class="navbar-collapse collapse">
                <div class="container-fluid py-2 py-md-0">
                    <form action="{{ route('login') }}" method="POST">
                        <div class="row justify-content-center justify-content-md-end">
                            {{-- email --}}
                            <div class="col-12 col-md-auto px-0">
                                <input class="form-control rounded-1" type="email" name="Email" placeholder="Email"/>
                            </div>
                            {{-- password --}}
                            <div class="col-12 col-md-auto my-3 my-md-0 px-0 px-md-2">
                                <input class="form-control rounded-1" type="password" name="Password" placeholder="Password"/>
                            </div>
                            {{-- login btn --}}
                            <div class="col-12 col-md-auto px-0">
                                <button class="btn btn-primary fw-bold rounded-1">
                                    {{ __('Log In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    @section('main')
    @show

@endsection

