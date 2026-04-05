<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        ret urn view("tasks.testing",compact("tasks"));
    }
    public function storeTask(Request $request){
        $task = new Task();
        $task->title = $request->title;
        $task->is_completed = $request->has('is_completed');
        $task->save();

        return redirect()->route('task.index');
    }

    public function showTask($id){
        $task = Task::findOrFail($id);
        return response()->json($task);
    }
    public function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
