@extends('layouts.app')

@section('content')
        <h2>Tasks List</h2><br/>
        @if(session()->has('message'))
                    <div class="alert {{session('alert') ?? 'alert-info'}}">
                        {{ session('message') }}
                    </div>
        @endif
        <a href="/tasks/create" class="btn btn-primary">Create New Task</a><br/><br/>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Task Title</th>
              <th scope="col">Task Description</th>
              <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tasks as $task)
            <tr>
              <th scope="row">{{$task->id}}</th>
              <td><a href="/tasks/{{$task->id}}">{{$task->title}}</a></td>
              <td>{{$task->description}}</td>
              <td>{{$task->created_at->toFormattedDateString()}}</td>
              <td>
              <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{ URL::to('tasks/' . $task->id . '/edit') }}">
                  	<button type="button" class="btn btn-warning">Edit</button>
                  </a>&nbsp;
                  <form action="{{url('tasks', [$task->id])}}" method="POST">
    					<input type="hidden" name="_method" value="DELETE">
   						<input type="hidden" name="_token" value="{{ csrf_token() }}">
   						<input type="submit" class="btn btn-danger" value="Delete"/>
   				  </form>
              </div>
			</td>
            </tr>
            @endforeach
          </tbody>
        </table>
@endsection