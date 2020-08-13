@extends('layout.template')

@section('title', 'Introdução Laravel')

@section('main')
    <h3>View de contato</h3>
    @foreach($contatos as $contato)
        <p>{{$contato->nome}}</p>
        <p>{{$contato->telefone}}</p>
        <br>
    @endforeach
@endsection
