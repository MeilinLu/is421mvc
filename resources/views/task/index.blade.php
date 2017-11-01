@extends("layout")
@section("content")
    <!-------------This is for the task pages--------------------->

    <div class="page-header">

        <h1>Task List</h1>

    </div>

    <div class="row">

        <div class="col-md-6">

            <table class="table table-table table-striped">

                <thead>

                <tr>

                    <th>#</th>

                    <th>Task Name</th>

                    <th>Completed</th>

                    <th>Created</th>

                    <th>Action</th>

                    <th></th>

                </tr>

                </thead>

                <tbody>

                @foreach ($tasks as $task)

                    <tr>

                        <td>{{$task->id}}</td>

                        <td><a href="/is421mvc/public/task/{{$task->id}}">{{ $task->body }}</a></td>


                        <td>

                            <?php

                            if (!($task->completed)){

                                echo "No";

                            } else {

                                echo "Yes";

                            }

                            ?>

                        </td>



                        <td>

                        {{$task->created_at}}

                        <!--$date = date("d/m/Y", $task->created_at)-->

                            <!-- date("m/d/y", $task->created_at)-->

                        </td>



                        <td><button type="button" class="btn btn-warning">

                                <span class="glyphicon glyphicon-edit"></span>

                                <a href="/is421mvc/public/task/{{$task->id}}/edit">Edit</a>

                            </button>

                        </td>

                        <td><!--button type="button" class="btn btn-danger">

<a href="/MyFirstMVC/public/tasks/delete/ //$task->id}}">

<span class="glyphicon glyphicon-trash"></span>

</a>

</button-->

                            <div>

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">

                                    <span class="glyphicon glyphicon-trash"></span>

                                </button>



                                <!-- Modal pop-up -->

                                <div class="modal fade" id="myModal" role="dialog">

                                    <div class="modal-dialog">



                                        <!-- Modal content-->

                                        <div class="modal-content">

                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                <h3 class="modal-title">Delete Task</h3>

                                            </div>

                                            <div class="modal-body text-danger text-center">

                                                <h4>Task name: {{$task->body}}</h4>

                                                <h4>Completed: <?php

                                                    if (!($task->completed)){

                                                        echo "No";

                                                    } else {

                                                        echo "Yes";

                                                    }

                                                    ?></h4>

                                                <h4>Create at: {{$task->created_at}}</h4>

                                            </div>

                                            <div class="modal-footer">

                                                <h5 class="text-center">Please click on "confirm" to delete task. Click on "cancel" to cancel delete task. </h5>



                                                <form action="/is421mvc/public/task/{{$task->id}}/delete" method="post" class="col-sm-8">

                                                    {{csrf_field()}}

                                                    {{ method_field('delete') }}



                                                    <button type="submit" class="btn btn-primary">Confirm</button>

                                                    <button type="button" class="btn btn-primary">

                                                        <a class="bg-primary" href="/is421mvc/public/task">Cancel</a>

                                                    </button>

                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                                                </form>

                                            </div>

                                        </div>



                                    </div>

                                </div>

                                <!-- end model-->

                            </div>

                        </td>

                    </tr>

                @endforeach

                </tbody>

            </table>

            <div class="btn-group-vertical pull-right">

                <button type="button" class="btn btn-primary">

                    <a class="bg-primary" href="/is421mvc/public/task/create">Create New Task</a>

                    <span class="glyphicon glyphicon-pencil"></span>

                </button>



            </div>

        </div>

    </div><!--/row-->

@endsection

@section('footer')
    <script src="/js/file/js"></script>
    footer
@endsection


