@extends('layout')

@section('content')

    <h1>Edit Page</h1>

    <form action="/is421mvc/public/task/{{$task->id}}/edit" method="post" class="col-sm-8">

        <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <label for="taskTitle">Task Title</label>
            <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
        </div>

        <div class="form-group">
            <label for="taskStatus">Task Status</label>
            <select class="form-control" id="taskStatus" name="completed" value="{{$task->completed}}">
                <option value="1">Complete</option>
                <option value="2">Incomplete</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
    <p>



    Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}
    Updated at: {{$task->updated_at}}
    </p>

@endsection