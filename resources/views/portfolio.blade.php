@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
    <h1>Portafolio</h1>
    <ul>
       
    @forelse ($portafolio as $item)
          <li> <a href="{{ route('portafolio/show', $item->id)}}"> {{ $item->title }} </a></li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    {{ $portafolio->links()}}
    </ul>
@endsection