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
          <br>
          <li>  {{ $item->updated_at->diffForHumans()}} </li>
    @empty
    <li>No hay proyectos para mostrar</li>
    @endforelse
    {{ $portafolio->links()}}
    </ul>
@endsection