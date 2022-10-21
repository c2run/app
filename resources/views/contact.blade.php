@extends('layout')
@section('title')
Contacto
@endsection
@section('content')
    <h1>Contacto</h1>
    <form action="{{route('contacto')}}" method="POST">
        @csrf
        <input name="name" placeholder="Nombre..." type="text">
        <br>
        <input name="email" placeholder="Email..." type="email">
        <br>
        <input name="name" placeholder="Asunto..." type="text">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje..."></textarea>
        <br>
        <button>Enviar</button>
    </form>
@endsection