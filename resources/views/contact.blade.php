@extends('layouts.app')

@section('content')
<h1>Content</h1>
{!! Form::open(['url' => 'contact/submit']) !!}

    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Entrez votre nom'])}}
    </div>
    
    <div class="form-group">
        {{Form::label('email', 'Votre adresse Mail')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Entrez une adresse mail'])}}
    </div>
    
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Tapez votre message'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection