@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
    <h1>Portafolio</h1>
    <a href="{{route('portafolio/create')}}">Crear proyecto</a>
    <ul>
    @forelse ($portafolio as $item)
          <li> <a href="{{ route('portafolio/show', $item->url)}}"> {{ $item->title }} </a></li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    {{ $portafolio->links()}}
    </ul>
@endsection