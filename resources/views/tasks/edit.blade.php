@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <hr>
     <form action="{{url('tasks', [$task->id])}}" method="POST">
     <input type="hidden" name="_method" value="PUT">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Task Title</label>
        <input type="text" class="form-control" id="taskTitle"  name="title" >
      </div>
      <div class="form-group">
        <label for="description">Task Description</label>
        <textarea class="form-control" id="taskDescription" name="description" ></textarea>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection