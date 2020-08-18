@extends('layout.template')

@section('title', 'Cursos')

@section('main')
    <div class="container">
        <h3 class='center'>Editar curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')
                <button class="btn deep-orange" type="submit">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
