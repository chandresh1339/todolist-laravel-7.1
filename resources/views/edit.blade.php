@extends('layouts.app')

@section('content')
<h1>Create new Todo</h1>
<form method="post" action="/todo/{{ $todo->id }}">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" name="title" value="{{ $todo->title }}"  id="title" placeholder="Enter title">
  </div><br>
  <div class="form-group">
    <label for="content">Title</label>
    <input type="text" class="form-control" name="content" value="{{ $todo->content }}"  id="content" placeholder="Enter content">
  </div><br>
  <div class="form-group">
    <label for="Due">Due</label>
    <input type="text" class="form-control" name="due" value="{{ $todo->due }}"   id="due" placeholder="Enter Due">
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
