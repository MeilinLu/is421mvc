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
            @if($task->comleted == 0)
                <select class="form-control" id="taskStatus" name="completed">
                    <option value="0" selected>Incomplete</option>
                    <option value="1">Complete</option>
                </select>
            @else
                <select class="form-control" id="taskStatus" name="completed">
                    <option value="0">Incomplete</option>
                    <option value="1" selected>Complete</option>
                </select>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Save</button>




    </form>

    <p>
    <br>
    Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}
    <br>
    Updated at: {{$task->updated_at}}
    </p>

@endsection