@extends('layouts.app')

@section('content')
<a href="/todo/{{$todo->id}}" class="btn btn-danger">Back</a>
  <h1>Edit Todo</h1>
  {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
  	{{ Form::bsText('text', $todo->text) }} <!-- 'text' This shit is very case sensitive -->
  	{{ Form::bsTextArea('body', $todo->body) }} <!-- This shit is very case sensitive -->
  	{{ Form::bsText('due', $todo->due) }} <!-- This shit is very case sensitive -->
  	{{ Form::hidden('_method','PUT') }}
  	{{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
@endsection  