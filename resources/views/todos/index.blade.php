<h1>Todos</h1>
@if(count($todos) > 0)
  @foreach($todos as $todo)
  	<div class="well">
  		<h3>{{$todo->text}}</h3>
  		<span class="lable lable-danger">{{$todo->due}}</span>
  	</div>
  @endforeach
@endif