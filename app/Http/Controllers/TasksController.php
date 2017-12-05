<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    */

    public function index()
    {
        //$tasks = Task::all();
        $tasks = Task::where('user_id','=',Auth::id())->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('task.create');
        $tasks = Task::all();
        return view('task.create', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;

        $this->validate(request(),[
            'body' => 'required',
        ]);
        $task->user_id = auth()->id();

        $task->body = request('body');

        $task->completed = request('completed');
        $task->save();
        return redirect('/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*public function show( $id){
        $task = Task::find($id);
        return $task; // Task find wild card}
    */

    public function show( Task $task)
    {
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Task $task)
    {
        $task = Task::find($task->id);
        return view('task.edit', compact(['task','id'])); //compact return parameter list
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Task $task)
    {
        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/task');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Task $task)
    {
        $task->delete();

        // redirect
        return redirect('/task');
    }
}
