@extends('app')

@section('content')
    <div class="container col-md-6 col-md-offset-3">
        <div class="form-group">
            <input id="todo-title" type="text" class="form-control">
            <input id="todo-description" type="text" class="form-control">
        </div>
        
        <button onclick="TODO.add()">Add</button>
    </div>
@endsection

<script src="js/todo.js"></script>