<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // List all task
    public function index(Request $request)
    {
        if ($request->status) {
            $tasks = Task::where('status', $request->status)->latest()->get();
        } else {
            $tasks = Task::latest()->paginate(10);
        }

        return response()->json($tasks);
    }

    //  Create a task
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:100',
            'due_date' => 'required|date|',
            'status' =>'required|string',
        ]);

        $task = Task::create($validated);

        return response()->json([
            'message' => 'Task created successfully',
            'data' => $task,
        ], 201);
    }

    // Show one task
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Update a task
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:20',
            'description' => 'required|string|max:100',
            'due_date' => 'required|date|',
            'status' =>'required|string',
        ]);

        $task->update($validated);

        return response()->json([
            'message' => 'Task updated successfully',
            'data' => $task,
        ]);
    }

    //  Remove a task
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Task deleted successfully',
        ]);
    }
}
