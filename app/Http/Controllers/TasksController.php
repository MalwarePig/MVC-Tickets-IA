<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tareas;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tareas = Tareas::all();
        return view('Tasks.index', compact('tareas'));
    }
}
