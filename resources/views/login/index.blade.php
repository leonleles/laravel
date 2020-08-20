@extends('layout.template')

@section('title', 'Login')

@section('main')
    <div class="container">
        <h3 class='center'>Login</h3>
        <div class="row">
            <form action="{{route('site.login.entrar')}}" method="post">
                {{csrf_field()}}
                <div class="input-field">
                    <input type="email" name="email">
                    <label for="">Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="senha">
                    <label for="">Senha</label>
                </div>
                <button class="btn deep-orange" type="submit">Entrar</button>
            </form>
        </div>
    </div>
@endsection
