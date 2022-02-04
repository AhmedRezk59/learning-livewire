<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalTasks = auth()->user()->tasks()->count();
        $tasks = auth()->user()->tasks()->paginate(5);


        return view('tasks.index', compact('tasks', 'totalTasks'));
    }
}
