@extends('layouts.app')

@section('content')
    <h1 class="text-primary">Todo List</h1>
    <a href="{{ route('todos.create') }}" class="btn-success">Add New Task</a>
    <ul class="list-group">
        @foreach ($todos as $todo)
            <li class="list-group-item">
                <strong>{{ $todo->title }}</strong>
                <div>
                    <a href="{{ route('todos.edit', $todo->id) }}" class="btn-warning">Edit</a>
                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
