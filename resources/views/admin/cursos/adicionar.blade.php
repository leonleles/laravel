@extends('layout.template')

@section('title', 'Cursos')

@section('main')
    <div class="container">
        <h3 class='center'>Adicionar curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('admin.cursos._form')
                <button class="btn deep-orange" type="submit">Salvar</button>
            </form>
        </div>
    </div>
@endsection
