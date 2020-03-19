@extends('layouts.app')

@section('content')
  <h1>Create Todo</h1>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
  	{{ Form::bsText('text') }} <!-- 'text' This shit is very case sensitive -->
  	{{ Form::bsTextArea('body') }} <!-- This shit is very case sensitive -->
  	{{ Form::bsText('due') }} <!-- This shit is very case sensitive -->
  	{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection