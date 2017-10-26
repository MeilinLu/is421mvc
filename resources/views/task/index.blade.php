@extends("layout")
@section("content")
    <!-------------This is for the task pages--------------------->
    @foreach($tasks as $task)
        <li>
            <a href="/is421mvc/public/task/{{$task->id}}">
                {{$task->body}}
            </a>

        </li>
    @endforeach
@endsection