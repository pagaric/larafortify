@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div>
        <p>Désolé mais votre compte a été désactivé !</p>
        {{-- <p>Bonjour {{ Auth::user()->name }}, vous êtes bien connecté !</p> --}}
    </div>

    <hr>

@endsection