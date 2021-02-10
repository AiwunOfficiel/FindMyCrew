@extends('layouts.head')
@section('title', 'Inscription')

@section('content')
    <div class="login-wrap">
        <div class="login-content">
            <div class="login-logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="{{ env("APP_NAME") }}">
                </a>
            </div>
            <div class="login-form">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                     <div class="form-group">
                        <label>Pseudo</label>
                        <input class="au-input au-input--full" type="text" name="name" value="{{ old('name') }}" placeholder="Pseudo">
                        @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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
                    <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        
                        <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirmer le mot de passe">
                    </div>
                    <!--<div class="login-checkbox">
                        <label>
                            <input type="checkbox" name="aggree">Agree the terms and policy
                        </label>
                    </div>-->
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">S'inscrire</button>
                </form>
                <div class="register-link">
                    <p>
                        Vous possédez déjà un compte?
                        <a href="{{ route('login') }}">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection