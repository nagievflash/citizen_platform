@extends('layouts.register')

@section('content')


<form method="POST" action="{{ route('register') }}">
    @csrf
    <p>Контактные данные</p>
    <div class="form-group">
        <div class="input-group">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Ваше имя" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="second_name" type="text" class="form-control @error('second_name') is-invalid @enderror" placeholder="Ваше фамилия" name="second_name" value="{{ old('second_name') }}" required autocomplete="name" autofocus>
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('second_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Еmail" name="email" value="{{ old('email') }}" required autocomplete="email">
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
            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Номер телефона" name="phone" value="{{ old('phone') }}" required autocomplete="email">
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <hr />
    <p>Адрес регистрации</p>
    <div class="form-group">
        <div class="input-group">
            <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="Город" name="city" value="{{ old('city') }}" required autocomplete="city" />
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" placeholder="Улица" name="street" value="{{ old('street') }}" required autocomplete="street" />
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('street')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <input id="house" type="text" class="form-control @error('house') is-invalid @enderror" placeholder="Номер дома" name="house" value="{{ old('house') }}" required autocomplete="house" />
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
            @error('house')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <hr />
    <div class="form-group">
        <div class="input-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Пароль" name="password" required autocomplete="new-password">
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
        <div class="input-group">
            <input id="password-confirm" type="password" class="form-control" placeholder="Повторите пароль" name="password_confirmation" required autocomplete="new-password">
            <div class="input-group-append">
                <span class="input-group-text">
                <i class="mdi mdi-check-circle-outline"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary submit-btn btn-block" value="Зарегистрироваться" />
    </div>
    <div class="text-block text-center my-3">
        <span class="text-small font-weight-semibold">Уже зарегистрированы?</span>
        <a href="/login" class="text-black text-small">Войти</a>
    </div>
</form>

@endsection
