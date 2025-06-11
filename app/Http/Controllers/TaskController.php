<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('filter') == 'done') {
            $tasks = Task::where('is_done', true)->get();
        } elseif ($request->query('filter') == 'undone') {
            $tasks = Task::where('is_done', false)->get();
        } else {
            $tasks = Task::all();
        }
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

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function markAsDone($id)
    {
        $task = Task::findOrFail($id);
        $task->is_done = true;
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Задача успешно выполнена');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
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
        Task::destroy($id);
        return redirect()->route('tasks.index')->with('success', 'Задача успешно удалена');
    }
}
