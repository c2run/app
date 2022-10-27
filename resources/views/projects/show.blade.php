@extends('layout')
@section('title', $project->title)

@section('content')
<h1>{{$project->title}}</h1>
<a href="{{route('portafolio/edit', $project)}}">Editar</a>
<p>{{$project->descripcion}}</p>
<p>{{$project->created_at->diffForHumans()}}</p>
@endsection