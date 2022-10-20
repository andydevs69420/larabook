@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth::user()->firstname }}. {{ __('You are logged in!') }}

                    <br/>
                    <br/>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-sm btn-primary" type="submit">
                            LOGOUT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
