@extends('layouts.reset')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <p>Пожалуйста, укажите email, который Вы использовали для входа на сайт.</p>
            <div class="input-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail адрес" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
            <div class="input-group">
                <input type="submit" class="btn btn-primary submit-btn btn-block" value="Отправить ссылку на восстановление пароля" />
            </div>
        </div>
    </form>
    <div class="text-block text-center my-3">
        <span class="text-small font-weight-semibold">Еще не зарегистрированы в сервисе?</span>
        <a href="/register" class="text-black text-small">Зарегистрироваться</a>
    </div>
    <div class="text-block text-center my-3">
        <span class="text-small font-weight-semibold">Уже зарегистрированы?</span>
        <a href="/login" class="text-black text-small">Войти</a>
    </div>
@endsection
