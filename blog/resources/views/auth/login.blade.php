@extends('layouts.principal')

@section('content')

    <h1> Inicio de sesión </h1>
    @if(isset($error))
       <p> <strong> {{ $error }} </strong> </p>
    @endif 
    {{ Form::open(array('url' => 'auth/login')) }} 
       {{ Form::label('email', 'Email') }}
       <br />
       {{ Form::text('email', '') }}
       <br />
       {{ Form::label('password', 'Contraseña') }}
       <br />
       {{ Form::password('password', '') }}
       <br /> 
       {{ Form::submit('Enviar') }} 
    {{ Form::close() }}


@endsection
