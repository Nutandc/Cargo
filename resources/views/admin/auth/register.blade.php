@extends('admin.auth.app')
@section('title') @lang('app.register') @endsection
@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        @honeypot
        <div class="mb-3">
            <label for="name" class="form-label">@lang('app.name')</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autofocus>
            @error('name')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">@lang('app.username')</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" autocomplete="off" aria-describedby="usernameHelp">
            @error('username')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
            <div id="usernameHelp" class="form-text">We'll never share your username with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">@lang('app.password')</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
            @error('password')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">@lang('app.password-confirmation')</label>
            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">
            <i class="bi bi-person-plus me-1"></i> @lang('app.register')
        </button>
    </form>
@endsection