@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
    <h1>Portafolio</h1>
    <ul>
       
    @forelse ($portafolio as $item)
          <li>  {{ $item->title }} </li>
          <br>
          <li>  {{ $item->descripcion }} </li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    </ul>
@endsection