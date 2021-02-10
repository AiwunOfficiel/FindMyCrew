@extends('layouts.head')
@section('title', 'Connexion')

@section('content')
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="{{ env("APP_NAME") }}">
                </a>
            </div>
            <div class="login-form">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input class="au-input au-input--full" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Se connecter</button>
                </form>
                <div class="register-link">
                    <p>
                        Vous ne possédez pas de compte?
                        <a href="{{ route('register') }}">S'inscrire</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection