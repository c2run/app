@extends('layout')
@section('title', 'Editar proyecto')

@section('content')
    <h1>Editar proyecto</h1>
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{route('portafolio/update', compact('project'))}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <br>
        <label for="">Titulo del proyecto</label><br>
        <input type="text" name="title" value="{{old('title', $project->title)}}">
        </label>
        <br>
        <label for="">URL del proyecto</label>
        <input type="text" name="url" value="{{old('url',$project->url)}}">
        </label>
        <br>
        <label for="">Descripción del proyecto</label>
        <textarea name="descripcion">{{old('descripcion',$project->descripcion)}}</textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection