<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TodolistModel;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function getTodos()
    {
        $todos = TodolistModel::orderBy('created_at', 'DESC')->get();
        return response()->json($todos);
    }

    public function storeTodo(Request $request)
    {
        $todo = TodolistModel::create($request->all());
        return response()->json($todo);
    }

    public function deleteTodo(Request $request)
    {
        $todo = TodolistModel::find($request->id);
        if ($todo) {
            $todo->delete();
            return response()->json($todo);
        }
        return response()->json(['message' => 'Todo not found'], 404);
    }

    public function updateTodo(Request $request)
    {
        $todo = TodolistModel::find($request->id);
        if ($todo) {
            $todo->update($request->all());
            return response()->json($todo);
        }
        return response()->json(['message' => 'Todo not found'], 404);
    }
}
