@extends('layout')
@section('title', 'Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    <form action="{{route('portafolio/store')}}" method="POST">
        @csrf
        <label for="">Titulo del proyecto</label>
        <input type="text" name="title">
        </label>
        <br>
        <label for="">URL del proyecto</label>
        <input type="text" name="url">
        </label>
        <br>
        <label for="">Descripción del proyecto</label>
        <textarea name="descripcion"></textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection