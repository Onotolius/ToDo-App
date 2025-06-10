<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $task = new Task;
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Задача успешно создана!');
    }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $task = Task::findOrFail($id);
        $task->title = $data['title'];
        $task->description = $data['description'];
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Задача успешно обновлена !');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Задача успешно удалена');
    }
}
