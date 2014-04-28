@extends('layout')

@section('content')

    {{ Form::open(['route' => 'sessions.store', 'class' => 'well']) }}
        
        <!-- Username Field -->
        <div class="form-group">
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
            {{ $errors->first('username', '<span class="error">:message</span>') }}
        </div>

        <!-- Password Field -->
        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
            {{ $errors->first('password', '<span class="error">:message</span>') }}
        </div>

        <!-- Log In Field -->
        <div class="form-group">
            {{ Form::submit('Log In', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}
    
@stop