@extends('layout.template')

@section('title', 'Cursos')

@section('main')
    <div class="container">
        <h3 class='center'>Lista de cursos</h3>
        <div class="row">
            @foreach($cursos as $curso)
                <div class="col s7 m7">
                    <div class="card">
                        <div class="card-image">
                            <img width="120px" height="120px" style="object-fit: contain" src="{{asset($curso->imagem)}}">
                        </div>
                        <div class="card-content">
                            <h4>{{$curso->titulo}}</h4>
                            <p>{{$curso->descricao}}</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Ver mais</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
