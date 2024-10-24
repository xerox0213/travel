@extends('canvas')
@section('title', 'Connexion')
@section('content')
    <h2 class="main__title">Connexion</h2>
    <form action="{{route('login.post')}}" method="post" class="login-form">
        @csrf
        <label for="login">Login : </label>
        <input type="text" id="login" name="login">
        <button type="submit">Se connecter</button>
    </form>
@endsection
