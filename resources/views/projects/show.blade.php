@extends('layout')
@section('title', $project->title)

@section('content')
<h1>{{$project->title}}</h1>
<a href="{{route('portafolio/edit', $project)}}">Editar</a>
<form method="POST" action="{{ route('portafolio.destroy', $project)}}">
    @csrf @method('DELETE')
    <button> Eliminar </button>
</form>
<p>{{$project->descripcion}}</p>
<p>{{$project->created_at->diffForHumans()}}</p>
@endsection