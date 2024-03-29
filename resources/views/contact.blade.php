@extends('layout')
@section('title', 'Contacto')
@section('content')
    {{-- <h1>{{ __('Contact') }}</h1>   utilizando traduccion lang/es.json --}}
    <h1>{{ __('Contact') }}</h1> 
    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name')}}"><br> 
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="text" name="email" placeholder="ing.eduardogb@cetac.com" value="{{ old('email')}}""> <br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="subject" name="subject" placeholder="Asunto" value="{{ old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        
        <textarea   name="content" placeholder="Mensaje" >{{ old('content')}}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <button>Enviar</button>

    </form>

@endsection