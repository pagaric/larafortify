@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <div>{{ __('Quelque chose s\'est mal passé') }}</div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>{{ __('Nom') }}</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
        </div>

        <div>
            <label>{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required />
        </div>

        <div>
            <label>{{ __('Mot de passe') }}</label>
            <input type="password" name="password" required autocomplete="new-password" />
        </div>

        <div>
            <label>{{ __('Confirmer le mot de passe') }}</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <a href="{{ route('login') }}">
            {{ __('Déjà enregistré?') }}
        </a>

        <div>
            <button type="submit">
                {{ __('Enregistrer') }}
            </button>
        </div>
    </form>
@endsection