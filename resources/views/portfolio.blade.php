@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
    <h1>Portafolio</h1>
    <ul>
        @isset ($portafolio)  
    @foreach ($portafolio as $item)
          <li>  {{ $item['title'] }} </li>
    @endforeach
    @else
    <li>No hay proyectos para mostrar</li>
    @endisset
    </ul>
@endsection