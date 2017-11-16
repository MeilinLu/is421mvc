@extends("layout")
@section("content")
    <!-------------This is for the task pages--------------------->


    <h1>{{$task->body}}</h1>
    <br>
    <br>
    <br>
    <div class="comments">
        <form action="/is421mvc/public/task/{{$task->id}}/comments" method="post" class="col-sm-offset-8">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        <ul class="list-group">
            @foreach($task->comments as $comment)
                <li class="list-group-item">
                    {{$comment->body}}<br>
                    <strong>
                        Created: {{$comment->created_at->diffForHumans()}}
                    </strong>
                </li>
            @endforeach
        </ul>
    </div>

@endsection