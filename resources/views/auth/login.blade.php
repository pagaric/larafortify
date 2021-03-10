@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>{{ __('Email') }}</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus />
        </div>

        <div>
            <label>{{ __('Mot de passe') }}</label>
            <input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div>
            <button type="submit">
               {{ __('Se connecter') }}
            </button>
        </div>
    </form>
@endsection