@extends('layout.template')

@section('title', 'Cursos')

@section('main')
    <div class="container">
        <h3 class='center'>Lista de cursos</h3>
        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->titulo}}</td>
                        <td>{{$registro->descricao}}</td>
                        <td>
                            <img width="50px" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}">
                        </td>
                        <td>{{$registro->publicado}}</td>
                        <td>
                            <a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id)}}">Editar</a>
                            <a class="btn red" href="{{route('admin.cursos.deletar', $registro->id)}}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
        </div>
    </div>
@endsection
