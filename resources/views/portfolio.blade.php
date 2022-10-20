@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
    <h1>Portafolio</h1>
    <ul>
    @foreach ($portafolio as $item)
          <li>  {{ $item['title'] }} </li>
    @endforeach 
    </ul>
@endsection