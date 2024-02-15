@extends('layouts.app')
@section('content')
<a href="/" class="btn btn-primary">Go Back</a>
<h1>{{$todo->title}}</h1>
<div class="label label-danger">{{$todo->due}}</div>
<hr>
<p>{{ $todo->content}}</p>


<form method="post" action="/todo/{{ $todo->id }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
<a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
@endsection