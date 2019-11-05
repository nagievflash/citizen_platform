@extends('layouts.auth')

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="email" class="label">Ваш e-mail</label>

        <div class="input-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="label">Ваш пароль</label>

        <div class="input-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary submit-btn btn-block" value="Войти" />
    </div>



    <div class="form-group d-flex justify-content-between">
        <div class="form-check form-check-flat mt-0">
            <label class="form-check-label">
            <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> Запомнить меня <i class="input-helper"></i></label>
        </div>
        @if (Route::has('password.request'))
            <a class="text-small forgot-password text-black" href="{{ route('password.request') }}">
                Забыли пароль?
            </a>
        @endif
    </div>

    <div class="form-group">
        <button class="btn btn-block g-login">
        <img class="mr-3" src="../../../assets/images/file-icons/icon-google.svg" alt="">Войти с помощью Google</button>
    </div>

    <div class="text-block text-center my-3">
        <span class="text-small font-weight-semibold">Еще не зарегистрированы в сервисе?</span>
        <a href="/register" class="text-black text-small">Зарегистрироваться</a>
    </div>

</form>

@endsection
