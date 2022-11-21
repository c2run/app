@extends('layout')
@section('title')
Contacto
@endsection
@section('content')
    <h1>Contacto</h1>
    @if(session('status'))
    {{ session('status')}}
    @endif

    @if ($errors->any())
       @foreach ($errors->all() as $error)
           <p> {{ $error }} </p>
       @endforeach
    @endif
    <form action="{{route('contacto')}}" method="POST">
        @csrf
        <input name="name" placeholder="Nombre..." type="text" value="{{old('name')}}">
        <br>
        <input name="email" placeholder="Email..." type="email" value="{{old('email')}}">
        <br>
        <input name="asunto" placeholder="Asunto..." type="text" value="{{old('asunto')}}">
        <br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje..." value="{{old('content')}}"></textarea>
        <br>
        <button>Enviar</button>
    </form>
@endsection